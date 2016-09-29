<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Content;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Statistic;
use App\Models\Team;
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

    public function about()
    {
        $abouts = Content::where('page', 'about')->get();
        $menus = About::get();
        return view('about',compact('abouts','menus'));
    }

    public function services()
    {
        $services = Service::get();
        return view('services',compact('services'));
    }

    public function clients()
    {
        $contents = Content::where('page', 'clients')->get();
        $clients = Client::get();
        return view('clients',compact('clients','contents'));
    }

    public function team()
    {
        $contents = Content::where('page','teams')->get();
        $members = Team::get();
        return view('team',compact('members','contents'));
    }

    public function blogs()
    {
        $blogs = Blog::get();
        return view('blogs',compact('blogs'));
    }
}
