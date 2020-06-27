<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\couriersinward;
class CourierinwardsController extends Controller
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
        $courierinwards = couriersinward::latest()->paginate(50);
        return view('admin.courierinwards.index', compact('courierinwards'))
        ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courierinwards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, couriersinward $courierinward)
    {
        $courierinward -> receiveddate = $request -> receiveddate;
        $courierinward -> registerno = $request -> registerno;
        $courierinward -> name = $request -> name;
        $courierinward -> phone = $request -> phone;
        $courierinward -> email = $request -> email;
        $courierinward -> couriertype = $request -> couriertype;
        $courierinward -> capacity = $request -> capacity;
        $courierinward -> particulars = $request -> particulars;
        $courierinward -> product = $request -> product;
        $courierinward -> remark = $request -> remark;
        $courierinward ->save();
        if (session('key', 'Courier Inward saved successfully')) {
            Alert::success('Success!', session('key', 'Courier Inward saved successfully'));
        }
        return redirect('admin/courierinwards/create');
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
        $courierinward = couriersinward::findOrFail($id);
        return view('admin.courierinwards.edit', compact('courierinward'));
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
        $courierinward = array(
   
            'receiveddate' => $request->receiveddate,
            'registerno' => $request->registerno,
            'name' => $request->name,
            'product' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'remark' => $request ->remark,
            'couriertype' => $request->couriertype,
            'capacity' => $request->capacity,
            'particulars' => $request->particulars,
        
          
         );
    
         couriersinward::whereid($id)->update($courierinward);
        if (session('key', 'Courier In-ward updated successfully')) {
            Alert::success('Success!', session('key', 'Courier In-ward updated successfully'));
        }
        return redirect('admin/courierinwards');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courierinward = couriersinward::findOrFail($id);
        $courierinward ->delete();
        if (session('key', 'Courier Inward deleted successfully')) {
            Alert::error('Delete!', session('key', 'Courier Inward deleted successfully'));
        }
        return redirect('admin/courierinwards')->with('danger', 'Courier Inward deleted successfully.');
    
    }
}
