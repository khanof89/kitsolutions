<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Slider;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    /**
     * @return string
     */
    public function index()
    {
        $menus = Menu::with('submenus')->where('active','1')->get();
        $sliders = Slider::with('slidertext')->get();
        return view('welcome',compact('menus', 'sliders'));
    }
}
