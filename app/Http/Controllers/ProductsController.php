<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Product;
use App\ProdType;
use App\Cart;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(6);
        return view ('home', compact('products'));
    }

    //untuk menampilkan produk berdasarkan tipe produk (card di welcome page)
    public function detail($prodtypeId){
        $products=Product::where('prodtypeId',$prodtypeId)->get();
        return view('products.products', compact('products'));
    }

    //funct untuk menjalankan search
    public function search(Request $request){

        $search = $request->get('search');
        if($search == ''){
            //validasi jika search bar kosong ttp buttonnya dipencet, akan redirect ke home page
            $products = Product::paginate(6);
            return view('home', compact('products'));
        }

        $products = Product::where("prodnama",'like',"%".$search."%")->get();

        return view ('products.result', ['products' => $products]);
    }

    //funct untuk add item to cart. menggunakan session. algo utama ada di model Cart
    public function cart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        
        return redirect('/home');

    }

    //untuk menampilkan cart
    public function cartIndex(){
        if(!Session::has('cart')){
            return view ('error.cartempty');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart ($oldCart);
        return view('cart', ['products' => $cart->items,  'totalPrice' => $cart->totalPrice]);
    }

    //untuk menghapus semua item di cart/untuk mengosongkan cart
    public function cartDelete(){
        Session::forget('cart');
        return redirect('/home');
    }

    public function ReduceCart(){
        //blm dibikin, tidak mengerti caranya.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodtypes=ProdType::all();
        return view ('products.create', compact('prodtypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'prodnama' => 'required|unique:products,prodnama|min:5',
            'prodtypeId' => 'required',
            'stock' => 'required|integer|gt:0',
            'price' => 'required|integer|gt:5000',
            'desc' => 'required|min:10',
            'image' => 'required|file|image'
        ]);

        Product::create([
            'prodnama' => $request-> prodnama,
            'prodtypeId' => $request-> prodtypeId,
            'desc' => $request-> desc,
            'stock' => $request-> stock,
            'price' => $request-> price,
            'image' => $request->file('image')->store('uploads', 'public')
        ]);
        // $this->storeProdType($request);
        // ProdType::create($request->all());
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        $prodtype=ProdType::all();
        
        return view('products.details',compact('product','prodtype'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.update',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'prodnama' => 'required|unique:products,prodnama|min:5',
            'stock' => 'required|integer|gt:0',
            'price' => 'required|integer|gt:5000',
            'desc' => 'required|min:10',
            
        ]);

        Product::where('id',$product->id)
            ->update([
            'prodnama' => $request-> prodnama,
            'desc' => $request-> desc,
            'stock' => $request-> stock,
            'price' => $request-> price
        ]);
        // $this->storeProdType($request);
        // ProdType::create($request->all());
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/home');
    }

    //untuk checkout, hanya sebatas redirect krn tidak mengerti 
    public function checkout(){
        Session::forget('cart');
        // alert('Berhasil Checkout !');
        return redirect('/home')->with('status','Checkout Success !');
    }
}
