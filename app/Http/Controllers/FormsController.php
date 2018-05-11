<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use App\User;
use App\Item;
use App\FormItem;
use App\Address;
use App\FormAddress;
use PDF;

class FormsController extends Controller
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
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
          $forms = Form::orderBy('created_at', 'asc')->paginate(4);
          if ( count($forms) >= 1) {
            return view('forms.index')->with('forms', $forms);
          }else{
            return $this->create();
          }
      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
          $items = Item::where('item_active', 'like', '1')->pluck('item_name', 'id');
          $addresses = Address::pluck('name', 'id');
          return view('forms.create')->with(compact('items', 'addresses'));
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
              'form_title' => 'required'
          ]);

          $active = ($request->input('active') ? $request->input('active') : 0);
          $form_type = ($request->input('form_type') ? $request->input('form_type') : 1);
          $form_subtype = ($request->input('form_subtype') ? $request->input('form_subtype') : 0);
          $form_created_by = ($request->input('form_created_by') ? $request->input('form_created_by') : auth()->user()->id);
          $form_from = ($request->input('form_from') ? $request->input('form_from') : auth()->user()->id);

          // create form
          $form = new form;
          $form->form_type = $form_type;
          $form->form_subtype = $form_subtype;
          $form->form_from = $form_from;
          $form->form_title = $request->input('form_title');
          $form->form_salutation = $request->input('form_salutation');
          $form->form_body = $request->input('form_body');
          $form->form_closing = $request->input('form_closing');
          $form->form_date = $request->input('form_date');
          $form->form_created_by = $form_created_by;
          $form->form_active = $active;
          $form->save();

          $deleteItems = FormAddress::where('form_id', $form->id)->delete();
          $form->addresses()->attach($form->id, [
            'address_id' =>  $request->input('address_id'),
            'user_id' => auth()->user()->id,
            'uom_id' =>  1
          ]);

          if ($request->get('itemID')) {
             foreach($request->get('itemID') as $key => $itemID) {
               $form->items()->attach($form->id, [
                 'items_id' =>  $request->input('itemSelect'.$itemID),
                 'user_id' => $form_created_by,
                 'amount' =>  $request->input('item_amount_'.$itemID),
                 'qty' =>  $request->input('item_qty_'.$itemID),
                 'amount' =>  $request->input('item_amount_'.$itemID)
               ]);
             }
          }
          $form->save();

          return redirect('/forms')->with('success', 'Form Created!');
      }

      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show($id)
      {
          $form = form::find($id);
          return view('forms.show')->with('form', $form);
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function edit($id)
      {
          //no users yet...
          $users = User::pluck('name', 'id');

          //////
          $form = form::find($id);
          //check for auth
          if(!auth()->user()->id) {
            return redirect('/login')->with('error', 'Unauthorized Page!');
          }

          $items = Item::where('item_active', 'like', '1')->pluck('item_name', 'id');

          $form_items = Formitem::where('form_id', '=', $id)
                  ->orderBy('id', 'asc')
                  ->paginate(1000, array('form_items.*'), 'form_items');
          $form_items = $form->items()->all();
          //check for auth
          //if(auth()->user()->id !==$job->user_id) {
          //  return redirect('/dashboard')->with('error', 'Unauthorized Page!');
          //}
          $item_grand_total = 0;
          foreach($form_items as $formItem) {
            $qty = $formItem->qty == 0 ? 1 : $formItem->qty;
            $item_grand_total += $formItem->amount * $qty;
          }

          $addresses = Address::pluck('name', 'id');
          $saved_address = $form->addresses;

          //edit view
          return view('forms.edit')
          ->with('form', $form)
          ->with('users', $users )
          ->with('item_grand_total', $item_grand_total)
          ->with('form_items_records', $form_items)
          ->with('items', $items)
          ->with('addresses', $addresses)
          ->with('saved_address', $saved_address);
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
              'form_title' => 'required'
          ]);

          $active = ($request->input('active') ? $request->input('active') : 0);
          $form_type = ($request->input('form_type') ? $request->input('form_type') : 1);
          $form_subtype = ($request->input('form_subtype') ? $request->input('form_subtype') : 0);
          $form_created_by = ($request->input('form_created_by') ? $request->input('form_created_by') : auth()->user()->id);
          $form_from = ($request->input('form_from') ? $request->input('form_from') : auth()->user()->id);

          // create form
          $form = Form::find($id);
          $form->form_type = $form_type;
          $form->form_subtype = $form_subtype;
          $form->form_from = $form_from;
          $form->form_title = $request->input('form_title');
          $form->form_salutation = $request->input('form_salutation');
          $form->form_body = $request->input('form_body');
          $form->form_closing = $request->input('form_closing');
          $form->form_date = $request->input('form_date');
          $form->form_created_by = $form_created_by;
          $form->form_active = $active;
          $form->save();

          $deleteItems = FormAddress::where('form_id', $form->id)->delete();
          $form->addresses()->attach($form->id, [
            'address_id' =>  $request->input('address_id'),
            'user_id' => auth()->user()->id,
            'uom_id' =>  1
          ]);

          if ($request->get('itemID')) {
             $deleteItems = FormItem::where('form_id', $form->id)->delete();
             foreach($request->get('itemID') as $key => $itemID) {
               $form->items()->attach($form->id, [
                 'items_id' =>  $request->input('itemSelect'.$itemID),
                 'user_id' => auth()->user()->id,
                 'qty' =>  $request->input('item_qty_'.$itemID),
                 'amount' =>  $request->input('item_amount_'.$itemID)
               ]);
             }
          }
          $form->save();

          return redirect('/forms')->with('success', 'Form has been Updated!');
      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id)
      {
          $form = form::find($id);
          //authorized?
          if(!auth()->user()->id) {
            return redirect('/login')->with('error', 'Unauthorized Page!');
          }

          $deleteItems = FormItem::where('form_id', $form->id)->delete();
          $form->delete();
          return redirect('/forms')->with('success', 'Form Deleted');
      }

      /**
       * show pdf report.
       *
       * @param  int  $id
       */
      public function downloadPDF($id)
      {
        $form = form::find($id);
        $items = Item::where('item_active', 'like', '1')->pluck('item_name', 'id');
        //$saved_items = FormItem::where('form_items_form_id', $id);

        $saved_items = Formitem::where('form_id', '=', $id)
                ->orderBy('id', 'asc')
                ->paginate(1000, array('form_items.*'), 'form_items');
        $item_grand_total = 0;

        foreach($saved_items as $formItem) {
          $qty = $formItem->qty == 0 ? 1 : $formItem->qty;
          $item_grand_total += $formItem->amount * $qty;
        }

        $pdf = PDF::loadView('pdf.pdf1', compact('form', 'saved_items', 'item_grand_total'));
        return $pdf->download($form->form_title.'.pdf');
      }
}
