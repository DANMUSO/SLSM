<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Academictimetable;
use DB;
class AcademictimetablesController extends Controller
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
        $academictimetables = Academictimetable::oldest()->paginate(50);
        $formone = DB::select("SELECT * FROM academictimetables WHERE level='Form One'");
        $formtwo = DB::select("SELECT * FROM academictimetables WHERE level='Form Two'");
        $formthree = DB::select("SELECT * FROM academictimetables WHERE level='Form Three'");
        $formfour = DB::select("SELECT * FROM academictimetables WHERE level='Form Four'");
        return view('admin.academictimetables.index', compact('formone','formtwo','formthree','formfour'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.academictimetables.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Academictimetable $academictimetable)
    {
        $academictimetable -> level = $request -> level;
        $academictimetable -> day = $request -> day;
        $academictimetable -> lessontwo = $request -> lessontwo;
        $academictimetable -> lessonthree = $request -> lessonthree;
        $academictimetable -> lessonfive = $request -> lessonfive;
        $academictimetable -> lessonsix = $request -> lessonsix;
        $academictimetable -> lessoneight = $request -> lessoneight;
        $academictimetable -> lessonnine = $request -> lessonnine;
        $academictimetable -> lessoneleven = $request -> lessoneleven;
        $academictimetable -> lessontwelve = $request -> lessontwelve;
        $academictimetable -> lessonthirteen = $request -> lessonthirteen;
        $academictimetable -> lessonfourteen = $request -> lessonfourteen;
        $academictimetable ->save();
        if (session('key', 'Lesson saved successfully')) {
            Alert::success('Success!', session('key', 'Lesson saved successfully'));
        }
        return redirect('admin/academictimetables/create');
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
        $academictimetable = Academictimetable::findOrFail($id);
        return view('admin.academictimetables.edit', compact('academictimetable'));
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
        $form_lesson = array(
   
            'level' => $request->level,
            'day' => $request->day,
            'lessontwo' => $request->lessontwo,
            'lessonthree' => $request->lessonthree,
            'lessonfive' => $request->lessonfive,
            'lessonsix' => $request->lessonsix,
            'lessoneight' => $request->lessoneight,
            'lessonnine' => $request->lessonnine,
            'lessoneleven' => $request->lessoneleven,
            'lessontwelve' => $request->lessontwelve,
            'lessonthirteen' => $request->lessonthirteen,
            'lessonfourteen' => $request->lessonfourteen,
          
         );
    
        Academictimetable::whereid($id)->update($form_lesson);
        if (session('key', 'Lesson updated successfully')) {
            Alert::success('Success!', session('key', 'Lesson updated successfully'));
        }
        return redirect('admin/academictimetables');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $academictimetable = Academictimetable::findOrFail($id);
        $academictimetable ->delete();
        if (session('key', 'Lesson deleted successfully')) {
            Alert::error('Delete!', session('key', 'Lesson deleted successfully'));
        }
        return redirect('admin/academictimetables')->with('danger', 'Lesson deleted successfully.');
    
    }
}
