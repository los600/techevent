<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Http\Requests\StoreEventsRequest;
use App\Http\Requests\UpdateEventsRequest;
use App\Http\Controllers\IndexController;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(route('admin'));
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request->image);
        
        
       
       /*   $request->validate([
            'image' => 'required|image|max:2048'
        ]); */
        
      
        $data =[
            'title'=> $request->title,
            'image'=> $request ->image,
            'date'=> $request ->date,
            'maxparticipants'=> $request ->maxparticipants,
            'description'=> $request ->description,
            'isImportant'=> $request ->isImportant ? true : false,
        ];
        
        if ($request->hasFile('image')){
            $data['image']=
            $request->file('image')->store('img','public');
        };
        Events::create($data);
        return redirect(route('indexAdmin'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
    $event = Events::FindOrFail($id);
    return view ('editEvent', ['event'=>$event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventsRequest  $request
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function update(Request $request, $id)
    {
        $eventUpdate = Events::findOrFail($id);
        $eventUpdate -> title= $request -> input('title');
        $eventUpdate -> date= $request -> input('date');
        $eventUpdate -> description= $request -> input('description');
        $eventUpdate -> image= $request -> input('image');
        $eventUpdate->save();

        return redirect (route ('indexAdmin'));
    } 
=======
    public function update(UpdateEventsRequest $request, $id)
    {
      $eventToUpDate = Events::FindOrFail($id); 
      $eventToUpDate ->title= $request->input ('title');
      $eventToUpDate ->date= $request->input ('date'); 
      $eventToUpDate ->maxparticipants= $request->input ('maxparticipats');
      $eventToUpDate ->description= $request->input ('description');
      $eventToUpDate -> save();
      return back();
    
    }
>>>>>>> 002a9a11f4e2cfe86b9202cff61594d91df1adc9

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        // $eventToDelete = Events::findOrFail($id);
        // $eventToDelete->delete();
        Events::destroy ($id);
        return back();
    }

    public function calendar($id)
    {
        $event = User::find($id);

        dd($event->created_at->addDays());

        return view ('event.create');
    }
    
}
