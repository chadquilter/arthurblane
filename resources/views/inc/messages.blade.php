@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger image_display_text_container" role="alert">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success image_display_text_container" role="alert">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger image_display_text_container" role="alert">
        {{session('error')}}
    </div>
@endif
