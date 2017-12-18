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

    public function services(){
      $title = config('app.name').' Services';
      $service_listing = Service::orderBy('service_name', 'asc')->pluck('service_name');
      $mdg_services = Service::orderBy('service_name', 'asc')->pluck('service_name', 'id');
      $data = array(
		       'title' => 'Services',
		       'services' => $service_listing
      );

      return view('pages.services')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services)
        ->with('services', $service_listing);
    }

    public function asphalt(){
      $title = 'Concrete and Asphalt';
      $service_listing = Service::orderBy('service_name', 'asc')->pluck('service_name');
      $mdg_services = Service::orderBy('service_name', 'asc')->pluck('service_name', 'id');
      $data = array(
           'title' => 'Services',
           'services' => $service_listing
      );

      return view('pages.asphalt')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services)
        ->with('services', $service_listing);
    }

    public function cm(){
      $title = 'Construction Management';
      $service_listing = Service::orderBy('service_name', 'asc')->pluck('service_name');
      $mdg_services = Service::orderBy('service_name', 'asc')->pluck('service_name', 'id');
      $data = array(
           'title' => 'Services',
           'services' => $service_listing
      );

      return view('pages.cm')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services)
        ->with('services', $service_listing);
    }

    public function concrete(){
      $title = 'Custom Concrete';
      $service_listing = Service::orderBy('service_name', 'asc')->pluck('service_name');
      $mdg_services = Service::orderBy('service_name', 'asc')->pluck('service_name', 'id')->where('service_type' = 'steel');
      $data = array(
           'title' => 'Services',
           'services' => $service_listing
      );

      return view('pages.concrete')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services)
        ->with('services', $service_listing);
    }

    public function kitchenbath(){
      $title = 'Kitchen and Bath';
      $service_listing = Service::orderBy('service_name', 'asc')->pluck('service_name');
      $mdg_services = Service::orderBy('service_name', 'asc')->pluck('service_name', 'id');
      $data = array(
           'title' => 'Services',
           'services' => $service_listing
      );

      return view('pages.kitchenbath')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services)
        ->with('services', $service_listing);
    }

    public function demolition(){
      $title = 'Demolition';
      $service_listing = Service::orderBy('service_name', 'asc')->pluck('service_name');
      $mdg_services = Service::orderBy('service_name', 'asc')->pluck('service_name', 'id');
      $data = array(
           'title' => 'Services',
           'services' => $service_listing
      );

      return view('pages.demolition')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services)
        ->with('services', $service_listing);
    }

    public function excavation(){
      $title = 'Excavation';
      $service_listing = Service::orderBy('service_name', 'asc')->pluck('service_name');
      $mdg_services = Service::orderBy('service_name', 'asc')->pluck('service_name', 'id');
      $data = array(
           'title' => 'Services',
           'services' => $service_listing
      );

      return view('pages.excavation')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services)
        ->with('services', $service_listing);
    }

    public function groundupconstruction(){
      $title = 'Ground Up Construction';
      $service_listing = Service::orderBy('service_name', 'asc')->pluck('service_name');
      $mdg_services = Service::orderBy('service_name', 'asc')->pluck('service_name', 'id');
      $data = array(
           'title' => 'Services',
           'services' => $service_listing
      );

      return view('pages.groundupconstruction')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services)
        ->with('services', $service_listing);
    }

    public function finishout(){
      $title = 'Interior Finish out';
      $service_listing = Service::orderBy('service_name', 'asc')->pluck('service_name');
      $mdg_services = Service::orderBy('service_name', 'asc')->pluck('service_name', 'id');
      $data = array(
           'title' => 'Services',
           'services' => $service_listing
      );

      return view('pages.finishout')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services)
        ->with('services', $service_listing);
    }

    public function steel(){
      $title = 'Structural Steel';
      $service_listing = Service::orderBy('service_name', 'asc')->pluck('service_name');
      $mdg_services = Service::orderBy('service_name', 'asc')->pluck('service_name', 'id');
      $data = array(
		       'title' => 'Services',
		       'services' => $service_listing
      );

      return view('pages.steel')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services)
        ->with('services', $service_listing);
    }

    public function homes(){
      $title = 'Custom Homes';
      $service_listing = Service::orderBy('service_name', 'asc')->pluck('service_name');
      $mdg_services = Service::orderBy('service_name', 'asc')->pluck('service_name', 'id');
      $data = array(
           'title' => 'Services',
           'services' => $service_listing
      );

      return view('pages.homes')
        ->with('title', $title)
        ->with('mdg_services', $mdg_services)
        ->with('services', $service_listing);
    }

}
