<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index()
    {
        $cats = Cat::all();
        return response()->json($cats);
    }

    public function store(Request $request)
    {
        Cat::create($request->all());
        return redirect()->back();
    }
    
    public function edit($id)
    {
        $cat = Cat::find($id);
        return view('editkucing', compact('cat'));
    }

    public function update(Request $request, $id)
    {
        $cat = Cat::find($id);

        $cat->name = $request->input('name');
        $cat->breed = $request->input('breed');
        $cat->age = $request->input('age');
        $cat->price = $request->input('price');
        $cat->image = $request->input('image');

        $cat->save();

        return redirect()->route('datakucing')->with('success', 'Data kucing berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $cat = Cat::find($id);

        if (!$cat) {
            return redirect()->route('datakucing')->with('error', 'Data kucing tidak ditemukan.');
        }

        $cat->delete();

        return redirect()->route('datakucing')->with('success', 'Data kucing berhasil dihapus.');
    }
}
