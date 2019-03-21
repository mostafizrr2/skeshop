@extends('admin')

@section('title', 'Slider - SK ENTERPRISE')

@push('css')
    <style>
          .title{
              display: inline;   
          }
          .create{
              float: right;
          }
    </style>
@endpush


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header flex">
                <h4 class="title">Sliders</h4>
                <a class="btn btn-success create" href="{{ route('create.slider') }}">
                <i class="fa fa-plus fa-1x p-1" aria-hidden="true"></i> Create slider
                </a>
            </div>
            <hr>
            <div class="card-body">
                @if (count($sliders) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th width="15%"  class="text-center">Image</th>
                            <th width="40%">Title</th>
                            <th width="10%"  class="text-center">Status</th>
                            <th width="35%"  class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($sliders as $key => $slider )     

                            <tr>
                                <td class="text-center">
                                    <img class="img-fluid img-thumbnail"
                                     src="{{ url('/storage/slider_images/'.$slider->slider_image) }}" 
                                     alt="" style="height:50px !important; !important;">
                                </td>
                                <td>
                                   <h6>{{ $slider->slider_title }}</h6> 
                                </td>

                                <td class="text-center">
                                    <span class="badge badge-{{ ($slider->is_published == 1) ? 'info' : 'danger' }} ">
                                        @if ($slider->is_published == 1)
                                            Published 
                                        @else
                                            Unpublished
                                        @endif
                                    </span>
                                </td>

                                <td class="text-center">
                                    <a href="{{ route('edit.slider',$slider->id) }}" 
                                        class="btn btn-info btn-sm" style="margin:5px;">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('destroy.slider', $slider->id) }}" onclick="return confirm('Are you sure to delete this slider?')"
                                        class="btn btn-danger btn-sm"  style="margin:5px;">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach       
                    </tbody>
                </table>
                
                @else
                  <h3>No slider available <a href="{{ route('create.slider') }}">Crate new one</a></h3> 
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
