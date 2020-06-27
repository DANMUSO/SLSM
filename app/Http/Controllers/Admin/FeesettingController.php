<?php

namespace App\Http\Controllers\Admin;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feesetting;
use DB;
class FeesettingController extends Controller
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
        $feesettings = Feesetting::latest()->paginate(50);
        $formone=DB::select("select * from feesettings where form='Form One'");
        $formtwo=DB::select("select * from feesettings where form='Form Two'");
        $formthree=DB::select("select * from feesettings where form='Form Three'");
        $formfour=DB::select("select * from feesettings where form='Form Four'");
        return view('admin.feesettings.index', compact('feesettings','formone','formtwo','formthree','formfour'))
        ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.feesettings.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $feesetting = array(
   
           'category' => $request->category,
           'form' => $request->form,
           'term' => $request->term,
           'amount' => $request->amount,
           'deadline' => $request->deadline,
           
        );
   
        Feesetting::create($feesetting);
        if (session('key', 'Data added successfully')) {
            Alert::success('Success!', session('key', 'Data added successfully'));
        }
        return redirect('admin/feesettings/create')->with('success', 'Date saved successfully.');
       
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
        $feesetting = Feesetting::findOrFail($id);
        return view('admin.feesettings.edit', compact('feesetting'));
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
        $feesetting = array(
            'category' => $request->category,
            'form' => $request->form,
            'term' => $request->term,
            'amount' => $request->amount,
            'deadline' => $request->deadline,
         );
    
        feesetting::whereid($id)->update($feesetting);
        if (session('key', 'Fees Category update successfully')) {
            Alert::success('Success!', session('key', 'Fees Category updated successfully'));
        }
        return redirect('admin/feesettings')->with('success', 'Fees Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feesetting = Feesetting::findOrFail($id);
        $feesetting ->delete();
        if (session('key', 'Fees Category deleted successfully')) {
            Alert::error('Delete!', session('key', 'Fees Category deleted successfully'));
        }
        return redirect('admin/feesettings')->with('danger', 'Fees Category deleted successfully.');
    
    }
}
