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
        $kategori = DB::table('kategori')->get();
        return view('produk', compact('kategori'));
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
