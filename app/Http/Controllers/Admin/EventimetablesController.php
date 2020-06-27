<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Eventimetable;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
class EventimetablesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventimetable = Eventimetable::latest()->paginate(50);
        return view('admin.eventimetables.index', compact('eventimetable'))
        ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.eventimetables.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Eventimetable $eventimetable)
    {
        $eventimetable -> eventdate = $request -> eventdate;
        $eventimetable -> typevent = $request -> typevent;
        $eventimetable -> venue = $request -> venue;
        $eventimetable -> audience = $request -> audience;
        $eventimetable -> guest = $request -> guest;
        $eventimetable -> duration= $request -> duration;
        $eventimetable ->save();
        if (session('key', 'Event saved successfully')) {
            Alert::success('Success!', session('key', 'Event saved successfully'));
        }
        return redirect('admin/eventimetables/create');
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
        $eventimetable = Eventimetable::findOrFail($id);
        return view('admin.eventimetables.edit', compact('eventimetable'));
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
        $form_event = array(
   
            'eventdate' => $request->eventdate,
            'typevent' => $request->typevent,
            'venue' => $request->venue,
            'audience' => $request->audience,
            'guest' => $request->guest,
            'duration' => $request->duration,
             );
    
        Eventimetable::whereid($id)->update($form_even);
        if (session('key', 'Event updated successfully')) {
            Alert::success('Success!', session('key', 'Event updated successfully'));
        }
        return redirect('admin/eventimetables');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventimetable = Eventimetable::findOrFail($id);
        $eventimetable ->delete();
        if (session('key', 'Even deleted successfully')) {
            Alert::error('Delete!', session('key', 'Even deleted successfully'));
        }
        return redirect('admin/eventimetables')->with('danger', 'Eleven deleted successfully.');
    
    }
}
