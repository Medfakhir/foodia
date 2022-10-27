<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index(){

     

        $Menus= Menu::all();
        return view("welcome",compact('Menus'));
    }

    public function thankyou()
    {
        return view('thankyou');
    }
}
