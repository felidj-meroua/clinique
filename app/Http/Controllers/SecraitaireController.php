<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Secraitaire;

class SecraitaireController extends Controller
{


public function newSecraitaire() {

    $newSecraitaire = new Secraitaire();

     $newSecraitaire->Nom_sec = "Fdj";
      $newSecraitaire->Prenom_sec = "marwa";
       $newSecraitaire->motdepasse_sec = "marwaf";
        $newSecraitaire->email_sec = "fdjmarwa@gmail.com";
         
          
       $newSecraitaire->save();


}





public function listSecraitaire() {

    $secraitaires = Secraitaire::all();

  //  dd($secraitaires);

    return view('secraitaires', ['secraitaires' => $secraitaires]);

}












    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
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
