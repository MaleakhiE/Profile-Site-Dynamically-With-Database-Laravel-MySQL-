<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Portofolios;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Menu;
use App\Models\Menu2;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $portofolios = Portofolios::all();
        $about = About::First();
        $service = Service::all();
        $skill = Skill::all();
        $menu = Menu::first();
        $menu2 = Menu2::first();

        return view('home.index',compact(
            'portofolios',
            'about',
            'service',
            'skill',
            'menu',
            'menu2'
        ));
    }
    
    public function portofolio()
    {
        $portofolios = Portofolios::all();
        return view('portofolios.index',compact('portofolios'));
    }

    public function service()
    {
        $service = Service::all();
        return view('service.index',compact('service'));
    }

    public function about()
    {
        $about = About::First();
        dd($about);
        return view('about.index',compact('about'));
    }
}
 