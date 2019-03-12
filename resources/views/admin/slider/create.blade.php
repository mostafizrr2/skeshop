@extends('admin')

@section('title', 'SK Settings')

@section('content')
    
<div class="content">


@include('admin/inc/errors')


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
            <form action="{{ route('store.slider') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4 pr-1">
                        <div class="form-group">
                        <label>Slider Title</label>
                        </div>
                    </div>
    
                    <div class="col-md-8 pl-1">
                        <div class="form-group">
                            <input type="text" class="form-control" name="slider_title" placeholder="Sitle">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 pr-1">
                        <div class="form-group">
                        <label>Slider Subtitle</label>
                        </div>
                    </div>
    
                    <div class="col-md-8 pl-1">
                        <div class="form-group">
                                <input type="text" class="form-control" name="slider_subtitle" placeholder="Subtitle">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4 pr-1">
                        <div class="form-group">
                        <label>Slider Image</label>
                        </div>
                    </div>
    
                    <div class="col-md-8 pl-1">
                        <input type="file" class="form-control-file" name="slider_image">           
                    </div>
                </div>

    
                <div class="row">
                    <div class="col-md-4 pr-1">
                        <div class="form-group">
                        <label>Button One</label>
                        </div>
                    </div>
    
                    <div class="col-md-8 pl-1">

                        <input id="button-one" type="checkbox" class="" name="button_one"> 

                        <div id="button-one-content" style="display:none;">
                            <div class="row">

                                <div class="col-md-2 pr-1">
                                </div>     

                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                    <label>Button Color</label>
                                    </div>
                                </div>
                
                                <div class="col-md-6">
                                    <input type="color" onchange="oneChangeValue()" value="" name="button_one_color" id="onecolor">                                   
                                </div>
                            </div>

                            <div class="row">
                                    <div class="col-md-2 pr-1">
                                   </div>     
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                        <label>Button Link</label>
                                        </div>
                                    </div>
                    
                                    <div class="col-md-6 pl-1">
                                        <input type="text" class="form-control" id="btn-input"  name="button_one_link" placeholder="type your button link here">           
                                    </div>
                            </div>  
                            
                            
                            <div class="row">
                                    <div class="col-md-2 pr-1">
                                   </div>     
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                        <label>Button Text</label>
                                        </div>
                                    </div>
                    
                                    <div class="col-md-6 pl-1">
                                        <input type="text" class="form-control" id="btn-input"  name="button_one_text" placeholder="type your button text here">           
                                    </div>
                            </div>

                        </div>         
                    </div>
             
                </div>


                <div class="row">
                    <div class="col-md-4 pr-1">
                        <div class="form-group">
                        <label>Button Two</label>
                        </div>
                    </div>
    
                    <div class="col-md-8 pl-1">

                        <input id="button-two" type="checkbox" class="" name="button_two"> 

                        <div id="button-two-content" style="display:none;">
                            <div class="row">

                                <div class="col-md-2 pr-1">
                                </div>     

                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                    <label>Button Color</label>
                                    </div>
                                </div>
                
                                <div class="col-md-6">
                                    <input type="color" onchange="twoChangeValue()"  name="button_two_color" value="" id="twocolor">                                   
                                </div>
                            </div>

                            <div class="row">
                                    <div class="col-md-2 pr-1">
                                   </div>     
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                        <label>Button Link</label>
                                        </div>
                                    </div>
                    
                                    <div class="col-md-6 pl-1">
                                        <input type="text" class="form-control" id="btn-input"  name="button_two_link" placeholder="type your button link here">           
                                    </div>
                            </div> 
                            
                            
                            <div class="row">
                                    <div class="col-md-2 pr-1">
                                   </div>     
                                    <div class="col-md-4 pr-1">
                                        <div class="form-group">
                                        <label>Button Text</label>
                                        </div>
                                    </div>
                    
                                    <div class="col-md-6 pl-1">
                                        <input type="text" class="form-control" id="btn-input"  name="button_two_text" placeholder="Type button name here">           
                                    </div>
                            </div>

                        </div>         
                    </div>
             
                </div>

          
                <button type="submit" class="btn btn-primary btn-round pull-right">Save slider</button>
             
            </form>
            </div>
        </div>
    </div>
    </div>
</div>



@endsection

@push('js')
<script>

    var oneInput = document.getElementById("onecolor");
    oneInput.setAttribute('value', '');
    function oneChangeValue()
    {
        var theColor = oneInput.value;
        oneInput.setAttribute('value',theColor);
        console.log(theColor);
    }


    var twoInput = document.getElementById("twocolor");
    twoInput.setAttribute('value', '');
    function twoChangeValue()
    {
        var theColor = twoInput.value;
        twoInput.setAttribute('value',theColor);
        console.log(theColor);
    }
   

    $(function(){

        $('#button-one').click(function(){

            if( $('#button-one').is(":checked") ){
                $('#button-one').attr('value', true);
                $('#button-one-content').show();

            }
            else{
                $('#button-one').attr('value', false);
                $('#button-one-content').hide();
            }
        });     

      

        $('#button-two').click(function(){

            if( $('#button-two').is(":checked") ){
                $('#button-two').attr('value', true);
                $('#button-two-content').show();
            }
            else{
                $('#button-two').attr('value', false);
                $('#button-two-content').hide();
            }
        });           
    });

</script>
@endpush