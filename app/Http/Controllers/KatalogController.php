<?php

namespace App\Http\Controllers;

use App\Models\Publikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Util\Json;

class KatalogController extends Controller
{
    public function katalog(Request $request)
    {
        $halaman = $request->input('halaman');
        $search = $request->input('search');
        $selecteddomain = intval($request->input('domain'));
        if ($selecteddomain == null) {
            $selecteddomain = 1600;
        }
        $listdomain = $this->getdomain();
        // dd($listdomain);
        if ($listdomain == null) {
            return view('error.servererror');
        }
        $listdomain = $this->getdomain()->data[1];
        $respon = $this->getallpub($selecteddomain, 1, $search);
        if ($respon != null) { //cek website pusat error atau tidak
            if ($respon->data != "") { // tidak error, cek jumlah data pusat
                $info = $respon->data[0];
                $last_page = $info->pages;
                if ($halaman > $last_page) {
                    $info = new Json;
                    $listpublikasi =  Publikasi::where('domain', $selecteddomain)->where('status_website', '0')->paginate(12, ['*'], 'page', $halaman - $last_page);
                    $info->page = $listpublikasi->currentPage() + $last_page;
                    $info->pages = $listpublikasi->lastPage() + $respon->data[0]->pages;
                    return view('katalog', ['publikasi' => $listpublikasi, 'info' => $info, 'search' => $search, 'listdomain' => $listdomain, 'selecteddomain' => $selecteddomain, 'alert' => 'no']);
                } else {
                    $respon = $this->getallpub($selecteddomain, $halaman, $search);
                    $listpublikasi = $respon->data[1];
                    $publikasiDB = Publikasi::where('domain', $selecteddomain)->where('status_website', '0')->paginate(12);
                    $info = $respon->data[0];
                    $info->pages += $publikasiDB->lastPage();
                    return view('katalog', ['publikasi' => $listpublikasi, 'info' => $info, 'search' => $search, 'listdomain' => $listdomain, 'selecteddomain' => $selecteddomain, 'alert' => 'no']);
                }
            } else {
                $respon = $this->getallpub(1600, $halaman, null);
                $listpublikasi = $respon->data[1];
                $info = $respon->data[0];
                return view('katalog', ['publikasi' => $listpublikasi, 'info' => $info, 'search' => $search, 'listdomain' => $listdomain, 'selecteddomain' => $selecteddomain, 'alert' => 'yes']);
            }
        } else { //kalo error gunakan database sendiri
            $info = new Json;
            $listpublikasi =  Publikasi::where('domain', $selecteddomain)->where('status_website', '0')->paginate(12, ['*'], 'page', $halaman);
            $info->page = $listpublikasi->currentPage();
            $info->pages = $listpublikasi->lastPage();
            return view('katalog', ['publikasi' => $listpublikasi, 'info' => $info, 'search' => $search, 'listdomain' => $listdomain, 'selecteddomain' => $selecteddomain, 'alert' => 'no']);
        }
    }

    public $allpuburl = 'https://webapi.bps.go.id/v1/api/list';
    public function getallpub($domain, $halaman, $search = null)
    {
        // if ($domain == null) {
        //     $domain = 1600;
        // }
        if ($halaman == null or $halaman == 0) {
            $halaman = 1;
        }
        if ($search != null) {
            $geturl = $this->allpuburl . '?model=publication&domain=' . $domain . '&key=dbe98f5a1af4a2bcda068e1d7f35ea5d&page=' . $halaman . '&keyword=' . $search;
        } else {
            $geturl = $this->allpuburl . '?model=publication&domain=' . $domain . '&key=dbe98f5a1af4a2bcda068e1d7f35ea5d&page=' . $halaman;
        }

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $geturl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);
        curl_close($curl);
        // dd(json_decode($response));
        return json_decode($response);
        // if (json_decode($response) != null) {
        //     return json_decode($response);
        // } else {
        //     return $response;
        // }
    }
    public function getdomain()
    {
        $url = 'https://webapi.bps.go.id/v1/api/domain/type/kabbyprov/prov/1600/key/dbe98f5a1af4a2bcda068e1d7f35ea5d/';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);
        curl_close($curl);
        // dd($response);
        return json_decode($response);
    }
}
