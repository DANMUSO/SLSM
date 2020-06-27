<?php

namespace App\Http\Controllers\Admin;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Award;
use DB;
class AwardsController extends Controller
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
        $awards = Award::latest()->paginate(50);
        return view('admin.awards.index', compact('awards'))
        ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.awards.create');
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
        $form_award = array(
   
            'id' => $request->id,
            'category' => $request->category,
            'award_date' => $request->award_date,
            'image' => $new_name
        );
   
        award::create($form_award);
        if (session('key', 'Award added successfully')) {
            Alert::success('Success!', session('key', 'Award added successfully'));
        }
        return redirect('admin/awards/create')->with('success', 'Award saved successfully.');
       
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
        $award = Award::findOrFail($id);
        return view('admin.awards.edit', compact('award'));
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
        $award = array(
            'category' => $request->category,
            'award_date' => $request->award_date,
            'image' => $image_name
         );
    
        award::whereid($id)->update($award);
        if (session('key', 'Award update successfully')) {
            Alert::success('Success!', session('key', 'Award updated successfully'));
        }
        return redirect('admin/awards')->with('success', 'Award updated successfully.');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from awards where id = ?',[$id]);
        if (session('key', 'Award deleted successfully')) {
            Alert::error('Delete!', session('key', 'Award deleted successfully'));
        }
        return redirect('admin/awards');
    }
}
