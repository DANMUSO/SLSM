<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Formonefee;
use DB;
class FormonefeesController extends Controller
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
        $arr['formonefees'] = Formonefee::all();
        return view('admin.formonefees.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formones = DB::select('select * from formones');
        return view('admin.formonefees.create', compact('formones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Formonefee $formonefee)
    {
            
        $formonefee->admissionno=$request->input('admissionno');
        $formonefee->amount=$request->input('amount');
        $formonefee->bank=$request->input('bank');
        $formonefee->receiptno=$request->input('receiptno');
        $formonefee ->save();
        $formonefees = Formonefee::all();
        if (session('key', 'Fees added successfully')) {
          Alert::success('Success!', session('key', 'Fees added successfully'));
        }
            return view('admin.formonefees.index', compact('formonefees'));
             

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formone = Formonefee::find($id);
        $performs = DB::select("select * from foneperformances where id='$id'");
        $fees = DB::select("select * from feesettings WHERE form='Form One'");
        $details = DB::select("select * from formones where id='$id'");
        $amount = DB::select("select * from formonefees where id='$id'");
        return view('admin.formonefees.payfee', compact('performs','formone','details','fees','amount')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formonefee = Formonefee::findOrFail($id);
        return view('admin.formonefees.edit', compact('formonefee'));
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
        $form_onefee = array(
   
            'bank' => $request->bank,
            'amount' => $request->amount,
            'receiptno' => $request->receiptno
         );
    
        Formonefee::whereid($id)->update($form_onefee);
        if (session('key', 'Fees updated successfully')) {
            Alert::success('Success!', session('key', 'Fees updated successfully'));
        }
        return redirect('admin/formonefees')->with('success', 'Fees updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formonefee = Formonefee::findOrFail($id);
        $formonefee ->delete();
        if (session('key', 'Fees deleted successfully')) {
            Alert::error('Delete!', session('key', 'Fees deleted successfully'));
        }
        return redirect('admin/formonefees')->with('danger', 'Data deleted successfully.');
    
    }
}
