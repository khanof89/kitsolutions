<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Client;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Statistic;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    /**
     * @return string
     */
    public function index()
    {
        $sliders = Slider::with('slidertext')->get();
        $services = Service::get();
        $statistics = Statistic::get();
        $clients = Client::get();
        $blogs = Blog::take(3)->get();
        return view('welcome',compact('sliders', 'services', 'statistics', 'clients', 'blogs'));
    }
}
