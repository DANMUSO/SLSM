<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Formtwofee;
use DB;
class FormtwofeesController extends Controller
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
        $arr['formtwofees'] = Formtwofee::all();
        return view('admin.formtwofees.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {$formtwos = DB::select('select * from formtwos');
        return view('admin.formtwofees.create', compact('formtwos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Formtwofee $formtwofee)
    {
        $formtwofee->admissionno=$request->input('admissionno');
        $formtwofee->amount=$request->input('amount');
        $formtwofee->bank=$request->input('bank');
        $formtwofee->receiptno=$request->input('receiptno');
        $formtwofee ->save();
        $formtwofees = Formtwofee::all();
        if (session('key', 'Fees added successfully')) {
          Alert::success('Success!', session('key', 'Fees added successfully'));
        }
            return view('admin.formtwofees.index', compact('formtwofees'));
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formtwos = formtwofee::find($id);
        $performs = DB::select("select * from fthreeperformances where id='$id'");
        $fees = DB::select("select * from feesettings WHERE form='Form Three'");
        $details = DB::select("select * from formtwos where id='$id'");
        $amount = DB::select("select * from formtwofees where id='$id'");
        return view('admin.formtwofees.payfee', compact('performs','formtwos','details','fees','amount')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formtwofee = Formtwofee::findOrFail($id);
        return view('admin.formtwofees.edit', compact('formtwofee'));
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
        $form_twofee = array(
   
            'bank' => $request->bank,
            'amount' => $request->amount,
            'receiptno' => $request->receiptno
         );
    
        Formtwofee::whereid($id)->update($form_twofee);
        if (session('key', 'Fees updated successfully')) {
            Alert::success('Updated!', session('key', 'Fees updated successfully'));
        }
        return redirect('admin/formtwofees')->with('success', 'Fees updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formtwofee = Formtwofee::findOrFail($id);
        $formtwofee ->delete();
        if (session('key', 'Fees deleted successfully')) {
            Alert::error('Delete!', session('key', 'Fees deleted successfully'));
        }
        return redirect('admin/formtwofees')->with('danger', 'Fees deleted successfully.');
    
    }
}
