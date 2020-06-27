<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Validator;
use App\Event;
use DB;
use Calendar;
class EventsController extends Controller
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
        
        
    	$events = Event::get();
    	$event_list = [];
    	foreach ($events as $key => $event) {
    		$event_list[] = Calendar::event(
                $event->event_name,
                true,
                new \DateTime($event->start_date),
                new \DateTime($event->end_date.' +1 day')
            );
    	}
    	$calendar_details = Calendar::addEvents($event_list); 
        $users = DB::select('SELECT * FROM events WHERE status="Approved"');
        $pending = DB::select('SELECT * FROM events WHERE status="Pending"');
        $rejected = DB::select('SELECT * FROM events WHERE status="rejected"');
        return view('events',['users'=>$users], compact('calendar_details','pending','rejected') );
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
    public function store(Request $request, Event $event)
    {
        $event -> id = $request -> id;
        $event -> event_name = $request -> event_name;
        $event -> start_date = $request -> start_date;
        $event -> typeleave = $request -> typeleave;
        $event -> purpose = $request -> purpose;
        $event -> end_date = $request -> end_date;
        $event -> status = $request -> status;
        $event -> staffno = $request -> staffno;
        $event ->save();
        if (session('key', 'Leave Scheduled successfully')) {
            Alert::success('Success!', session('key', 'Leave Scheduled successfully'));
        }
        return redirect('admin/events');
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
        $event = Event::findOrFail($id);
        return view('admin.events.edit', compact('event'));
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
        $staff_leave = array(
   
            'event_name' => $request->event_name,
            'typeleave' => $request->typeleave,
            'purpose' => $request->purpose,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'staffno' => $request->staffno,
            'status' => $request->status,
         );
    
        Event::whereid($id)->update($staff_leave);
        if (session('key', 'Leave updated successfully')) {
            Alert::success('Success!', session('key', 'Leave updated successfully'));
        }
        return redirect('admin/events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from events where id = ?',[$id]);
        if (session('key', 'Leave deleted successfully')) {
            Alert::error('Delete!', session('key', 'Leave deleted successfully'));
        }
        return redirect('admin/events');
    }
}
