<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private function fetchData($apiEndpoint)
    {
        $response = Http::get($apiEndpoint);

        if ($response->successful()) {
            return $response->json();
        } else {
            return [];
        }
    }

    public function index()
    {
        $data = $this->fetchData('https://fakestoreapi.com/products');
        $cart_data = $this->fetchData('https://fakestoreapi.com/carts/user/2');

        return view('welcome', compact('data', 'cart_data'));
    }

    public function getCart()
    {
        $data = $this->fetchData('https://fakestoreapi.com/carts/2');
        $cart_data = $this->fetchData('https://fakestoreapi.com/carts/user/2');

        return view('cart', compact('data', 'cart_data'));
    }

}
