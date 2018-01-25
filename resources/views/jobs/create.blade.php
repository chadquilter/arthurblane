@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-3">Create Job</h1>
      <div class="card mx-auto border border-secondary">
        <br>
        <div class="card-body">
        @include('inc.dashmenu')
          <hr class="my-1">
          @include('inc.messages')
          <br>
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
            <div class="form=group alert alert-info" role="alert">
              <table class="table table-stripe table-responsive" id="dynamic_field">
                <tbody>
                </tbody>
              </table>
              <br>
              {{Form::button('Add Item', ['class' => 'btn btn-primary', 'id' => 'add', 'name' => 'add'])}}
            </div>
          </div>
          <hr>

          <div class="form=group">
            <h3>Job Services Provided:</h3>
            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#job_service_group">Expand/Collapse Options</button>
            <br>
            <div id="job_service_group" class="form=group collapse">
              <div class="alert alert-info" role="alert">
                <div class="row">
                  @if(count($mdg_services) > 0)
                    @foreach($mdg_services as $mdg_id => $mdg_name)
                      <div class="col-md-3">
                        <div class="card image_display_r border border-secondary rounded shadow_only">
                          <div class="card-title">
                            {{Form::label('serviceID[]', $mdg_name)}} {{Form::checkbox('serviceID[]', $mdg_id, '', ['class' => 'form-control', 'id' => 'serviceID'.$mdg_id ])}}
                          </div>
                        </div>
                      </div>
                    @endforeach
                  @else
                    <h1>No Types Listed!</h1>
                  @endif
                </div>
              </div>
            </div>
          </div>
          <br>

          @if (count($job_option_types) > 0)
            <h3>Job Options:</h3>
            <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#job_option_group">Expand/Collapse Options</button>
            <br>
            <div id="job_option_group" class="form=group collapse">
              <div class="alert alert-info" role="alert">
                <div class="row">
                @foreach ($job_option_types as $job_option_id => $job_option_name)
                    <div class="col-lg-3">
                      <div class="card image_display_r border border-secondary rounded shadow_only">
                        <div class="card-title">
                          {{Form::label($job_option_id, $job_option_name)}}
                          <hr class="my-1">
                        </div>
                      @if(count($bool_types) > 0)
                        <div class="card-body">
                          <div class="col">
                            <div class="row">
                        @foreach($bool_types as $bool_id => $bool_name)
                              <div class="col">
                                {{$bool_name}} {{Form::radio($job_option_id, $bool_id, 'True', ['class' => 'form-control']) }}
                              </div>
                        @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>
                    </div>
                    @else
                      <h1>No Types Listed!</h1>
                    @endif
                @endforeach
              </div>
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
            <a class="btn btn-danger" href="{{ URL::previous() }}">Cancel</a>
          </div>
          {!! Form::close() !!}
          <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
          <script>
          CKEDITOR.replace( 'article-ckeditor' );
          </script>

          <script type="text/javascript">
          $(document).ready(function(){
            var postURL = "<?php echo url('addmore'); ?>";
            var i=0;

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
        </div>
      </div>
    </div>
  </div>
  <br>
@endsection
