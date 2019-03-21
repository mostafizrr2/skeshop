@extends('admin')

@section('title', 'SK Settings')

@section('content')
<div class="row">
    <div class="col-md-10">
        <a href="{{ route('all.slider') }}" class="btn btn-info">Sliders</a> 
    </div>    
</div>


<div class="row">

    <div class="col-md-10">
    <div class="card card-user">
        <div class="card-header">
        <h5 class="card-title">Change Settings</h5>
        </div>

        <hr>
        <div class="card-body">
        <form action="" method="POST">


            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                    <label>Company name</label>
                    </div>
                </div>

                <div class="col-md-8 pl-1">
                    <div class="form-group">
                        <input type="text" class="form-control" name="co_name" placeholder="Name" value="{{ $setting->co_name }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                    <label>Company title</label>
                    </div>
                </div>

                <div class="col-md-8 pl-1">
                    <div class="form-group">
                        <input type="text" class="form-control" name="co_title" placeholder="title" value="{{ $setting->co_title }}">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                    <label>Company slogan</label>
                    </div>
                </div>

                <div class="col-md-8 pl-1">
                    <div class="form-group">
                            <input type="text" class="form-control" name="co_slogan" placeholder="Company slogan" value="{{ $setting->co_slogan }}">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                    <label>Company Email</label>
                    </div>
                </div>

                <div class="col-md-8 pl-1">
                    <div class="form-group">
                            <input type="text" class="form-control" name="co_email" placeholder="Company Email" value="{{ $setting->co_email }}">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Company Phone number</label>
                    </div>
                </div>

                <div class="col-md-8 pl-1">
                    <div class="form-group">
                        <input type="text" class="form-control" name="co_phone" placeholder="Company phone number" value="{{ $setting->co_phone }}">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Company Address</label>
                    </div>
                </div>

                <div class="col-md-8 pl-1">
                    <div class="form-group">
                        <input type="text" class="form-control" name="co_address" placeholder="Company Address" value="{{ $setting->co_address }}">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>City</label>
                    </div>
                </div>

                <div class="col-md-8 pl-1">
                    <div class="form-group">
                        <input type="text" name="co_city" class="form-control" placeholder="City" value="{{ $setting->co_city }}">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Country</label>
                    </div>
                </div>

                <div class="col-md-8 pl-1">
                    <div class="form-group">
                        <input type="text" name="co_country" class="form-control" placeholder="Country" value="{{ $setting->co_country }}">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Postal Code</label>
                    </div>
                </div>

                <div class="col-md-8 pl-1">
                    <div class="form-group">
                        <input type="text" name="co_postal" class="form-control" placeholder="ZIP Code" value="{{ $setting->co_postal }}">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Company keywords (optional)</label>
                    </div>
                </div>

                <div class="col-md-8 pl-1">
                    <div class="form-group">
                        <input type="text" class="form-control" name="co_keywords" placeholder="Company keywords" value="{{ $setting->keywords }}">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Company Description</label>
                    </div>
                </div>

                <div class="col-md-8 pl-1">
                    <div class="form-group">
                        <textarea name="co_description" class="form-control textarea" placeholder="Brief description about company">{!! $setting->co_description !!}</textarea>
                    </div>
                </div>
            </div>
        
            <button type="submit" class="btn btn-primary btn-round pull-right">Update information</button>
            
        </form>
        </div>
    </div>
</div>
</div>

@endsection