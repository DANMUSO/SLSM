<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Examination;
class ExaminationsController extends Controller
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
        $examinations = Examination::latest()->paginate(50);
        return view('admin.examinations.index', compact('examinations'))
        ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.examinations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Examination $examination)
    {
        $examination -> exam = $request -> exam;
        $examination -> classes = $request -> classes;
        $examination -> supervisor = $request -> supervisor;
        $examination -> venue = $request -> venue;
        $examination -> sdate = $request -> sdate;
        $examination -> edate = $request -> edate;
        $examination ->save();
        if (session('key', 'Exam saved successfully')) {
            Alert::success('Success!', session('key', 'Exam saved successfully'));
        }
        return redirect('admin/examinations/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $examination = Examination::findOrFail($id);
        return view('admin.examinations.edit', compact('examination'));
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
        $form_exam = array(
   
            'exam' => $request->exam,
            'classes' => $request->classes,
            'supervisor' => $request->supervisor,
            'venue' => $request->venue,
            'sdate' => $request->sdate,
            'edate' => $request->edate
         );
    
        Examination::whereid($id)->update($form_exam);
        if (session('key', 'Exam updated successfully')) {
            Alert::success('Success!', session('key', 'Exam updated successfully'));
        }
        return redirect('admin/examinations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $examination = Examination::findOrFail($id);
        $examination ->delete();
        if (session('key', 'Examination deleted successfully')) {
            Alert::error('Delete!', session('key', 'Examination deleted successfully'));
        }
        return redirect('admin/examinations')->with('danger', 'Examination deleted successfully.');
    
    }
}
