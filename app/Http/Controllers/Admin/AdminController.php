<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Reservation;
use App\Models\table;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function index(){

        $categoryCount = Category::count();
        $menuCount = Menu::count();
        $tableCount = table::count();
        $reserCount = Reservation::count();
    
        return view("admin.index",compact('categoryCount','menuCount','tableCount','reserCount'));
    }
}
