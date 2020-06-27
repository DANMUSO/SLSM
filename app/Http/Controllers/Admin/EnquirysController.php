<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use App\Enquiry;
class EnquirysController extends Controller
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
        $enquirys = Enquiry::latest()->paginate(50);
        return view('admin.enquiries.index', compact('enquirys'))
        ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.enquiries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Enquiry $enquiry)
    {
        $enquiry -> enquirytype = $request -> enquirytype;
        $enquiry -> enquiry = $request -> enquiry;
        $enquiry -> phone = $request -> phone;
        $enquiry -> email = $request -> email;
        $enquiry -> clientname = $request -> clientname;
        $enquiry -> person = $request -> person;
        $enquiry -> followdate= $request -> followdate;
        $enquiry -> followtime= $request -> followtime;
        $enquiry -> remark= $request -> remark;
        $enquiry ->save();
        if (session('key', 'Enquity saved successfully')) {
            Alert::success('Success!', session('key', 'Enquiry saved successfully'));
        }
        return redirect('admin/enquiries/create');
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
        $enquiry = Enquiry::findOrFail($id);
        return view('admin.enquiries.edit', compact('enquiry'));
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
        $enquiry = array(
   
            'enquirytype' => $request->enquirytype,
            'enquiry' => $request->enquiry,
            'clientname' => $request->clientname,
            'phone' => $request->phone,
            'email' => $request->email,
            'remark' => $request->remark,
            'person' => $request->person,
            'followdate' => $request->followdate,
            'followtime' => $request->followtime,
          
         );
    
        Enquiry::whereid($id)->update($enquiry);
        if (session('key', 'Enquiry updated successfully')) {
            Alert::success('Success!', session('key', 'Enquiry updated successfully'));
        }
        return redirect('admin/enquiries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $enquiry ->delete();
        if (session('key', 'Enquiry deleted successfully')) {
            Alert::error('Delete!', session('key', 'Enquiry deleted successfully'));
        }
        return redirect('admin/enquiries')->with('danger', 'Enquiry deleted successfully.');
    
    }
}
