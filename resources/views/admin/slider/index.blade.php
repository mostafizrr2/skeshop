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
                        <tr>
                            <td>1</td>
                            <td>Dakota Rice</td>
                            <td>স্টেশনারীজ আইটেম</td>
                            <td>অনেকেই অনেক সময় জানতে চেয়েছেন ঢাকার কোথায় কোন আইটেম পাইকারি দরে পাওয়া যায়।</td>
                            <td><span class="badge badge-default">Published</span></td>
                            <td>
                                <a href="" class="btn btn-info btn-sm">edit</a>
                                <a href="" class="btn btn-danger btn-sm ">delete</a>
                            </td>
                        </tr>
        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>

@endsection