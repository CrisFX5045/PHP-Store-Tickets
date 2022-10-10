<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Event;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::latest()->paginate(11);
    
        return view('auth.index',compact('events'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('auth.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Event $event)
    {
         //
         $request->validate([
            'nombre_evento' => 'required',
            'precio' => 'required',
            'cantidad' =>'required',
            'categories_id' =>'required',
            'imagen' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'descripcion' =>'required',
            'lugar' =>'required',
            'fecha' =>'required',
            'hora' =>'required',
            'tipo' =>'required',
            'publico' =>'required'
        ]);
    
        $data = $request->all();
        $file = $request->file('imagen');

        // generate a new filename. getClientOriginalExtension() for the file extension
        $filename = 'event-photo-' . time() . '.' . $file->getClientOriginalExtension();
        $data['imagen'] = $filename;
        
        // save to storage/app/public/imgs as the new $filename
        $path = $file->storeAs('public/imgs', $filename);
        //

        Event::create($data);
     
        return redirect()->route('auth.index')
                        ->with('success','Event created successfully.');
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
        $event = Event::find($id);
        $categories = Category::find($event->categories_id);
        
        return view('auth.show',compact('event', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          //
          $event = Event::find($id);
          $categories = Category::all();
          return view('auth.edit',compact('event', 'categories'));
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
            'nombre_evento' => 'required',
            'precio' => 'required',
            'cantidad' =>'required',
            'categories_id' =>'required',
            'descripcion' =>'required',
            'lugar' =>'required',
            'fecha' =>'required',
            'hora' =>'required',
            'tipo' =>'required',
            'publico' =>'required'
        ]);
    
        $data = $request->all();
        $file = $request->file('imagen');


        if(strlen($file) > 0){

            $request->validate([
                'imagen' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            // generate a new filename. getClientOriginalExtension() for the file extension
            $filename = 'event-photo-' . time() . '.' . $file->getClientOriginalExtension();
            $data['imagen'] = $filename;
            // save to storage/app/public/imgs as the new $filename
            $path = $file->storeAs('public/imgs', $filename);
        //
        }else{
            $data['imagen'] = $data['current_img'];
        }
        
        $event = Event::find($id);
        $event->update($data);
    
        return redirect()->route('auth.index')
                        ->with('success','Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //
         $event = Event::find($id);
         $event->delete();
    
         return redirect()->route('auth.index')
                         ->with('success','Event deleted successfully');
    }
}

