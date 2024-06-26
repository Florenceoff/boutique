<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


public function index()
{
    $products = Product::all();
    return view('products.index', ['products' => $products]);
}

public function show($id)
{
    $product = Product::find($id);
    return view('products.show', ['product' => $product]);
}

public function create()
{
    return view('products.create');
}

public function store(Request $request)
{
    // Valider les données du formulaire
    $request->validate([
        'name' => 'required',
        'description'=>'required'
        'price' => 'required',
    ]);

    // Créer un nouveau produit
    Product::create($request->all());

    return redirect()->route('products.index');
}

public function edit($id)
{
    $product = Product::find($id);
    return view('products.edit', ['product' => $product]);
}

public function update(Request $request, $id)
{
    // Valider les données du formulaire
    $request->validate([
        'name' => 'required',
        'description'=> 'required'
        'price' => 'required',
    ]);

    // Mettre à jour le produit existant
    Product::find($id)->update($request->all());

    return redirect()->route('products.index');
}

public function destroy($id)
{
    // Supprimer le produit
    Product::destroy($id);

    return redirect()->route('products.index');
}

