@extends('layouts.app')


@section('content')
  <br>
  <div class="well">
    <h1>Create Job</h1>
    {!! Form::open(['action' => 'JobsController@store', 'method' => 'POST', 'enctype' => 'multipart/data']) !!}
    <div class="form=group">
        {{Form::label('job_title', 'Title:')}}
        {{Form::text('job_title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form=group">
        {{Form::label('job_summary', 'Summary:')}}
        {{Form::textarea('job_summary', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Job Summary'])}}
    </div>
    <div class="form=group">
        {{Form::label('job_notes', 'Notes:')}}
        {{Form::text('job_notes', '', ['class' => 'form-control', 'placeholder' => 'Additional Job Notes'])}}
    </div>
    <div class="JobItemsDiv">
      <h3>Job Items:</h3>
      <div class="table-responsive">
        <table class="table table-striped table-hover table-sm table-responsive" id="dynamic_field">
          <tbody>
          </tbody>
        </table>
        <br>
        {{Form::button('Add Item', ['class' => 'btn btn-primary', 'id' => 'add', 'name' => 'add'])}}
      </div>
    </div>
    <hr>
    <div class="form=group">
      {{Form::label('job_type', 'Job Type:')}}
      <br>
      <div class="alert alert-warning" role="alert">
      @if(count($job_types) > 0)
        @foreach($job_types as $job_id => $job_name)
          {{Form::checkbox('job_type', $job_id, ['class' => 'form-control'])}} {{$job_name}} &nbsp
        @endforeach
      @else
        <h1>No Types Listed!</h1>
      @endif
      </div>
    </div>
    @if (count($job_option_types) > 0)

      <h3>Job Options:</h3>
      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#job_option_group">Expand/Collapse Options</button>
      <br> &nbsp
      <div id="job_option_group" class="form=group collapse">
        <div class="alert alert-info" role="alert">
        @foreach ($job_option_types as $job_option_id => $job_option_name)
          @if($loop->first || $loop->iteration === 6)
            <div class="row">
          @endif
              <div class="col-md-2">
                {{Form::label($job_option_id, $job_option_name)}}
                <br>
        @if(count($bool_types) > 0)
          @foreach($bool_types as $bool_id => $bool_name)
                {{Form::radio($job_option_id, $bool_id, ['class' => 'form-control'])}} {{$bool_name}}
          @endforeach
              </div>
        @else
              <h1>No Types Listed!</h1>
        @endif
        @if($loop->iteration === 5 || $loop->iteration >= 10 || $loop->last)
            </div>
        @endif
      @endforeach
      </div>
    </div>
    @endif
    <br>
    <hr>
    @if (count($users) > 0)
      <div class="form=group">
        {{Form::label('job_created_by', 'Job Created by:')}}
        @if(count($users) > 0)
          {{ Form::select('job_created_by', $users, $current_user, ['class' => 'form-control m-bot15']) }}
        @else
          <h1>No Users Listed!</h1>
        @endif
      </div>
    @endif
    <br>
    <div class="page-buttons">
      {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
      CKEDITOR.replace( 'article-ckeditor' );
    </script>

    <script type="text/javascript">
    $(document).ready(function(){
      var postURL = "<?php echo url('addmore'); ?>";
      var i=1;

      $('#add').click(function(){
        i++;
        //var test = "Form::select('job_item_number_0', "+ items +", '', ['class' => 'form-control m-bot15'])";
        $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td id="item_div_'+i+'"></td><td><strong>Amount: </strong><input id="item_amount_'+i+'" type="text" class="form-control"> <strong>QTY: </strong><input id="item_qty_'+i+'" type="text" class="form-control"> </td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Delete</button></td></tr>');

        var myDiv = document.getElementById("item_div_"+i);
        //Create array of options to be added
        var items = <?php echo json_encode($items);?>;

        //Create and append select list
        var selectList = document.createElement("select");
        selectList.id = "itemSelect"+i;
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

  </div>
  <br>
@endsection
