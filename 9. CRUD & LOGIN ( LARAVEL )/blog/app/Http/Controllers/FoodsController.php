<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = \App\Food::all();
        return view('/crud/index', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/crud/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi Data
        $request->validate([
            'nama' => 'required',
            ''
        ]);

        // Tambah Data Ke Database
        $food = new Food;
        $food->nama = $request->nama;
        $food->jenis_makanan = $request->jenis_makanan;
        $food->jenis_minuman = $request->jenis_minuman;
        $food->harga = $request->harga;
        $food->save();
        return redirect('/crud/index')->with('status', 'Data Berhasil Ditambahkan!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        return view('/crud/edit', compact('food'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        Food::where('id', $food->id)
            ->update([
                'nama' => $request->nama,
                'jenis_makanan' => $request->jenis_makanan,
                'jenis_minuman' => $request->jenis_minuman,
                'harga' => $request->harga,
            ]);
        return redirect('/crud/index')->with('status', 'Data Berhasil Diubah');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */

    public function destroy(Food $food)
    {
        Food::destroy($food->id);
        return redirect('/crud/index')->with('danger-status', 'Data Berhasil Dihapus');
    }
}
