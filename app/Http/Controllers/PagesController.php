<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Storage;

class PagesController extends Controller
{

    public function index(){
      $title = 'Welcome to '.config('app.name');
      $mdg_services = Service::orderBy('service_name', 'asc')->pluck('service_name', 'id');
	//al method to pass values to page
       //return view('pages.index', compact('title'));
       $files = Storage::disk('images')->files('showcase');
       return view('pages.index')
        ->with('title', $title)
        ->with('files', $files)
        ->with('mdg_services', $mdg_services);
    }

    public function services(){
      $title = 'Services';
      $mdg_services = Service::orderBy('service_name', 'asc')->where('service_type', '')->paginate(1000, ['*'], 'mdg_services');

      return view('pages.services')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services);
    }

    public function asphalt(){
      $title = 'Concrete and Asphalt';
      $mdg_services = Service::orderBy('service_name', 'asc')
        ->where('service_type', 'asphalt')
        ->pluck('service_name', 'id');

      return view('pages.asphalt')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services);
    }

    public function cm(){
      $title = 'Construction Management';
      $mdg_services = Service::orderBy('service_name', 'asc')
        ->where('service_type', 'cm')
        ->pluck('service_name', 'id');

      return view('pages.cm')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services);
    }

    public function concrete(){
      $title = 'Custom Concrete';
      $mdg_services = Service::orderBy('service_name', 'asc')
        ->where('service_type', 'concrete')
        ->pluck('service_name', 'id');

      return view('pages.concrete')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services);
    }

    public function kitchenbath(){
      $title = 'Kitchen and Bath';
      $mdg_services = Service::orderBy('service_name', 'asc')
        ->where('service_type', 'kitchenbath')
        ->pluck('service_name', 'id');

      return view('pages.kitchenbath')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services);
    }

    public function demolition(){
      $title = 'Demolition';
      $mdg_services = Service::orderBy('service_name', 'asc')
        ->where('service_type', 'demolition')
        ->pluck('service_name', 'id');

      return view('pages.demolition')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services);
    }

    public function excavation(){
      $title = 'Excavation';
      $mdg_services = Service::orderBy('service_name', 'asc')
        ->where('service_type', 'excavation')
        ->pluck('service_name', 'id');


      return view('pages.excavation')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services);
    }

    public function groundupconstruction(){
      $title = 'Ground Up Construction';
      $mdg_services = Service::orderBy('service_name', 'asc')
        ->where('service_type', 'groundupconstruction')
        ->pluck('service_name', 'id');

      return view('pages.groundupconstruction')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services);
    }

    public function finishout(){
      $title = 'Interior Finish-Out';
      $mdg_services = Service::orderBy('service_name', 'asc')
        ->where('service_type', 'finishout')
        ->pluck('service_name', 'id');

      return view('pages.finishout')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services);
    }

    public function steel(){
      $title = 'Structural Steel';
      $mdg_services = Service::orderBy('service_name', 'asc')
        ->where('service_type', 'steel')
        ->pluck('service_name', 'id');

      return view('pages.steel')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services);
    }

    public function homes(){
      $title = 'Custom Homes';
      $mdg_services = Service::orderBy('service_name', 'asc')
        ->where('service_type', 'homes')
        ->pluck('service_name', 'id');

      return view('pages.homes')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services);
    }

}
