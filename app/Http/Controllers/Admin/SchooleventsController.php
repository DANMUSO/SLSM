<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Schoolevent;
use DB;
class SchooleventsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schoolevents = Schoolevent::latest()->paginate(50);
        $events = DB::select("SELECT * FROM schoolevents");
        return view('admin.schoolevents.index', compact('schoolevents','events'))
        ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.schoolevents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $schoolevents = array(
   
            'typevent' => $request->typevent,
            'venue' => $request->venue,
            'startdate' => $request->startdate,
            'endate' => $request->endate,
            'numberp' => $request->numberp,
            'participants' => $request->participants,
            'duration' => $request->duration,
            'resources' => $request->resources,
           
            
         );
    
         Schoolevent::create($schoolevents);
         $events = DB::select("SELECT * FROM schoolevents");
        if (session('key', 'School Event added successfully')) {
             Alert::success('Success!', session('key', 'School Event added successfully'));
         }
         return view('admin.schoolevents.index', compact('events'))->with('success', 'School Event saved successfully.');
    
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
        $schoolevent = Schoolevent::findOrFail($id);
        return view('admin.schoolevents.edit', compact('schoolevent'));
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
        $form_events = array(
            'typevent' => $request->typevent,
            'venue' => $request->venue,
            'startdate' => $request->startdate,
            'endate' => $request->endate,
            'numberp' => $request->numberp,
            'participants' => $request->participants,
            'duration' => $request->duration,
            'resources' => $request->resources,
           
         );
    
        Schoolevent::whereid($id)->update($form_staff);
        if (session('key', 'School Event update successfully')) {
            Alert::success('Success!', session('key', 'School Event updated successfully'));
        }
        return redirect('admin/schoolevents')->with('success', 'School Event updated successfully.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from schoolevents where id = ?',[$id]);
        if (session('key', 'School Event deleted successfully')) {
            Alert::error('Delete!', session('key', 'School Event deleted successfully'));
        }
        return redirect('admin/schoolevents')->with('danger', 'School Event deleted successfully.');
    
    }
}
