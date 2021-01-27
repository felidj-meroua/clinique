<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\UploadedFile;

use App\Patient;

use App\Http\Requests\patientRequest;

class PatientController extends Controller
{


    public function index()
    {
        

     $listpatient = Patient::all();
     return view('patient.index',['patients' => $listpatient]);

    }

  
    public function create()
    {
         return view('patient.create');
    }

  //enregistrer un pati
    public function store(patientRequest $request)
    {
       $patient = new Patient();
    

      $patient->Nom_pati = $request->input('Nom_pati');
      $patient->Prenom_pati = $request->input('Prenom_pati');
       $patient->num_de_secu_soci = $request->input('num_de_secu_soci');
        $patient->date_naissance_pati = $request->input('date_naissance_pati');
        $patient->num_pati = $request->input('num_pati');
        $patient->adresse_pati = $request->input('adresse_pati');
        $patient->email_pati = $request->input('email_pati');
        $patient->mal_chroniques = $request->input('mal_chroniques');
         $patient->allergies = $request->input('allergies');
        $patient->commentaires = $request->input('commentaires');
       $patient->imageries = $request->input('imageries');
       
      if($request->hasFile('photo')) {

       $patient->photo = $request->imageries->store('image'); }
                                    


        $patient->save();


session()->flash('success', 'le patient a été bien enregistré !!');

      
return redirect('patients');

    }


    public function show($id)
    {
        //
    }

   // recupérer un pati et le mettre dans un formulaire
    public function edit($id)
    {
        
       $patient = Patient::find($id);

       return view('patient.edit', ['patient' => $patient]);
      



    }

   // modifier un pati
    public function update(patientRequest $request, $id)
    {
        
         $patient = Patient::find($id);

         $patient->Nom_pati = $request->input('Nom_pati');
         $patient->Prenom_pati = $request->input('Prenom_pati');
         $patient->num_de_secu_soci = $request->input('num_de_secu_soci');
         $patient->date_naissance_pati = $request->input('date_naissance_pati');
         $patient->num_pati = $request->input('num_pati');
        $patient->adresse_pati = $request->input('adresse_pati');
        $patient->email_pati = $request->input('email_pati');
       $patient->mal_chroniques = $request->input('mal_chroniques');
         $patient->allergies = $request->input('allergies');
        $patient->commentaires = $request->input('commentaires');
       $patient->imageries = $request->input('imageries');




  $patient->save();

  return redirect('patients');


    }
 
 //supp un pati
 
    public function destroy($id)
    {
        
       $patient = Patient::find($id);

       $patient->delete();

       return redirect('patients');






    }
}
