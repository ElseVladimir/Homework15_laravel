<?php

namespace App\Http\Controllers;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Product\StoreProductRequest;
use App\Category;

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

    public function show(Product $product /*$id*/){

        //$product = Product::find(id);

        return view('products.show')->with(compact('product'));
    }

    public function create(){
        $category = Category::all(); //Получает сущность категорий
        return view('products.create')->with(compact('category'));
    }

    public function store(StoreProductRequest $request){
        /* $this->validate($request,[
            'title' => 'required|min:3|max:20',
            'slug' => 'required|min:3|unique:products,slug',
            'price' => 'required|min:1|max:11',
            'description' => 'required'
            ]); */
        Product::create($request->all());
        return redirect('/products')->with('success','product created');
    }

    public function edit(Product $product /*$id*/){
        //$product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Product $product /*$id*/ , UpdateProductRequest $request){
        //$product = Product::find($id);
        /* $this->validate($request,[
            'title' => 'required|min:3|max:20',
            'slug' => 'required|min:3|unique:products,slug,'.$product->id ,
            'price' => 'required|min:1|max:11',
            'description' => 'required'
        ]);*/
        $product->update($request->all());
        return redirect('/products');
    }

    public function destroy(Product $product /*$id*/){
        //$product = Product::find($id);
        $product->delete();
        return redirect('/products');
    }
}
