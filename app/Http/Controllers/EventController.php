<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Client;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        $events = Event::all();

        return view('events.home', compact('events'), compact('categories'));
    }

    public function filter($id)
    {
        //
        $categories = Category::all();
        $events = Event::where('categories_id', $id)->get();

        return view('events.home', compact('events'), compact('categories'));
    }

    public function register($id)
    {
        //
        $event = Event::find($id);
        $category = Category::all();

        return view('events.register', compact('event','category'));
    }

    public function confirm()
    {
        //
        return view('events.confirm');
    }

    
    
    public function info_register($precioTotal , $cantidadTickets, $id)
    {
        //
        

        return view('events.info' , compact('precioTotal', 'cantidadTickets', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre_completo' => 'required',
            'numero_telefono' => 'required',
            'correo' => 'required|email',
            'cantidad' => 'required',
            'precio_total' => 'required',
            'event_id' => 'required',
        ]);
     
        Client::create($request->all());

        $event = Event::find($request->event_id);

        $event->update([
            'cantidad' => $event->cantidad - $request->cantidad,
        ]);
        
        $category = Category::find($event->categories_id);

        return view('events.confirm', compact('event','request','category'));
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

        $eventsTems = Event::where('categories_id','=',$event->categories_id)->get();
        
        $category = Category::all();


        return view('events.description', compact('event','eventsTems','category'));
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
        //
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
    }
}
