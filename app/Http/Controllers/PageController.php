<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }
    public function product(){
        $product = ['baju', 'sepatu', 'kemeja', 'sendal', 'topi', 'jaket'];
        return view('product', ['product' => $product]);
    }
    public function news($id){
        return view ('news',['id' => $id]);
    }
    public function program(){
        $program = ['magang', 'karir'];
        return view('program', ['program' => $program]);
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view ('about');
    }
}
