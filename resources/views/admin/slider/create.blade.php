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
            <h5 class="card-title">Add new slider</h5>
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
    
                    <div class="col-md-6 pl-1">
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
    
                    <div class="col-md-6 pl-1">
                        <div class="form-group">
                                <input type="text" class="form-control" name="slider_subtitle" placeholder="Subtitle">
                        </div>
                    </div>
                </div>
<br><br>

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
                            <input id="button-one" type="checkbox" class="" name="button_one" value="">
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
                                    <input type="color" onchange="oneChangeValue()" value="" name="button_one_color" id="onecolor">                                   
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                    <label>Button text color</label>
                                    </div>
                                </div>
                
                                <div class="col-md-6">
                                    <input type="color" onchange="oneTextColorValue()" value="" name="button_one_text_color" id="oneTextcolor">                                   
                                </div>
                            </div>                            

                            <div class="row">    
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                    <label>Button Link</label>
                                    </div>
                                </div>
                
                                <div class="col-md-6 pl-1">
                                    <input type="text" class="form-control" id="btn-input"  name="button_one_link" placeholder="button link">           
                                </div>
                            </div>  
                            
                            
                            <div class="row">    
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                    <label>Button Text</label>
                                    </div>
                                </div>
                
                                <div class="col-md-6 pl-1">
                                    <input type="text" class="form-control" id="btn-input"  name="button_one_text" placeholder="button text">           
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
                           <input id="button-two" type="checkbox" class="" name="button_two" value="">
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
                                    <input type="color" onchange="twoChangeValue()"  name="button_two_color" value="" id="twocolor">                                   
                                </div>
                            </div>

                            <div class="row">
                

                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                    <label>Button text Colour</label>
                                    </div>
                                </div>
                
                                <div class="col-md-6">
                                    <input type="color" onchange="twoTextColorValue()"  name="button_two_text_color" value="" id="TextTwocolor">                                   
                                </div>

                            </div>

                            <div class="row">    
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                    <label>Button Link</label>
                                    </div>
                                </div>
                
                                <div class="col-md-6 pl-1">
                                    <input type="text" class="form-control" id="btn-input"  name="button_two_link" placeholder="button link">           
                                </div>
                            </div> 
                            
                            
                            <div class="row">    
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                    <label>Button Text</label>
                                    </div>
                                </div>
                
                                <div class="col-md-6 pl-1">
                                    <input type="text" class="form-control" id="btn-input"  name="button_two_text" placeholder="button text">           
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
                                <option value="1">Publish</option> 
                                <option value="0">Unpublish</option> 
                            </select>   
                        </div>
                    </div>
                </div>

          
                <button type="submit" class="btn btn-primary btn-round pull-right">Save slider</button>
             
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