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
    
<div class="content">
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
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Sr</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Subtile</th>
                            <th>Status</th>
                            <th>Action</th>
                    </tr>
                </thead>
                    <tbody>

                        @foreach ($sliders as $key => $slider )     

                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <img src="{{ url('/storage/slider_images/'.$slider->slider_image) }}" alt="" width="100px" height="100px">
                                </td>
                                <td>{{ $slider->slider_title }}</td>
                                <td>{{ $slider->slider_subtitle }}</td>
                                
                                <td>
                                    <span class="badge badge-default">Published</span>
                                </td>

                                <td>
                                    <a href="{{ route('edit.slider',$slider->id) }}" class="btn btn-info btn-sm">edit</a>
                                    <a href="" class="btn btn-danger btn-sm ">delete</a>
                                </td>
                            </tr>
                        @endforeach       
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>

@endsection
