<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {



       // $this->middleware('auth');
       $totalApplication=Application::get()->count();

      

       $totalPending=Application::where('status', '=', 1)->orderBy('created_at', 'DESC')->get()->count();
       $totalRejected=Application::where('status', '=', 5)->orderBy('created_at', 'DESC')->get()->count();
       $totalHandOver=Application::where('status', '=', 4)->orderBy('created_at', 'DESC')->get()->count();
       $totalApproved=Application::where('status', '=', 3)->orderBy('created_at', 'DESC')->get()->count();
       
       

       


       $peindingApplications = Application::where('status', '=', 1)->orderBy('created_at', 'DESC')->get();
    
      return view('home',compact('peindingApplications','totalApplication','totalPending','totalRejected','totalHandOver','totalApproved'));
       
    }

    public function allotteeManager()
    {
       // $this->middleware('auth');

       $peindingApplications = Application::where('status', '=', 4)->orderBy('created_at', 'DESC')->get();
    
      return view('allotteeManager',compact('peindingApplications'));
       
    }

    

   
}
