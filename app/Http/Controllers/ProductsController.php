<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index(){
        //корявый вывод из базы данных ТАК ДЕЛАТЬ НЕЛЬЗЯ ПРИМЕР АЛЯРМ АТЕНШН!!!!
        //$products = DB::table('products')->get();
        $products = Product::all(); //правильный


        //записываем массив в метод with, где ключ массива интерпретируется в переменную, где в индексе делаю
        //цикл pageAll и получаю через свойства нужные колонки из базы данных

            $productsAll = $products;

        return view('products.index')->with(compact('productsAll'));
    }

    public function show($id){
        $product = Product::find($id);

        return view('products.show')->with(compact('product'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required|min:3|max:20',
            'slug' => 'required|min:3|max:20',
            'price' => 'required|min:1|max:11',
            'description' => 'required'
            ]);
        Product::create($request->all());
        return redirect('/products');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update($id, Request $request){
        $product = Product::find($id);
        $product->update($request->all());
        return redirect('/products');
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('/products');
    }
}
