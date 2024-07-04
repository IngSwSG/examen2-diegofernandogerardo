<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Categoria;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $categoria_id = $request->input('categoria_id');

        $materiales = Material::with('categoria')
            ->when($categoria_id, function ($query, $categoria_id) {
                return $query->where('categoria_id', $categoria_id);
            })
            ->when($search, function ($query, $search) {
                return $query->where('descripcion', 'like', "%$search%");
            })
            ->get();

        return view('Material.index', [
            'materiales' => $materiales,
            'search' => $search,
            'categorias' => Categoria::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Material.create', [
            'categorias' => Categoria::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'descripcion' => 'required',
            'unidadMedida' => 'required',
            'ubicacion' => 'required',
            'categoria_id' => 'required'
        ]);

        Material::create($data);

        return redirect()->route('materials.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        return view('Material.show', [
            'material' => $material
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($codigo)
    {
        $material = Material::findOrFail($codigo);
    
        return view('Material.edit', [
            'material' => $material,
            'categorias' => Categoria::all()
        ]);
    }
    
    public function update(Request $request, $codigo)
    {
        $material = Material::findOrFail($codigo);
    
        $data = $request->validate([
            'descripcion' => 'required',
            'unidadMedida' => 'required',
            'ubicacion' => 'required',
            'categoria_id' => 'required'
        ]);
    
        $material->update($data);
    
        return redirect()->route('materials.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        $material->delete();

        return redirect()->route('materials.index');
    }
}
