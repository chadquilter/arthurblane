<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\User;

class ItemsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
      {
        //none
      }

      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
          return view('items.create');
      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
          return view('items.create');
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
            'item_name' => 'required',
            'item_summary' => 'required',
            'item_weight' => 'required',
            'item_amount' => 'required',
            'item_count' => 'required'
        ]);


        $item_in_stock = ($request->input('item_in_stock') ? $request->input('item_in_stock') : 0);
        $item_has_address = ($request->input('item_has_address') ? $request->input('item_has_address') : 0);
        $item_online_price = ($request->input('item_online_price') ? $request->input('item_online_price') : 0);
        $item_has_subitems = ($request->input('item_has_subitems') ? $request->input('item_has_subitems') : 0);
        $item_is_oversized = ($request->input('item_is_oversized') ? $request->input('item_is_oversized') : 0);
        $item_has_image = ($request->input('item_has_image') ? $request->input('item_has_image') : 0);
        $item_active = ($request->input('item_active') ? $request->input('item_active') : 0);


        // create items
        $item = new item;
        $table->'item_name' = $request->input('item_name');
        $table->'item_summary' = $request->input('item_summary');
        $table->'item_weight' = $request->input('item_weight');
        $table->'item_amount' = $request->input('item_amount');
        $table->'item_count' = $request->input('item_count');
        $table->'item_in_stock' = $item_in_stock;
        $table->'item_has_address' = $item_has_address;
        $table->'item_online_price' = $item_online_price;
        $table->'item_has_subitems' = $has_subitems;
        $table->'item_is_oversized' = $is_oversized;
        $table->'item_has_image' = $has_image;
        $table->'item_active' = $item_active;
        $table->'user_id' = $current_user = auth()->user()->id;
        $item->save();

        return redirect('/dashboard')->with('success', 'items Created!');
      }

      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show($id)
      {
          $items = items::find($id);
          return view('items.show')->with('items', $items);
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
          $items = items::find($id);
          //check for auth
          if(!auth()->user()->id) {
            return redirect('/login')->with('error', 'Unauthorized Page!');
          }

          //edit view
          return view('items.edit')->with(compact('items', 'users'));
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
              'item_name' => 'required',
              'item_summary' => 'required',
              'item_weight' => 'required',
              'item_amount' => 'required',
              'item_count' => 'required'
          ]);


          $item_in_stock = ($request->input('item_in_stock') ? $request->input('item_in_stock') : 0);
          $item_has_address = ($request->input('item_has_address') ? $request->input('item_has_address') : 0);
          $item_online_price = ($request->input('item_online_price') ? $request->input('item_online_price') : 0);
          $item_has_subitems = ($request->input('item_has_subitems') ? $request->input('item_has_subitems') : 0);
          $item_is_oversized = ($request->input('item_is_oversized') ? $request->input('item_is_oversized') : 0);
          $item_has_image = ($request->input('item_has_image') ? $request->input('item_has_image') : 0);
          $item_active = ($request->input('item_active') ? $request->input('item_active') : 0);


          // create items
          $item = new item;
          $table->'item_name' = $request->input('item_name');
          $table->'item_summary' = $request->input('item_summary');
          $table->'item_weight' = $request->input('item_weight');
          $table->'item_amount' = $request->input('item_amount');
          $table->'item_count' = $request->input('item_count');
          $table->'item_in_stock' = $item_in_stock;
          $table->'item_has_address' = $item_has_address;
          $table->'item_online_price' = $item_online_price;
          $table->'item_has_subitems' = $has_subitems;
          $table->'item_is_oversized' = $is_oversized;
          $table->'item_has_image' = $has_image;
          $table->'item_active' = $item_active;
          $table->'user_id' = $current_user = auth()->user()->id;
          $item->save();

          return redirect('/dashboard')->with('success', 'Item has been Updated!');
      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id)
      {

          $Item = Item::find($id);
          //authorized?
          if(!auth()->user()->id) {
            return redirect('/login')->with('error', 'Unauthorized Page!');
          }

          $Item->delete();
          return redirect('/dashboard')->with('success', 'Item Deleted');
      }
}
