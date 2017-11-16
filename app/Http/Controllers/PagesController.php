<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class PagesController extends Controller
{

    public function index(){
      $title = 'Welcome to '.config('app.name');
      $mdg_services = Service::orderBy('service_name', 'asc')->pluck('service_name', 'id');
	//al method to pass values to page
       //return view('pages.index', compact('title'));
       return view('pages.index')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services);
    }

    public function quote(){
      $title = 'Welcome to '.config('app.name');
      $services = Service::orderBy('service_name', 'asc')->pluck('service_name', 'id');
       return view('pages.quote')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services);
    }

    public function services(){
      $service_listing = Service::orderBy('service_name', 'asc')->pluck('service_name');
      $mdg_services = Service::orderBy('service_name', 'asc')->pluck('service_name', 'id');
      $data = array(
		       'title' => 'Services',
		       'services' => $service_listing
      );

      return view('pages.services')
        ->with('mdg_services', $mdg_services)
        ->with('data', $data);
    }

}
