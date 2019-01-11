<?php

namespace App\Http\Controllers\API;
use App\Payment; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Gate::allows('isAdmin') || \Gate::allows('isAuthor') ){

            return Payment::all();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uploadedfiles = $request->logos;
        foreach($uploadedfiles as $file){
            $filenamewithext = $file->getClientOriginalName();
            $filename = pathinfo($filenamewithext,PATHINFO_FILENAME);
            $ext = $file('file_upload')->getClientOriginalExtension();
            $filenametostore = $filename.'_'.time().'.'.$ext;
            $path = $file('file_upload')->storeAs('img/payment-logos/' , $filenametostore);
        }
        return response(['status' => 'success']);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
