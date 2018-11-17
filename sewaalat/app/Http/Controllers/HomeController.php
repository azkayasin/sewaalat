<?php

namespace App\Http\Controllers;

use App\Kategori;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function produk()
    {
        $produk = DB::table('barang')->get();
        $kategori = DB::table('kategori')->get();
        return view('produk', compact('kategori', 'produk'));

    }
    public function filter($id)
    {
        //$filter = barang::where('id', $id)->get();
        //$produk = DB::table('barang')->get();
        $produk = DB::table('barang')->where('id', $id +1)->get();
        $kategori = DB::table('kategori')->get();
        //$filter = DB::table('barang')->where('id', $id)->get();
        //dd($filter);
        return view('produk', compact('produk','kategori'));

    }
    public function cart()
    {
        return view('cart');
    }

    // public function kategori()
    // {
    //     $kategori = DB::table('kategori')->get();
    //     //$kategori = DB::table('kategori')->pluck('kategori');
    //     //dd($kategori);
    //     return view('produk', compact('kategori'));

    // }
}
