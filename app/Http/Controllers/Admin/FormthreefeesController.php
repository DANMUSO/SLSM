<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Formthreefee;
use DB;
class FormthreefeesController extends Controller
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
        $arr['formthreefees'] = Formthreefee::all();
        return view('admin.formthreefees.index')->with($arr);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formthrees = DB::select('select * from formthrees');
      return view('admin.formthreefees.create', compact('formthrees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Formthreefee $formthreefee)
    {
        $formthreefee->admissionno=$request->input('admissionno');
        $formthreefee->amount=$request->input('amount');
        $formthreefee->bank=$request->input('bank');
        $formthreefee->receiptno=$request->input('receiptno');
        $formthreefee ->save();
        $formthreefees = Formthreefee::all();
        if (session('key', 'Fees added successfully')) {
          Alert::success('Success!', session('key', 'Fees added successfully'));
        }
            return view('admin.formthreefees.index', compact('formthreefees'));
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formthrees = formthreefee::find($id);
        $performs = DB::select("select * from fthreeperformances where id='$id'");
        $fees = DB::select("select * from feesettings WHERE form='Form Three'");
        $details = DB::select("select * from formthrees where id='$id'");
        $amount = DB::select("select * from formthreefees where id='$id'");
        return view('admin.formthreefees.payfee', compact('performs','formthrees','details','fees','amount')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formthreefee = Formthreefee::findOrFail($id);
        return view('admin.formthreefees.edit', compact('formthreefee'));
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
        $form_threefee = array(
            'bank' => $request->bank,
            'amount' => $request->amount,
            'receiptno' => $request->receiptno
         );
    
        Formthreefee::whereid($id)->update($form_threefee);
        if (session('key', 'Fees updated successfully')) {
            Alert::success('Success!', session('key', 'Fees updated successfully'));
        }
        return redirect('admin/formthreefees')->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formthreefee = Formthreefee::findOrFail($id);
        $formthreefee ->delete();
        if (session('key', 'Fees deleted successfully')) {
            Alert::error('Delete!', session('key', 'Fees deleted successfully'));
        }
        return redirect('admin/formthreefees')->with('danger', 'Data deleted successfully.');
    
    }
}
