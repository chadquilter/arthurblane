<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\User;
use App\Item;
use App\JobItem;
use App\Service;
use App\JobService;

class JobsController extends Controller
{

  /**
   * Create a new controller instance.
   *
   * @return void
   */
   public function __construct()
    {
      $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$jobs = Job::all(); get all
        //use db to do custom sql instead
        //$jobs = Job::orderBy('created_at', 'job_desc')->get();
        //$jobs = Job::orderBy('created_at', 'asc')->take(1)->get(); for limit
        // get mdg services
        $mdg_services = Service::orderBy('service_name', 'asc')->pluck('service_name', 'id');
        //
        $jobs = Job::where('job_display', '=', '1')->orderBy('updated_at', 'asc')->paginate(1);
        //$jobs = Job::orderBy('created_at', 'asc')->get();
        return view('jobs.index')
          ->with('jobs', $jobs)
          ->with('mdg_services', $mdg_services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $job_option_types = array(
            'job_media' => 'Media?:',
            'job_display' => 'Web?:',
            'job_account' => 'Account?:',
            'job_address'=> 'Address?:',
            'job_certs' => 'Paperwork?:',
            'job_quote' => 'Quote?:',
            'job_reciepts' => 'Reciepts?:',
            'job_status' => 'Job Closed?:',
            'job_invoiced' => 'Invoiced?:'
        );

        $items = Item::where('item_active', 'like', '1')->pluck('item_name', 'id');

        $bool_types = array(
            1 => 'Yes',
            0 => 'No');

        $job_types = array(
            1 => 'Custom Home',
            2 => 'Custom Concrete',
            3 => 'Custom Kitchen and Bath',
            4 => 'Custom Walls',
            5 => 'Distaster Repair');

        $users = User::pluck('name', 'id');
        $current_user = auth()->user()->id;

        // get mdg services
        $mdg_services = Service::orderBy('service_name', 'asc')->pluck('service_name', 'id');

        return view('jobs.create')
            ->with(compact('job_types',
              'bool_types',
              'job_option_types',
              'users',
              'current_user',
              'mdg_services',
              'items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'job_title' => 'required',
            'job_summary' => 'required',
            'job_notes' => 'required',
            'job_created_by' => 'required',
            'job_type' => 'required'
        ]);

        // create job
        $job = new Job;
        $job->job_title = $request->input('job_title');
        $job->job_type = $request->input('job_type');
        $job->job_summary = $request->input('job_summary');
        $job->job_notes = $request->input('job_notes');
        $job->job_status = $request->input('job_status');
        $job->job_modified_by = $request->input('job_created_by');
        $job->job_created_by = $request->input('job_created_by');
        $job->user_id = $request->input('job_created_by');
        $job->job_media = $request->input('job_media');
        $job->job_display = $request->input('job_display');
        $job->job_account = $request->input('job_account');
        $job->job_address = $request->input('job_address');
        $job->job_certs = $request->input('job_certs');
        $job->job_quote = $request->input('job_quote');
        $job->job_reciepts = $request->input('job_reciepts');
        $job->job_invoiced = $request->input('job_invoiced');
        $job->job_quote = $request->input('job_quote');
        $job->save();

        $item_count = 0;
        //$schedule->tasks()->delete();
        if ($request->get('itemID')) {
           foreach($request->get('itemID') as $key => $itemID) {
             $jobitem = new Jobitem;
             $jobitem->job_id = $job->job_id;
             $jobitem->items_id = $request->input('itemSelect'.$itemID);;
             $jobitem->user_id = $job->user_id;
             $jobitem->amount = $request->input('item_amount_'.$itemID);
             $jobitem->qty = $request->input('item_qty_'.$itemID);
             $jobitem->save();
           }
        }

        return redirect('/dashboard')->with('success', 'Job Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::find($id);
        return view('jobs.show')->with('job', $job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job_option_types = array(
            'job_media' => 'Media?:',
            'job_display' => 'Web?:',
            'job_account' => 'Account?:',
            'job_address'=> 'Address?:',
            'job_certs' => 'Paperwork?:',
            'job_quote' => 'Quote?:',
            'job_reciepts' => 'Reciepts?:',
            'job_status' => 'Closed?:',
            'job_invoiced' => 'Invoiced?:'
          );

        $bool_types = array(
            1 => 'Yes',
            0 => 'No');

        $job_types = array(
            1 => 'Custom Home',
            2 => 'Custom Concrete',
            3 => 'Custom Kitchen and Bath',
            4 => 'Custom Walls',
            5 => 'Distaster Repair');
      //no users yet...
        $users = User::pluck('name', 'id');
        $job = Job::find($id);
        $items = Item::where('item_active', 'like', '1')->pluck('item_name', 'id');

        $job_items = Jobitem::where('job_items_job_id', '=', $id)
                ->orderBy('id', 'asc')
                ->paginate(1000, array('job_items.*'), 'job_items');

        //check for auth
        //if(auth()->user()->id !==$job->user_id) {
        //  return redirect('/dashboard')->with('error', 'Unauthorized Page!');
        //}
        $item_grand_total = 0;
        foreach($job_items as $jobItem) {
          $qty = $jobItem->qty == 0 ? 1 : $jobItem->qty;
          $item_grand_total += $jobItem->amount * $qty;
        }

        // get mdg services
        $mdg_services = Service::orderBy('service_name', 'asc')->pluck('service_name', 'id');
        //$mdg_services_1 = Job::find($id)->services()->orderBy('service_name', 'asc')->pluck('service_name', 'service_id');

        //edit view
        return view('jobs.edit')
          ->with('job', $job)
          ->with('job_items_records', $job_items)
          ->with('job_types', $job_types)
          ->with('bool_types', $bool_types)
          ->with('job_option_types', $job_option_types)
          ->with('users', $users)
          ->with('item_grand_total', $item_grand_total)
          ->with('mdg_services', $mdg_services)
          ->with('items', $items);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'job_title' => 'required',
            'job_summary' => 'required',
            'job_notes' => 'required',
            'serviceID' => 'required',
        ]);

/**
*        if($request->hasFile('cover_image')){
*          $filenameWithExt = $request->file('cover_image')->getClientOriginalImage();
*          //get just filenameWithExt
*          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
*          //file PATHINFO_FILENAM
*          $extension = $request->file('cover_image')->getOriginalClientExtension();
*          //file to store
*          $filenNameToStore= $filename.'_'.time().'.'.$extension;
*          //upload
*          $path = $request->file('cover_image')->sotreAs('public/cover_image', $filenNameToStore);
*        }
*/
        // create job
        $job = Job::find($id);
        $job->job_title = $request->input('job_title');
        $job->job_type = 1;
        $job->job_summary = $request->input('job_summary');
        $job->job_notes = $request->input('job_notes');
        $job->job_status = $request->input('job_status');
        $job->job_modified_by = auth()->user()->id;
        $job->job_media = $request->input('job_media');
        $job->job_display = $request->input('job_display');
        $job->job_account = $request->input('job_account');
        $job->job_address = $request->input('job_address');
        $job->job_certs = $request->input('job_certs');
        $job->job_quote = $request->input('job_quote');
        $job->job_reciepts = $request->input('job_reciepts');
        $job->job_invoiced = $request->input('job_invoiced');
        $job->job_quote = $request->input('job_quote');


        if ($request->get('itemID')) {
           $deleteItems = JobItem::where('job_items_job_id', $job->job_id)->delete();
           foreach($request->get('itemID') as $key => $itemID) {
             $job->items()->attach($job->job_id, [
               'items_id' =>  $request->input('itemSelect'.$itemID),
               'user_id' => $job->user_id,
               'amount' =>  $request->input('item_amount_'.$itemID),
               'qty' =>  $request->input('item_qty_'.$itemID)
             ]);
           }
        }

        if ($request->get('serviceID')) {
           $deleteServices = JobService::where('job_id', $job->job_id)->delete();
           foreach($request->get('serviceID') as $key => $serviceID) {
             $job->services()->attach($serviceID);
           }
        }

        ///save job
        $job->save();

        return redirect('/dashboard')->with('success', 'Job Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $job = Job::find($id);
        //authorized?
        //if(auth()->user()->id !==$job->user_id) {
        //  return redirect('/login')->with('error', 'Unauthorized Page!');
        //}

        $job->delete();
        return redirect('/dashboard')->with('success', 'Job Deleted');
    }
}
