<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Performance;
class PerformancesController extends Controller
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
        $arr['performances'] = Performance::all();
        return view('admin.performances.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.performances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Performance $performance)
    {
        $performance -> id = $request -> id;
        $performance -> mgrd      = $request -> mgrd;
        $performance -> position      = $request -> position;
        $performance -> clsp      = $request -> clsp;
        $performance -> eng      = $request -> eng;
        $performance -> kisw      = $request -> kisw;
        $performance -> math     = $request -> math;
        $performance -> chem      = $request -> chem;
        $performance -> phy     = $request -> phy;
        $performance -> bio     = $request -> bio;
        $performance -> agr     = $request -> agr;
        $performance -> bs     = $request -> bs;
        $performance -> geo      = $request -> geo;
        $performance -> cre     = $request -> cre;
        $performance ->  ire    = $request -> ire;
        $performance ->  gen    = $request -> gen;
        $performance ->  hs    = $request -> hs;
        $performance ->  hist    = $request -> hist;
        $performance ->  ad    = $request -> ad;
        $performance ->   ww   = $request -> ww;
        $performance ->   mw   = $request -> mw;
        $performance ->   bc   = $request -> bc;
        $performance ->   ele   = $request -> ele;
        $performance ->   dd   = $request -> dd;
        $performance ->   at   = $request -> at;
        $performance ->   cs   = $request -> cs;
        $performance ->   french   = $request -> french;
        $performance ->   german   = $request -> german;
        $performance ->    arabic  = $request -> arabic;
        $performance ->    ksl  = $request -> ksl;
        $performance ->    music  = $request -> music;
        $performance ->  marks     = $request -> marks;
        $performance ->  point     = $request -> point;
        $performance ->save();
        if (session('key', 'Marks added successfully')) {
            Alert::success('Success!', session('key', 'Marks added successfully'));
        }
        return view('admin.performances.create')->with('success','Marks added Successfully');
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
        $performance = Performance::findOrFail($id);
        return view('admin.performances.edit', compact('performance'));
       
    
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
        $form_performance = array(
   
            'mgrd' => $request->mgrd,
            'position' => $request->position,
            'clsp' => $request->clsp,
            'marks' => $request->marks,
            'point' => $request->point,
            'eng' => $request->eng,
            'kisw' => $request->kisw,
            'math' => $request->math,
            'chem' => $request->chem,
            'phy' => $request->phy,
            'bio' => $request->bio,
            'agr' => $request->agr,
            'bs' => $request->bs,
            'geo' => $request->geo,
            'hist' => $request->hist,
            'cre' => $request->cre,
            'ire' => $request->ire,
            'gen' => $request->gen,
            'hs' => $request->hs,
            'ad' => $request->ad,
            'ww' => $request->ww,
            'mw' => $request->mw,
            'bc' => $request->bc,
            'ele' => $request->ele,
            'dd' => $request->dd,
            'at' => $request->at,
            'cs' => $request->cs,
            'french' => $request->french,
            'german' => $request->german,
            'arabic' => $request->arabic,
            'ksl' => $request->ksl,
            'music' => $request->music,
            
         );
    
        performance::whereid($id)->update($form_performance);
        if (session('key', 'Marks updated successfully')) {
            Alert::success('Success!', session('key', 'Marks updated successfully'));
        }
        return redirect('admin/performances')->with('success', 'Marks updated successfully.');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $performance = Performance::findOrFail($id);
        $performance->delete();
        if (session('key', 'Marks deleted successfully')) {
            Alert::error('Delete!', session('key', 'Marks deleted successfully'));
        }
        return redirect('admin/performances')->with('danger', 'Data deleted successfully.');
    }
}
