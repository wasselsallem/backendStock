<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
class ProductController extends Controller
{
    public function getAll(){
        return ProductModel::all();
    }
    public function store(Request $request){
        ProductModel::create([
            "produit" => $request->produit,
            "quantité" => $request->quantité,
            "qualité" => $request->qualité,
            "prix" => $request->prix,
        ]);
        return "ds";
    }
    public function update($id,Request $request){
        $product= ProductModel::find($id);
        $product->quantité=$request->quantité;
        $product->produit=$request->produit;
        $product->qualité=$request->qualité;
        $product->prix=$request->prix;
        $product->save();
        return $product;
    }
    public function delete($id){
        $product= ProductModel::find($id);
        $product->delete();
        return "deleted";
    }
}
