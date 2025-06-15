<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index() {

        $events = Event::all();

            return view('welcome',['events' => $events]);
    }

    public function create() {
        return view('events.create');
    } 

    //ADICIONANDO EVENTOS REQUEST

    public function store(Request $request) {

    // Criando o novo evento
    $event = new Event();
    
    // Atribuindo os dados
    $event->title = $request->title;
    $event->city = $request->city;
    $event->private = $request->private;
    $event->description = $request->description;

    // Salvando o evento no banco de dados
    $event->save(); 

    // Redirecionando após salvar
    return redirect('/');
}
    
}
