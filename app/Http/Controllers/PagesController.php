<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class PagesController extends Controller
{
    public function index(){
       $title = 'Welcome to '.config('app.name');
	//al method to pass values to page
       //return view('pages.index', compact('title'));
       return view('pages.index')->with('title', $title);
    }

    public function quote(){
       $title = 'Welcome to '.config('app.name');
       return view('pages.quote')->with('title', $title);
    }

    public function services(){
      $service_listing = Service::orderBy('service_name', 'asc')->pluck('service_name');
      $data = array(
		       'title' => 'Services',
		       'services' => $service_listing
      );

      return view('pages.services')->with($data);
    }

}
