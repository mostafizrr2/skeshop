<?php

namespace App\Http\Controllers\Dashboard;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sliders'] = Slider::latest()->get();
        $data['title'] = "All sliders from database";
        return view('admin.slider.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd( $request->is_published);
        // $image = $request->slider_image;
        // $file_ext =  $image->getClientOriginalExtension();
        // $file_name =  time().'.'.$file_ext;
        // dd($request->all());

        $request->validate([
            'slider_title' => 'max:95',
            'slider_subtitle'=> 'max:195',
            'slider_image'=>'required',
            'button_one_link'=> 'max:50',
            'button_one_text'=>'max:50',
            'button_two_link'=> 'max:50',
            'button_two_text'=>'max:50',
        ]);

        $image = $request->slider_image;
        $file_ext =  $image->getClientOriginalExtension();
        $file_name =  'slider_'.time().'.'.$file_ext;

        $path = 'public/slider_images/';
        
        Storage::putFileAs($path, $image, $file_name);

        $data = new Slider();
        $data->slider_title =  $request->slider_title;
        $data->slider_subtitle =  $request->slider_subtitle;

        $data->slider_image =  $file_name;

        $data->button_one =  $request->button_one;
        $data->button_one_color =  $request->button_one_color;
        $data->button_one_text_color =  $request->button_one_text_color;
        $data->button_one_link =  $request->button_one_link;
        $data->button_one_text =  $request->button_one_text;

        $data->button_two =  $request->button_two;
        $data->button_two_color =  $request->button_two_color;
        $data->button_two_text_color =  $request->button_two_text_color;
        $data->button_two_link =  $request->button_two_link;
        $data->button_two_text =  $request->button_two_text;
        $data->is_published =  $request->is_published;

        $data->save();

        Session::flash('success', 'Slider Saved Successfully');
        
        return redirect()->route('all.slider');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['slider'] = Slider::whereId($id)->first();
        
        return view('admin.slider.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'slider_title' => 'max:95',
            'slider_subtitle'=> 'max:195',
            // 'slider_image'=>'required',
            'button_one_link'=> 'max:50',
            'button_one_text'=>'max:50',
            'button_two_link'=> 'max:50',
            'button_two_text'=>'max:50',
        ]);

        $slider_data = Slider::whereId($id)->first();

        $old_image = $slider_data->slider_image;


        if( $request->hasFile('slider_image') )
        { 
            $image = $request->slider_image;
            $file_ext =  $image->getClientOriginalExtension();

            $file_name =  'slider_'.time().'.'.$file_ext;

            $path = 'public/slider_images/';

            if( Storage::exists( $path . $old_image ) )
            {
                Storage::delete( $path . $old_image);  
            }
            
            Storage::putFileAs( $path, $image, $file_name );

        }
        else
        {
            $file_name =  $old_image;
        }

        // dd( $file_name);

        $data = Slider::find($id);

        $data->slider_title =  $request->slider_title;
        $data->slider_subtitle =  $request->slider_subtitle;

        $data->slider_image =  $file_name;

        $data->button_one =  $request->button_one;
        $data->button_one_color =  $request->button_one_color;
        $data->button_one_text_color =  $request->button_one_text_color;
        $data->button_one_link =  $request->button_one_link;
        $data->button_one_text =  $request->button_one_text;

        $data->button_two =  $request->button_two;
        $data->button_two_color =  $request->button_two_color;
        $data->button_two_text_color =  $request->button_two_text_color;
        $data->button_two_link =  $request->button_two_link;
        $data->button_two_text =  $request->button_two_text;
        $data->is_published =  $request->is_published;

        $data->save();

        Session::flash('success', 'Slider Updated Successfully');
        
        return back();            

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $slider = Slider::whereId($id)->first();
        $image = $slider->slider_image;
        $path = 'public/slider_images/'; 
        Storage::delete( $path . $image);  
    
        $data = Slider::findOrFail($id);
        $data->delete();

        Session::flash('success', 'Slider deleted successfully..');
        return redirect()->route('all.slider');
    }
}
