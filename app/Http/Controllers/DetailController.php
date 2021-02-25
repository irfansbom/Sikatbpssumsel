<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DetailController extends Controller
{
    public function detail(Request $request)
    {
        $id = $request->id;
        $domain = 1600;
        $respon = $this->getdetailpub($domain, $id);
        $data = $respon->data;
        // dump($respon);
        return view('detailpub', ['data' => $data]);
    }
    public  $detailpuburl = 'https://webapi.bps.go.id/v1/api/view';

    public function getdetailpub($domain, $id)
    {
        $geturl = $this->detailpuburl . '?model=publication&domain=' . $domain .
            '&key=dbe98f5a1af4a2bcda068e1d7f35ea5d&lang=ind&id=' . $id;
        // dump($geturl);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $geturl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response);
    }
}
