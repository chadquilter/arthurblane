<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Job;
use App\Quote;
use App\Address;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dt = Carbon::now();
        $fdt = $dt->format('l jS \\of F Y');
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        //$jobs = Job::orderBy('created_at', 'desc', 'name')->paginate(4);
                        //->where('user_id', '=', $user_id)
        $jobs = Job::join('users', 'jobs.user_id', '=', 'id')
                ->orderBy('jobs.created_at', 'desc')
                ->paginate(3, array('jobs.*'), 'jobs');

        $quotes = Quote::orderBy('created_at', 'desc', 'title')->paginate(4, ['*'], 'quotes');
        $addresses = Address::orderBy('created_at', 'desc', 'zipcode')->paginate(1, ['*'], 'address');

        return view('dashboard')
          ->with('jobs', $jobs)
          ->with('user', $user)
          ->with('quotes', $quotes)
          ->with('dt', $fdt)
          ->with('addresses', $addresses);
    }
}
