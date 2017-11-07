<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Item;
use App\ItemType;
use App\Uom;

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
          $items = Item::orderBy('created_at', 'desc', 'item_name')->paginate(5);
          if ( count($items) >= 1) {
            return view('items.index')->with('items', $items);
          }else{
            return view('items.create');
          }
       }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {

          $item_types = ItemType::orderBy('item_type', 'desc')->pluck('item_type', 'id');
          $uom = Uom::orderBy('uom_name', 'desc')->pluck('uom_name', 'id');
          return view('items.create')->with(compact('item_types', 'uom'));
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
            'item_count' => 'required',
            'item_uom' => 'required',
            'item_type' => 'required'
        ]);

        $item_in_stock = ($request->input('item_in_stock') ? $request->input('item_in_stock') : 0);
        $item_has_address = ($request->input('item_has_address') ? $request->input('item_has_address') : 0);
        $item_online_price = ($request->input('item_online_price') ? $request->input('item_online_price') : 0);
        $item_has_subitems = ($request->input('item_has_subitems') ? $request->input('item_has_subitems') : 0);
        $item_is_oversized = ($request->input('item_is_oversized') ? $request->input('item_is_oversized') : 0);
        $item_has_image = ($request->input('item_has_image') ? $request->input('item_has_image') : 0);
        $item_active = ($request->input('item_active') ? $request->input('item_active') : 0);

        // create items
        $item = new Item;
        $item->item_name = $request->input('item_name');
        $item->item_summary = $request->input('item_summary');
        $item->item_weight = $request->input('item_weight');
        $item->item_amount = $request->input('item_amount');
        $item->item_count = $request->input('item_count');
        $item->item_in_stock = $item_in_stock;
        $item->item_has_address = $item_has_address;
        $item->item_online_price = $item_online_price;
        $item->item_has_subitems = $item_has_subitems;
        $item->item_is_oversized = $item_is_oversized;
        $item->item_has_image = $item_has_image;
        $item->item_uom = $request->input('item_uom');
        $item->item_type = $request->input('item_type');
        $item->item_active = $item_active;
        $item->user_id = $current_user = auth()->user()->id;
        $item->save();

        return redirect('/items')->with('success', 'items Created!');
      }

      /**
       * Display the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function show($id)
      {
          $item = Item::find($id);
          return view('items.show')->with('item', $item);
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function edit($id)
      {
          //////
          $item = Item::find($id);
          $item_types = ItemType::orderBy('item_type', 'desc')->pluck('item_type', 'id');
          $uom = Uom::orderBy('uom_name', 'desc')->pluck('uom_name', 'id');
          //check for auth
          if(!auth()->user()->id) {
            return redirect('/login')->with('error', 'Unauthorized Page!');
          }

          //edit view
          return view('items.edit')->with(compact('item', 'users', 'item_types', 'uom'));
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
              'item_count' => 'required',
              'item_uom' => 'required',
              'item_type' => 'required'
          ]);

          $item_in_stock = ($request->input('item_in_stock') ? $request->input('item_in_stock') : 0);
          $item_has_address = ($request->input('item_has_address') ? $request->input('item_has_address') : 0);
          $item_online_price = ($request->input('item_online_price') ? $request->input('item_online_price') : 0);
          $item_has_subitems = ($request->input('item_has_subitems') ? $request->input('item_has_subitems') : 0);
          $item_is_oversized = ($request->input('item_is_oversized') ? $request->input('item_is_oversized') : 0);
          $item_has_image = ($request->input('item_has_image') ? $request->input('item_has_image') : 0);
          $item_active = ($request->input('item_active') ? $request->input('item_active') : 0);

          // update items
          $item = Item::find($id);
          $item->item_name = $request->input('item_name');
          $item->item_summary = $request->input('item_summary');
          $item->item_weight = $request->input('item_weight');
          $item->item_amount = $request->input('item_amount');
          $item->item_count = $request->input('item_count');
          $item->item_in_stock = $item_in_stock;
          $item->item_has_address = $item_has_address;
          $item->item_online_price = $item_online_price;
          $item->item_has_subitems = $item_has_subitems;
          $item->item_is_oversized = $item_is_oversized;
          $item->item_has_image = $item_has_image;
          $item->item_active = $item_active;
          $item->item_uom = $request->input('item_uom');
          $item->item_type = $request->input('item_type');
          $item->user_id = $current_user = auth()->user()->id;
          $item->save();

          return redirect('/items')->with('success', 'Item has been Updated!');
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
          return redirect('/items')->with('success', 'Item Deleted');
      }
}
