@extends('admin')

@section('title', 'Edit Slider - Sk')

@section('content')

<div class="row">
    
    <div class="col-md-10">

        <div class="card card-user">
            <div class="card-header">
            <h5 class="card-title">Edit Slider</h5>
            </div>

            <hr>
            <div class="card-body">
            <form action="{{ route('update.slider', $slider->id ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-md-4 pr-1">
                        <div class="form-group">
                        <label>Slider Title</label>
                        </div>
                    </div>
    
                    <div class="col-md-6 pl-1">
                        <div class="form-group">
                            <input type="text" class="form-control" name="slider_title" value="{{ $slider->slider_title }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 pr-1">
                        <div class="form-group">
                        <label>Slider Subtitle</label>
                        </div>
                    </div>
    
                    <div class="col-md-6 pl-1">
                        <div class="form-group">
                                <input type="text" class="form-control" name="slider_subtitle" value="{{ $slider->slider_subtitle }}">
                        </div>
                    </div>
                </div>
<br><br>


                <div class="row">
                    <div class="col-md-4 pr-1">
                    </div>
                    <div class="col-md-8 pl-1">
                        <img src="{{ url('storage/slider_images/'. $slider->slider_image) }}" class="img-thumbnail" width="200">         
                    </div>
                </div>

                <br>
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
<br><br>
    
                <div class="row">
                    <div class="col-md-4 pr-1">
                        <div class="form-group">
                        <label>Button One</label>
                        </div>
                    </div>
    
                    <div class="col-md-8 pl-1">

                        <div class="form-group">
                            <input id="button-one" type="checkbox" class="" name="button_one" value=""
                            @if ($slider->button_one == 1)
                              checked
                            @endif  >
                            <label for="button-one">Select to active button one</label> 
                        </div>

                        <div id="button-one-content" style="display:none;">
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                    <label>Button background colour</label>
                                    </div>
                                </div>
                
                                <div class="col-md-6">
                                    <input type="color" onchange="oneChangeValue()"
                                     value="{{ $slider->button_one_color }}" name="button_one_color" id="onecolor">                                   
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                    <label>Button text color</label>
                                    </div>
                                </div>
                
                                <div class="col-md-6">
                                    <input type="color" onchange="oneTextColorValue()"
                                     value="{{ $slider->button_one_text_color }}" 
                                     name="button_one_text_color" id="oneTextcolor">                                   
                                </div>
                            </div>                            

                            <div class="row">    
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                    <label>Button Link</label>
                                    </div>
                                </div>
                
                                <div class="col-md-6 pl-1">
                                    <input type="text" class="form-control" id="btn-input"
                                      name="button_one_link" value="{{ $slider->button_one_link }}">           
                                </div>
                            </div>  
                            
                            
                            <div class="row">    
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                    <label>Button Text</label>
                                    </div>
                                </div>
                
                                <div class="col-md-6 pl-1">
                                    <input type="text" class="form-control" id="btn-input"
                                      name="button_one_text" value="{{ $slider->button_one_text }}">           
                                </div>
                            </div>

                        </div>         
                    </div>
                
                </div>


                <div class="row">
                    <div class="col-md-4 pr-1">
                        <div class="form-group">
                        <label for="button-two">Button Two</label>
                        </div>
                    </div>
    
                    <div class="col-md-8 pl-1">
                        <div class="form-group">
                            <input id="button-two" type="checkbox" class="" name="button_two" value=""
                            @if ($slider->button_two == 1)
                              checked
                            @endif>
                            <label for="button-two">Select to active button two</label> 
                        </div>
                        <div id="button-two-content" style="display:none;">
                            <div class="row">
                

                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                    <label>Button background Colour</label>
                                    </div>
                                </div>
                
                                <div class="col-md-6">
                                    <input type="color" onchange="twoChangeValue()"  name="button_two_color"
                                     value="{{ $slider->button_two_color }}" id="twocolor">                                   
                                </div>
                            </div>

                            <div class="row">
                

                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                    <label>Button text Colour</label>
                                    </div>
                                </div>
                
                                <div class="col-md-6">
                                    <input type="color" onchange="twoTextColorValue()"  name="button_two_text_color"
                                     value="{{ $slider->button_two_text_color }}" id="TextTwocolor">                                   
                                </div>

                            </div>

                            <div class="row">    
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                    <label>Button Link</label>
                                    </div>
                                </div>
                
                                <div class="col-md-6 pl-1">
                                    <input type="text" class="form-control" id="btn-input"
                                      name="button_two_link" value="{{ $slider->button_two_link }}">           
                                </div>
                            </div> 
                            
                            
                            <div class="row">    
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                    <label>Button Text</label>
                                    </div>
                                </div>
                
                                <div class="col-md-6 pl-1">
                                    <input type="text" class="form-control" id="btn-input"
                                      name="button_two_text" value="{{ $slider->button_two_text }}">           
                                </div>
                            </div>

                        </div>         
                    </div>
                
                </div>

<br><br>

                <div class="row">
                    <div class="col-md-4 pr-1">
                        <div class="form-group">
                        <label>Publish Slider</label>
                        </div>
                    </div>
    
                    <div class="col-md-3 pl-1">
                        <div class="form-group">
                            <select class="form-control" name="is_published">
                                <option value="1"
                                    @if ($slider->is_published == 1 )
                                        selected
                                    @endif>Publish</option> 


                                <option value="0" 
                                    @if ( $slider->is_published == 0 )
                                        selected
                                    @endif>Unpublish</option> 
                            </select>   
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary pull-right">Update slider</button>
                <a href="{{ route('all.slider') }}" class="btn btn-danger pull-right">Back</a>     
                
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection


@push('js')
<script>

    var oneInput = document.getElementById("onecolor");
    function oneChangeValue()
    {
        var theColor = oneInput.value;
        oneInput.setAttribute('value', theColor);
        console.log(theColor);
    }


    var oneTextColor = document.getElementById("oneTextcolor");
    function oneTextColorValue()
    {
        var theColor = oneTextColor.value;
        oneTextColor.setAttribute('value', theColor);
        console.log(theColor);
    }


    var twoInput = document.getElementById("twocolor")
    function twoChangeValue()
    {
        var theColor = twoInput.value;
        twoInput.setAttribute('value',theColor);
        console.log(theColor);
    }


    var twoTextColor = document.getElementById("TextTwocolor")
    function twoTextColorValue()
    {
        var theColor = twoTextColor.value;
        twoTextColor.setAttribute('value',theColor);
        console.log(theColor);        
    }
   

    $(function(){


        if( $('#button-one').is(":checked") ){
            $('#button-one-content').show();
            $('#button-one').attr('value', 1);
        }

        if( $('#button-two').is(":checked") )
        {
            $('#button-two-content').show();
            $('#button-two').attr('value', 1);
        }




        $('#button-one').click(function(){

            $('#button-one').attr('value', 1);

            if( $('#button-one').is(":checked") ){
                $('#button-one-content').show();

            }
            else{
                $('#button-one-content').hide();
            }
        });     

      

        $('#button-two').click(function(){

            $('#button-two').attr('value', 1);

            if( $('#button-two').is(":checked") )
            {
                $('#button-two-content').show();
            }
            else{
                $('#button-two-content').hide();
            }
        });


    });

</script>
@endpush



