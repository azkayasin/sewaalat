<?php

namespace App\Http\Controllers;
use Auth;
use App\Barang;
use App\Kategori;
use App\Booking;
use App\User;
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
    public function contact()
    {
        return view('contact');
    }
     public function pemesanan()
    {
        $pemesanan = DB::table('booking')->where('user_id', Auth::user()->id)->get();
        return view('pemesanan',compact('pemesanan'));
    }

    public function produk()
    {
        $produk = DB::table('barang')->simplePaginate(12);
        $kategori = DB::table('kategori')->get();
        return view('produk', compact('kategori', 'produk'));

    }
     public function halaman()
    {
        $produk = DB::table('barang')->where('id','>', 12)->get();
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
        $produk = DB::table('barang')->where('kategori_id', $id)->get();
        $kategori = DB::table('kategori')->get();
        return view('produk', compact('produk','kategori'));

    }

    public function hari ($pesan, $kembali)
    {
        $pesan = Carbon::parse ($pesan);
        $kembali = Carbon::parse ($kembali);
        $lama = $kembali->diffInDays($pesan);
        return view('produk', compact('lama'));
    }

    public function store(Request $request)
    {

         $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'alamat' => 'required',
            'nomor' => 'required',
            'tanggalpesan' => 'required',
            'tanggalkembali' => 'required',
            'total1' => 'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        $booking= new Booking();
        $booking->nama_pemesan=$request->name;
        $booking->user_id=$request->user_id;
        $booking->alamat_pemesan=$request->alamat;
        $booking->nomor=$request->nomor;
        $booking->tanggal_pemesan=$request->tanggalpesan;
        $booking->tanggal_kembali=$request->tanggalkembali;
        $booking->total=$request->total1;
        $booking->save();

        session()->forget('cart');
   
        return view('home');
    }
}
