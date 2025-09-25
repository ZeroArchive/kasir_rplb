<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         //menampilkan halaman produk
        // query untk memanggil data dari table
        $data['products'] = Products::with('showkategori')->get();
        $data['kategori'] = Kategori::all();
        // mengirim data ke tampilan
        return view('admin.products', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $products diisi dengan objek dari model produk
        $products = new Products;
        // $products->nama_produk sesuai dengan field di table
        // $request->nama_produk sesuai dengan nama pada form input
        $products->nama_produk = $request->nama_produk;
        $products->stok = $request->stok;
        $products->kategori_id = $request->kategori_id;
        $products->harga = $request->harga;
        $products->save();

        //kembali ke halaman produk
        return redirect('admin/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //mengambil data dari form edit
        $products = Products::findOrFail($id);
        $products->nama_produk = $request->nama_produk;
        $products->stok = $request->stok;
         $products->kategori_id = $request->kategori_id;
        $products->harga = $request->harga;
        $products->save();

        //kembali ke halaman produk
        return redirect('admin/products');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //menghapus data produk berdasarkan id
        $products = Products::findOrFail($id);
        $products->delete();
        return redirect('/admin/products');
    }
}
