<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use App\User;

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
            return view('forms.create');
          }
      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
          return view('forms.create');
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

          // create form
          $form = new form;
          $form->form_type = $form_type;
          $form->form_subtype = $form_subtype;
          $form->form_title = $request->input('form_title');
          $form->form_body = $request->input('form_body');
          $form->form_date = $request->input('form_date');
          $form->form_created_by = $form_created_by;
          $form->form_active = $active;
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

          //edit view
          return view('forms.edit')->with(compact('form', 'users'));
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

          // create form
          $form = Form::find($id);
          $form->form_type = $form_type;
          $form->form_subtype = $form_subtype;
          $form->form_title = $request->input('form_title');
          $form->form_body = $request->input('form_body');
          $form->form_date = $request->input('form_date');
          $form->form_created_by = $form_created_by;
          $form->form_active = $active;
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

          $form->delete();
          return redirect('/forms')->with('success', 'Form Deleted');
      }
}
