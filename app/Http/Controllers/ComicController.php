<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComicController extends Controller
{

    public function index()
    {
        /*Equivale a un SELECT **/
        $comic = DB::table('Comics')
            ->orderBy('nomComic','asc')
            ->get();

        return view('Comic.inicio',[
            'comics'=>$comic]);
    }

    public function create()
    {
        return view('Comic.detalle');
    }

    public function store(Request $request)
    {
        // Equivale a un INSERT
        $comic = DB::table('Comics')->insert([
            'nomComic' => $request->input('nombre'),
            'precio' => $request->input('precio'),
            'created_at' => $request->input('creado'),
            'updated_at' => $request->input('actualizado')
        ]);
        return redirect()->action([ComicController::class, 'index']);
    }

    public function show($id)
    {
        $comic = DB::table('Comics')
            ->where('idComic','=',$id)
            ->first();

        return view('Comic.detalle',['comic' => $comic]);
    }

    public function update(Request $request)
    {
        $comic = DB::table('Comics')
            ->where('idComic','=',$request->input('id'))
            ->update([
            'nomComic' => $request->input('nombre'),
            'precio' => $request->input('precio'),
            'created_at' => $request->input('creado'),
            'updated_at' => $request->input('actualizado')
        ]);
        return redirect()->action([ComicController::class, 'index']);
    }


    public function destroy($id)
    {
        $comic = DB::table('Comics')
            ->where('idComic','=',$id)
            ->delete();
        return redirect()->action([ComicController::class, 'index']);
    }
}
