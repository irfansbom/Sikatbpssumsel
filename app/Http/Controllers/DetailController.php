<?php

namespace App\Http\Controllers;

use App\Models\Publikasi as ModelsPublikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function detail(Request $request)
    {
        $id = $request->id;
        $domain = $request->domain;
        $respon = $this->getdetailpub($domain, $id);
        // dd($respon);
        if ($respon != null) {
            if ($this->getdetailpub($domain, $id)->data != "") {
                $respon = $this->getdetailpub($domain, $id);
                $data = $respon->data;
                // dump($respon);
                if (ModelsPublikasi::where('title', $data->title)->first()) {
                    $data->no_rak = ModelsPublikasi::where('title', $data->title)->first()->no_rak;
                } else {
                    $data->no_rak = '-';
                }
                return view('detailpub', compact('data'));
            } else {
                $data = ModelsPublikasi::where('pub_id', $id)->first();
                // dump($data);
                return view('detailpub', compact('data'));
            }
        } else if (ModelsPublikasi::where('pub_id', $id)->first()) {
            $data = ModelsPublikasi::where('pub_id', $id)->first();
            // dump($data);
            return view('detailpub', compact('data'));
        } else {
            return "Data Tidak Ditemukan";
        }
    }
    public  $detailpuburl = 'https://webapi.bps.go.id/v1/api/view';

    public function getdetailpub($domain, $id)
    {
        $geturl = $this->detailpuburl . '?model=publication&domain=' . $domain .
            '&key=dbe98f5a1af4a2bcda068e1d7f35ea5d&lang=ind&id=' . $id;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $geturl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response);
    }
}
