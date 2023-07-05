<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use Illuminate\Support\Facades\Validator;

class KamarController extends Controller
{

    public function index()
    {
        $kamar = Kamar::all();
        return view('awal', compact('kamar'));
    }

    public function index_kosan()
    {
        $kamar = Kamar::all();
        return view('kosan', compact('kamar'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|min:3|max:50|regex:/^[A-Za-z\s]+$/i',
            'kota' => 'required',
            'nomor' => 'required|max:14|regex:/^\+?(\d{1,3})?\s?\(?(\d{3})\)?[-.\s]?(\d{3})[-.\s]?(\d{4})$/',
        ], [
            'required' => ':attribute tidak boleh kosong',
            'min' => ':attribute terlalu pendek',
            'max' => ':attribute terlalu panjang',
            'regex' => ':attribute tidak dalam format yang benar',
        ]);

        $validator->validate();
        // Dapetin ID kamar dari request
        $kamarId = $request->input('id_kamar');

        // Ngurangin jumlah stok kamar
        $kamar = Kamar::findOrFail($kamarId);
        $kamar->stok_kamar = $kamar->stok_kamar - 1;
        $kamar->save();

        return redirect()->route('success')->with('success', 'Data kategori berhasil ditambahkan');
    }

    public function show($id)
    {
        $show = Kamar::findOrFail($id);
        return view('detail', compact('show'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
