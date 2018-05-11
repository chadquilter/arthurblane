@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-3">Edit Form</h1>
      <div class="card mx-auto border border-secondary">
        <br>
        <div class="card-body">
          @include('inc.dashmenu')
          <hr class="my-1">
          @include('inc.messages')
          <br>
          {!! Form::open(['action' => ['FormsController@update', $form->id], 'method' => 'POST']) !!}
          <div class="form=group">
            {{Form::label('form_date', 'Date: ')}}
            {{Form::date('form_date', \Carbon\Carbon::now()), ['class' => 'form-control'] }}
          </div>
          {!! Form::open(['action' => 'FormsController@store', 'method' => 'POST', 'enctype' => 'multipart/data']) !!}
          <div class="form=group">
            {{Form::label('form_title', 'Title:')}}
            {{Form::text('form_title', $form->form_title, ['class' => 'form-control', 'placeholder' => 'Form Title'])}}
          </div>
          <hr>
          @if (count($addresses) > 0)
            <div class="form=group">
              {{$saved_address}}
              {{Form::label('address_id', 'Proposal Address:')}}
              @if(count($addresses) > 0)
                {{ Form::select('address_id', $addresses, $saved_address, ['class' => 'form-control m-bot15']) }}
              @else
                <h1>No Addresses Listed!</h1>
              @endif
            </div>
          @endif
          <br>
          <div class="form=group">
            {{Form::label('form_salutation', 'Form Salutation:')}}
            {{Form::textarea('form_salutation', $form->form_salutation, ['id' => 'salutation-ckeditor', 'class' => 'form-control', 'placeholder' => 'Form Salutation, leave empty if not needed'])}}
          </div>
          <div class="form=group">
            {{Form::label('form_body', 'Form Body:')}}
            {{Form::textarea('form_body', $form->form_body , ['id' => 'body-ckeditor', 'class' => 'form-control', 'placeholder' => 'Form Body goes here'])}}
          </div>
          <br>
          <div class="FormItemsDiv alert alert-info" role="alert">
            @if(count($form_items_records) > 0)
              <h3><span class="badge badge-secondary">{{ $form_items_records->total() }}</span><span> Saved Items, Est. Total: </span><span class="badge badge-secondary">${{ $item_grand_total }}</span> </h3>
              <hr class="my-1">
              <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#dynamic_field">Expand/Collapse Options</button>
              <hr class="my-1">
            @else
              <h3>Proposal Items:</h3>
              <hr class="my-1">
              <div class="form=group alert alert-dark" role="alert">
                <table class="table table-stripe table-responsive" id="dynamic_field">
                  <tbody>
                  </tbody>
                </table>
                <br>
                {{Form::button('Add Item', ['class' => 'btn btn-primary', 'id' => 'add', 'name' => 'add'])}}
              </div>
            @endif
              <table class="table table-sm table-responsive collapse" id="dynamic_field">
                <tbody>
                  @if(count($form_items_records) > 0)
                    @foreach($form_items_records as $formItem)
                      <tr id="row{{ $loop->iteration }}" class="dynamic-added">
                        <td id="item_div_{{$loop->iteration}}">
                          <strong>Item:</strong>
                          @if(count($items) > 0)
                            {{ Form::select('itemSelect'.$loop->iteration, $items, $formItem->items_id, ['name' => 'itemSelect'.$loop->iteration, 'class' => 'form-control m-bot15']) }}
                          @else
                            <h1>No Items Listed!</h1>
                          @endif
                        </td>
                        <td>
                          <strong>Amount: </strong>
                          <input name="item_amount_{{ $loop->iteration }}" id="item_amount_{{ $loop->iteration }}" type="number" class="form-control" value="{{ $formItem->amount }}" step="any" maxlength="10" size="10">
                          <strong>QTY: </strong>
                          <input name="item_qty_{{$loop->iteration}}" id="item_qty_{{$loop->iteration}}" type="number" value="{{ $formItem->qty }}" class="form-control" step="any" maxlength="10" size="10">
                          <input type="hidden" name="itemID[]" id="itemID{{$loop->iteration}}" value="{{$loop->iteration}}">
                          <input type="hidden" name="itemRecordID{{$loop->iteration}}" id="itemRecordID{{$loop->iteration}}" value="{{ $formItem->id }}">
                        </td>
                        <td width="5%">
                          <strong>Action:</strong><br>
                          <button type="button" name="remove" id="{{$loop->iteration}}" class="btn btn-danger btn_remove">Delete</button>
                        </td>
                      </tr>
                    @endforeach
                  @endif
                </tbody>
                <tfoot>
                  <tr><td>
                  {{Form::button('Add Item', ['class' => 'btn btn-primary', 'id' => 'add', 'name' => 'add'])}}
                  </tr></td>
                </tfoot>
              </table>
          </div>
          <hr>
          <div class="form=group">
            {{Form::label('form_closing', 'Form Closing:')}}
            {{Form::textarea('form_closing', $form->form_closing, ['id' => 'closing-ckeditor', 'class' => 'form-control', 'placeholder' => 'Form Footer, leave emtpy if not needed'])}}
          </div>
          <div class="form=group">
            {{Form::label('form_active', 'Form Active? ')}}
            {{Form::checkbox('form_active','1', ['class' => 'form-control'])}}
          </div>
          <br>
          <div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            <a class="btn btn-danger" href="{{ URL::previous() }}">Cancel</a>
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
  <br>
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
    CKEDITOR.replace( 'salutation-ckeditor' );
    CKEDITOR.replace( 'body-ckeditor' );
    CKEDITOR.replace( 'closing-ckeditor' );
  </script>

  <script type="text/javascript">
  $(document).ready(function(){
    var postURL = "<?php echo url('addmore'); ?>";
    var i= <?php echo count($form_items_records) ?>;

    $('#add').click(function(){
      i++;
      //var test = "Form::select('job_item_number_0', "+ items +", '', ['class' => 'form-control m-bot15'])";
      $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td id="item_div_'+i+'"><strong>Item:</strong></td><td><strong>Amount: </strong><input name="item_amount_'+i+'" id="item_amount_'+i+'" type="number" class="form-control" value="0.00" step="any" maxlength="10" size="10"> <strong>QTY: </strong><input id="item_qty_'+i+'" name="item_qty_'+i+'" type="number" value="0" class="form-control" step="any" maxlength="10" size="10"> <input type="hidden" name="itemID[]" id="itemID'+i+'" value="'+i+'"> </td><td width="5%"><strong>Action:</strong><br><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Delete</button></td></tr>');

      var myDiv = document.getElementById("item_div_"+i);
      //Create array of options to be added
      var items = <?php echo json_encode($items);?>;

      //Create and append select list
      var selectList = document.createElement("select");
      selectList.id = "itemSelect"+i;
      selectList.name = "itemSelect"+i;
      selectList.className = "form-control m-bot15";
      myDiv.appendChild(selectList);

      //Create and append the options
      for (var k in items) {
        var option = document.createElement("option");
        option.value = k;
        option.text = items[k];
        selectList.appendChild(option);
      }
    });

    $(document).on('click', '.btn_remove', function(){
      var button_id = $(this).attr("id");
      $('#row'+button_id+'').remove();
    });

    function printErrorMsg (msg) {
      $(".print-error-msg").find("ul").html('');
      $(".print-error-msg").css('display','block');
      $(".print-success-msg").css('display','none');
      $.each( msg, function( key, value ) {
        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
      });
    }
  });
  </script>
@endsection
