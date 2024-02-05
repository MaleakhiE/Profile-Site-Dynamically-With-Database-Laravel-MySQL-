<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Portofolios;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Menu;
use App\Models\Menu2;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $portofolios = Portofolios::all();
        $about = About::First();
        $service = Service::all();
        $skill = Skill::all();
        $menu = Menu::First();
        $menu2 = Menu::First();

        return view('dashboard',compact(
            'portofolios',
            'about',
            'service',
            'skill',
            'menu',
            'menu2'
        ));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
}
