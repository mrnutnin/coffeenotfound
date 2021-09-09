<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function index()
    {
        return view('e-commerce.index');
    }
    public function index2()
    {
        return view('e-commerce.index-2');
    }
    public function index3()
    {
        return view('e-commerce.index-3');
    }
    public function index4()
    {
        return view('e-commerce.index-4');
    }
    public function products()
    {
        return view('e-commerce.products');
    }
    public function productsWithFilter()
    {
        return view('e-commerce.products-with-filter');
    }
    public function productsSidebarLeft()
    {
        return view('e-commerce.products-sidebar-left');
    }
    public function productsSidebarRight()
    {
        return view('e-commerce.products-sidebar-right');
    }
    public function product()
    {
        return view('e-commerce.product');
    }
    public function wishlist()
    {
        return view('e-commerce.wishlist');
    }
    public function cart()
    {
        return view('e-commerce.cart');
    }
    public function checkout()
    {
        return view('e-commerce.checkout');
    }
    public function orderReceived()
    {
        return view('e-commerce.order-received');
    }
    public function orderTracking()
    {
        return view('e-commerce.order-tracking');
    }
    public function page()
    {
        return view('e-commerce.page');
    }
    public function loginRegister()
    {
        return view('e-commerce.login-register');
    }
    public function Error404()
    {
        return view('e-commerce.Error-404');
    }
    public function faqs()
    {
        return view('e-commerce.faqs');
    }
    public function about()
    {
        return view('e-commerce.about');
    }
    public function contact()
    {
        return view('e-commerce.contact');
    }
}
