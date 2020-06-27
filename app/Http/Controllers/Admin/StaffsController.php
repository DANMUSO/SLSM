<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Staff;
use DB;
class StaffsController extends Controller
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
      
        $staffs = staff::latest()->paginate(50);
        return view('admin.staffs.index', compact('staffs'))
        ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, staff $staff)
    {
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_staff = array(
   
           'fname' => $request->fname,
           'lname' => $request->lname,
           'phone' => $request->phone,
           'email' => $request->email,
           'nationalid' => $request->nationalid,
           'gender' => $request->gender,
           'birth' => $request->birth,
           'nationality' => $request->nationality,
           'accountholder' => $request->accountholder,
           'account' => $request->account,
           'bank' => $request->bank,
           'branch' => $request ->branch,
           'id' => $request ->id,
           'department' => $request ->department,
           'designation' => $request ->designation,
           'joindate' => $request ->joindate,
           'basic' => $request->basic,
           'transport' => $request ->transport,
           'medical' => $request ->medical,
           'house' => $request ->house,
           'nssf' => $request->nssf,
           'nhif' => $request->nhif,
           'county' => $request->county,
           'image' => $new_name
        );
   
        staff::create($form_staff);
        if (session('key', 'Data added successfully')) {
            Alert::success('Success!', session('key', 'Data added successfully'));
        }
        return redirect('admin/staffs/create')->with('success', 'Data saved successfully.');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $staff = staff::findOrFail($id);
        $bank = DB::select("select * from staff where id=$id");
        $staffs = DB::select("select * from events where id=$id");
        $awards = DB::select("select * from awards where id=$id");
        return view('admin.staffs.profile', compact('staff','staffs','awards','bank'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = staff::findOrFail($id);
        return view('admin.staffs.edit', compact('staff'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if ($image != '')
        {
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {

        }
        $form_staff = array(
            'fname' => $request->fname,
           'lname' => $request->lname,
           'phone' => $request->phone,
           'email' => $request->email,
           'nationalid' => $request->nationalid,
           'gender' => $request->gender,
           'birth' => $request->birth,
           'nationality' => $request->nationality,
           'accountholder' => $request->accountholder,
           'account' => $request->account,
           'bank' => $request->bank,
           'branch' => $request ->branch,
           'id' => $request ->id,
           'department' => $request ->department,
           'designation' => $request ->designation,
           'joindate' => $request ->joindate,
           'basic' => $request->basic,
           'transport' => $request ->transport,
           'medical' => $request ->medical,
           'house' => $request ->house,
           'nssf' => $request->nssf,
           'nhif' => $request->nhif,
           'county' => $request->county,
            'image' => $image_name
         );
    
        staff::whereid($id)->update($form_staff);
        if (session('key', 'Data update successfully')) {
            Alert::success('Success!', session('key', 'Data updated successfully'));
        }
        return redirect('admin/staffs')->with('success', 'Data updated successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = staff::findOrFail($id);
        $staff ->delete();
        if (session('key', 'Delete successfully')) {
            Alert::error('Delete!', session('key', 'Data Delete successfully'));
        }
        return redirect('admin/staffs')->with('danger', 'Data deleted successfully.');
    
    }
}
