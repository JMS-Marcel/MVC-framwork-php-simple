<?php

class Product extends Controller
{
  public function index(){
    $this->view('products/product');
  }
}