<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Formfourfee;
use DB;
class FormfourfeesController extends Controller
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
        $arr['formfourfees'] = Formfourfee::all();
        return view('admin.formfourfees.index')->with($arr);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formfours = DB::select('select * from formfours');
        return view('admin.formfourfees.create', compact('formfours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Formfourfee $formfourfee)
    {
        $formfourfee->admissionno=$request->input('admissionno');
        $formfourfee->amount=$request->input('amount');
        $formfourfee->bank=$request->input('bank');
        $formfourfee->receiptno=$request->input('receiptno');
        $formfourfee ->save();
        $formfourfees = Formfourfee::all();
        if (session('key', 'Fees added successfully')) {
          Alert::success('Success!', session('key', 'Fees added successfully'));
        }
            return view('admin.formfourfees.index', compact('formfourfees'));
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $formfour = formfourfee::find($id);
        $performs = DB::select("select * from foneperformances where id='$id'");
        $fees = DB::select("select * from feesettings WHERE form='Form One'");
        $details = DB::select("select * from formfours where id='$id'");
        $amount = DB::select("select * from formfourfees where id='$id'");
        return view('admin.formfourfees.payfee', compact('performs','formfour','details','fees','amount')); 
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formfourfee = Formfourfee::findOrFail($id);
        return view('admin.formfourfees.edit', compact('formfourfee'));
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
        $form_fourfee = array(
   
            'bank' => $request->bank,
            'amount' => $request->amount,
            'receiptno' => $request->receiptno
         );
    
        Formfourfee::whereid($id)->update($form_fourfee);
        if (session('key', 'Fees updated successfully')) {
            Alert::success('Success!', session('key', 'Fees updated successfully'));
        }
        return redirect('admin/formfourfees')->with('success', 'Fees updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formfourfee = Formfourfee::findOrFail($id);
        $formfourfee ->delete();
        if (session('key', 'Fees deleted successfully')) {
            Alert::error('Delete!', session('key', 'Fees deleted successfully'));
        }
        return redirect('admin/formfourfees')->with('danger', 'Fees deleted successfully.');
    
    }
}
