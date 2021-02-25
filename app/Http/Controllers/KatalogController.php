<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KatalogController extends Controller
{
    public function katalog(Request $request)
    {
        $page = $request->input('page');
        $search = $request->input('search');
        $selecteddomain = 1600;
        $domain = DB::table('domain')->get();
        $respon = $this->getallpub(1600, $page, $search);
        $listpublikasi = $respon->data[1];
        $info = $respon->data[0];
        // dump($info);
        // dd($respon->data[1]);
        // $info = $respon->data[0];
        // $publikasi = $respon->data[1];
        // if ($info->pages > 1) {
        //     // for ($i = 2; $i <= $info->pages; $i++) {
        //     //     $respon2 = $this->getallpub(1600, $i);
        //     //     foreach ($respon2->data[1] as $value) {
        //     //         array_push($publikasi, $value);
        //     //     };
        //     // }
        // }
        return view('katalog', ['publikasi' => $listpublikasi, 'info' => $info, 'search' => $search, 'domain' => $domain, 'selecteddomain' => $selecteddomain]);
    }

    public function search(Request $request)
    {
        $page = $request->input('page');
        $search = $request->input('search');
        $domain = DB::table('domain')->get();
        $selecteddomain = 1600;
        // dd($domain);
        $respon = $this->getallpub(1600, $page, $search);
        // dd($respon);
        if ($respon->data != "") {
            $listpublikasi = $respon->data[1];
            $info = $respon->data[0];
            return view('katalog', ['publikasi' => $listpublikasi, 'info' => $info, 'search' => $search, 'domain' => $domain, 'selecteddomain' => $selecteddomain]);
        } else {
            return "Tidak Ditemukan";
        }
    }

    public  $detailpuburl = 'https://webapi.bps.go.id/v1/api/view';
    public $allpuburl = 'https://webapi.bps.go.id/v1/api/list';

    public function getallpub($domain, $page, $search = null)
    {
        if ($page == null or $page == 0) {
            $page = 1;
        }
        if ($search != null) {
            $geturl = $this->allpuburl . '?model=publication&domain=' . $domain . '&key=dbe98f5a1af4a2bcda068e1d7f35ea5d&page=' . $page . '&keyword=' . $search;
        } else {
            $geturl = $this->allpuburl . '?model=publication&domain=' . $domain . '&key=dbe98f5a1af4a2bcda068e1d7f35ea5d&page=' . $page;
        }
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $geturl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response);
    }
}
