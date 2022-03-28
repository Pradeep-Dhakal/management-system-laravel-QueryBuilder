<?php

namespace App\Http\Controllers;

use App\Models\Details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=DB::table('details')->get();
        return view('index',['manxeharu'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        DB::table('details')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,

        ]);
        return redirect(route('index'))->with('status','Record Added vayo hola ni aaba ta khus??');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function show(Details $details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user=DB::table('details')->find($id);
        return view('edit',['manxeharu'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // code for update databse or details
        DB::table('details')->where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,

        ]);
        return redirect(route('index'))->with('status','LA hai gaich update ni vayo??');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $deleted = DB::table('detsils')->delete();

        DB::table('details')->where('id', $id)->delete();
        return redirect(route('index'))->with('status','data delete vayo hai !!');

    }
}
