<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Formfourattendance;
use DB;
class FormfourattendancesController extends Controller
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
        $arr['formfourattendances'] = Formfourattendance::all();
        $students = DB::select("SELECT * FROM formfours");
        $halfabsent= DB::select("SELECT * FROM formfourattendances WHERE morning='Absent' OR evening='Present'");
        $halfpresent = DB::select("SELECT * FROM formfourattendances WHERE morning='Present' OR evening='Absent'");
        $absent = DB::select("SELECT * FROM formfourattendances WHERE morning='Absent' OR evening='Absent'");
        $present = DB::select("SELECT * FROM formfourattendances WHERE morning='Present' OR evening='Present' ");
        return view('admin.formfourattendances.index', compact('students','present','absent','halfpresent','halfabsent'))->with($arr);
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
        $formfourattendance = array(
   
            'student_id' => $request->student_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'morning' => $request->morning,
            'evening' => $request->evening,
            
         );
    
         Formfourattendance::create($formfourattendance);
         $students = DB::select("select * from formfours");
         $halfabsent= DB::select("SELECT * FROM formfourattendances WHERE morning='Absent' OR evening='Present'");
         $halfpresent = DB::select("SELECT * FROM formfourattendances WHERE morning='Present' OR evening='Absent'");
         $absent = DB::select("SELECT * FROM formfourattendances WHERE morning='Absent' OR evening='Absent'");
         $present = DB::select("SELECT * FROM formfourattendances WHERE morning='Present' OR evening='Present' ");
         
         if (session('key', 'Data added successfully')) {
             Alert::success('Success!', session('key', 'Data added successfully'));
         }
         return view('admin.formfourattendances.index', compact('students','present','absent','halfpresent','halfabsent'))->with('success', 'Date saved successfully.');
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
