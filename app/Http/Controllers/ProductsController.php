<?php

namespace App\Http\Controllers;
use App\Product;
//use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
}
