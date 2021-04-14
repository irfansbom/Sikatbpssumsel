<?php

namespace App\Http\Controllers;

use App\DataTables\PublikasiDataTable;
use App\Models\Publikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{


    public function loginview(Request $request, PublikasiDataTable $datatable)
    {
        if (session()->has('username')) {
            $list_publikasi = Publikasi::all();
            // if(){}
            // dd($this->getdomain());
            $listdomain = $this->getdomain()->data[1];
            if ($request->ajax()) {
                return datatables()->of($list_publikasi)
                    ->addColumn('action', function ($data) {
                        $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->pub_id . '" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Detail</a>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="' . $data->pub_id . '" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
            }
            return $datatable->render('admin/admin', compact('listdomain'));
        } else {
            return view('admin/login');;
        }
    }
    public function login(Request $request, PublikasiDataTable $datatable)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $pwdb = DB::table('admin')->where('username', $username)->get('password')->first();
        $data = $request->input();
        if ($pwdb != null && Hash::check($password, $pwdb->password)) {
            $request->session()->put('username', $data['username']);
            $listdomain = $this->getdomain()->data[1];
            $model =  new Publikasi();
            $list_publikasi = Publikasi::all();
            if ($request->ajax()) {
                return datatables()->of($list_publikasi)
                    ->addColumn('action', function ($data) {
                        $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="' . $data->id . '" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
            }
            // dd($listdomain);
            return $datatable->render('admin/admin', compact('listdomain', 'model'));
        } else {
            return redirect()->action([AdminController::class, 'loginview'], ['alert' => 'yes']);
        }
    }
    public function logout()
    {
        session()->forget('username');
        return  redirect()->action([AdminController::class, 'loginview']);
    }
    public function getdomain()
    {
        $prov = 1600;
        $url = 'https://webapi.bps.go.id/v1/api/domain/type/kabbyprov/prov/1600/key/dbe98f5a1af4a2bcda068e1d7f35ea5d/';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response);
    }
}
