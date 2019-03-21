@if ($errors->any())
@foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        {{ $error }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endforeach
@endif


@if (Session::get('success'))
<div class="alert alert-success">
  {{ Session::get('success') }}

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>  
@endif
