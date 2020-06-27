<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\couriersforward;
use DB;

class CourierforwardsController extends Controller
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
        $courierforwards = couriersforward::latest()->paginate(50);
        return view('admin.courierforwards.index', compact('courierforwards'))
        ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courierforwards.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Courierforward $courierforward)
    {
        $courierforward -> receiveddate = $request -> receiveddate;
        $courierforward -> registerno = $request -> registerno;
        $courierforward -> name = $request -> name;
        $courierforward -> phone = $request -> phone;
        $courierforward -> email = $request -> email;
        $courierforward -> capacity = $request -> capacity;
        $courierforward -> particular = $request -> particular;
        $courierforward -> product = $request -> product;
        $courierforward -> remark = $request -> remark;
        $courierforward ->save();
        if (session('key', 'Courier Outward saved successfully')) {
            Alert::success('Success!', session('key', 'Courier Outward saved successfully'));
        }
        return redirect('admin/courierforwards/create');
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
        $courierforward = couriersforward::findOrFail($id);
        return view('admin.courierforwards.edit', compact('courierforward'));
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
        $courierforward = array(
   
            'receiveddate' => $request->receiveddate,
            'register' => $request->register,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'capacity' => $request->capacity,
            'remark' => $request ->remark,
            'product' => $request ->product,
            'particulars' => $request->particulars,
        
          
         );
    
         couriersforward::whereid($id)->update($courierforward);
        if (session('key', 'Courier Out-ward updated successfully')) {
            Alert::success('Success!', session('key', 'Courier Out-ward updated successfully'));
        }
        return redirect('admin/courierforwards');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courierforward = couriersforward::findOrFail($id);
        $courierforward ->delete();
        if (session('key', 'Courier Out deleted successfully')) {
            Alert::error('Delete!', session('key', 'Courier Out deleted successfully'));
        }
        return redirect('admin/courierforwards')->with('danger', 'Courier Out deleted successfully.');
    
    }
}
