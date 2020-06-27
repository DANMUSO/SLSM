<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Appointment;
use DB;
class AppointmentsController extends Controller
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
        $appointments = Appointment::oldest()->paginate(50);
        return view('admin.appointments.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.appointments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Appointment $appointment)
    {
        $appointment -> name = $request -> name;
        $appointment -> phone = $request -> phone;
        $appointment -> email = $request -> email;
        $appointment -> purpose = $request -> purpose;
        $appointment -> adate = $request -> adate;
        $appointment -> atime = $request -> atime;
        $appointment -> person = $request -> person;
        $appointment ->save();
        if (session('key', 'Appointment saved successfully')) {
            Alert::success('Success!', session('key', 'Appointment saved successfully'));
        }
        return redirect('admin/appointments/create');
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
        $appointment = Appointment::findOrFail($id);
        return view('admin.appointments.edit', compact('appointment'));
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
        $appointment = array(
   
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'purpose' => $request->purpose,
            'adate' => $request->adate,
            'atime' => $request->atime,
            'person' => $request->person,
            );
    
        Appointment::whereid($id)->update($appointment);
        if (session('key', 'Appointment updated successfully')) {
            Alert::success('Success!', session('key', 'Appointment updated successfully'));
        }
        return redirect('admin/appointments');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment ->delete();
        if (session('key', 'Appointment deleted successfully')) {
            Alert::error('Delete!', session('key', 'Appointment deleted successfully'));
        }
        return redirect('admin/appointments')->with('danger', 'Appointment deleted successfully.');
    
    }
}
