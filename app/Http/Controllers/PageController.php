<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
 public function index(){
    echo'selamat datang';
 }
 public function about(){
    echo'Alvaro Hegel Ivanka 2141720237';
 }
 public function articles($id){
    echo'Halaman Artikel dengan '.$id;
 }
}

