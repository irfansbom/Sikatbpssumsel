<?php

namespace App\Http\Controllers;

use App\Models\Publikasi;
use Dotenv\Validator;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

class PublikasiController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $id = $request->id;
        // dd($id);
        if ($request->id == null) {
            $id = Publikasi::orderBy('pub_id', 'desc')->first()->pub_id + 1;
        } else {
            $id = $request->id;
        }
        // dd($id);
        $namecover = $request->covername;
        if ($request->hasfile('cover')) {
            $namecover = $id . "_" . $request->file('cover')->getClientOriginalName();
            $request->file('cover')->move(public_path() . '/files/cover', $namecover);
        }
        $namepdf = $request->pdfname;
        if ($request->hasfile('pdf')) {
            $namepdf = $id . "_" . $request->file('pdf')->getClientOriginalName();
            $request->file('pdf')->move(public_path() . '/files/pdf', $namepdf);
        }
        // dump($id);
        $post = Publikasi::updateOrCreate(
            ['pub_id' => $id],
            [
                'title' => $request->judul,
                'no_rak' => $request->no_rak,
                'domain' => $request->domain,
                'rl_date' => $request->rl_date,
                'abstract' => $request->abstrak,
                'status_website' => $request->status_website,
                'cover' => $namecover,
                'pdf' => $namepdf,
            ]
        );
        return response()->json($post);
    }
    public function edit($id)
    {
        $where = array('pub_id' => $id);
        $post  = Publikasi::where($where)->first();
        return response()->json($post);
    }
    public function destroy($id)
    {
        $post = Publikasi::where('pub_id', $id)->delete();
        return response()->json($post);
    }
}
