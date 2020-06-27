<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Fleet;
class FleetsController extends Controller
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
        $fleets = Fleet::latest()->paginate(50);
        return view('admin.fleets.index', compact('fleets'))
        ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fleets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_fleet = array(
   
           'bus_name' => $request->bus_name,
           'no_plate' => $request->no_plate,
           'assigned_route' => $request->assigned_route,
           'capacity' => $request->capacity,
           'driver' => $request->driver,
           'image' => $new_name
        );
   
        fleet::create($form_fleet);
        if (session('key', 'Vehicle added successfully')) {
            Alert::success('Success!', session('key', 'vehicle added successfully'));
        }
        return redirect('admin/fleets/create')->with('success', 'Vehicle saved successfully.');
       
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
        $fleet = Fleet::findOrFail($id);
        return view('admin.fleets.edit', compact('fleet'));
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
        
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if ($image != '')
        {
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {

        }
        $fleet = array(
            'bus_name' => $request->bus_name,
            'no_plate' => $request->no_plate,
            'assigned_route' => $request->assigned_route,
            'capacity' => $request->capacity,
            'driver' => $request->driver,
            'image' => $image_name
         );
    
        fleet::whereid($id)->update($fleet);
        if (session('key', 'Fleet update successfully')) {
            Alert::success('Success!', session('key', 'Fleet updated successfully'));
        }
        return redirect('admin/fleets')->with('success', 'Fleet updated successfully.');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fleet = Fleet::findOrFail($id);
        $fleet ->delete();
        if (session('key', 'Fleet deleted successfully')) {
            Alert::error('Delete!', session('key', 'Fleet deleted successfully'));
        }
        return redirect('admin/fleets')->with('danger', 'Fleet deleted successfully.');
    
    }
}
