<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Staffattendance;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
class StaffattendancesController extends Controller
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
        $staffattendances = Staffattendance::latest()->paginate(20);
        $staffs = DB::select("SELECT * FROM staff");
        $staffattendance = DB::select("SELECT * FROM staffattendances");
        $attendancestaff = DB::select("SELECT * FROM staffattendances");
        return view('admin.staffattendances.index', compact('staffattendances','staffs','staffattendance','attendancestaff'))
        ->with('i', (request()->input('page', 1) - 1) * 20);
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
        $staffattendances = array(
   
            'staffno' => $request->staffno,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'checkin' => $request->checkin,
            'checkout' => $request->checkout,
           
            
         );
    
         Staffattendance::create($staffattendances);
         $staffs = DB::select("select * from staff");
         $staffattendance = DB::select("SELECT * FROM staffattendances");
        $attendancestaff = DB::select("SELECT * FROM staffattendances");
        if (session('key', 'Data added successfully')) {
             Alert::success('Success!', session('key', 'Data added successfully'));
         }
         return view('admin.staffattendances.index', compact('staffs','attendancestaff','staffattendance'))->with('success', 'Date saved successfully.');
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
        $staffattendance = Staffattendance::findOrFail($id);
        return view('admin.staffattendances.edit', compact('staffattendance'));
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
        $form_staff = array(
            'name' => $request->name,
           'phone' => $request->phone,
           'email' => $request->email,
           'checkin' => $request->checkin,
           'checkout' => $request->checkout,
         );
    
        Staffattendance::whereid($id)->update($form_staff);
        if (session('key', 'Attendance update successfully')) {
            Alert::success('Success!', session('key', 'Attendance updated successfully'));
        }
        return redirect('admin/staffattendances')->with('success', 'Attendance updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from staffattendances where id = ?',[$id]);
        if (session('key', 'Attendance deleted successfully')) {
            Alert::error('Delete!', session('key', 'Attendance deleted successfully'));
        }
        return redirect('admin/staffattendances')->with('danger', 'Attendance deleted successfully.');
    }
}
