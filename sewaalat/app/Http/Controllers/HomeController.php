<?php

namespace App\Http\Controllers;

use App\Barang;
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
    public function cart()
    {
        return view('cart');
    }

    public function addToCart($id)
    {
        $produk = Barang::find($id);
        if(!$produk){

            abort(404);
        }

        $cart = session()->get('cart');

        if(!$cart){
            $cart = [
                $id => [
                    "nama" => $produk->nama,
                    "harga" => $produk->harga,
                    "jumlah" => 1,
                    "image"=>$produk->imageUrl
                ]
            ];

            session()->put('cart',$cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        if(isset($cart[$id])) {
 
            $cart[$id]['jumlah']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }

        $cart[$id] = [
            "nama" => $produk->nama,
            "harga" => $produk->harga,
            "jumlah" => 1,
            "image"=>$produk->imageUrl
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["jumlah"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function filter($id)
    {
        $produk = DB::table('barang')->where('id', $id)->get();
        $kategori = DB::table('kategori')->get();
        return view('produk', compact('produk','kategori'));

    }
}
