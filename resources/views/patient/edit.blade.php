@extends('layouts.app')



@section('content')


@if(count($errors))

<div class="alert alert-danger" role="alert">
  <ul>
@foreach($errors->all() as $message)
<li>{{ $message }}</li>
 
 @endforeach
</ul>

</div>
@endif


<div class="container">  
  <div class="row">
  	<div class="col-md-12">
  		
          <form action="{{ url('patients/'.$patient->id) }}" method="post">
            <input type="hidden" name="_method" value="PUT">
         
         {{ csrf_field() }}


          	<div class="form-group">
          		<label for="">Nom</label>
          		<input type="text" name="Nom_pati" class="form-control" value="{{ $patient->Nom_pati }}">
          	</div>

          	<div class="form-group">
          		<label for="">Prenom</label>
          		<input type="text" name="Prenom_pati" class="form-control" value="{{ $patient->Prenom_pati }}">
          	</div>

          		<div class="form-group">
          		<label for="">numérode suc soci</label>
          		<input type="text" name="num_de_secu_soci" class="form-control" value="{{ $patient->num_de_secu_soci }}">
          	</div>

               <div class="form-group">
              <label for="">date de naissance</label>
              <input type="text" name="date_naissance_pati" class="form-control" value="{{ $patient->date_naissance_pati }}">
            </div>

            <div class="form-group">
              <label for="">numéro de tél</label>
              <input type="text" name="num_pati" class="form-control" value="{{ $patient->num_pati }}">
            </div>
           
            <div class="form-group">
              <label for="">Adresse</label>
              <input type="text" name="adresse_pati" class="form-control" value="{{ $patient->adresse_pati }}">
            </div>

            <div class="form-group">
              <label for="">email</label>
              <input type="text" name="email_pati" class="form-control" value="{{ $patient->email_pati }}">
            </div>

            <div class="form-group">
              <label for="">mal chronique</label>
              <input type="text" name="mal_chroniques" class="form-control" value="{{ $patient->mal_chroniques }}">
            </div>



            <div class="form-group">
              <label for="">allergies</label>
              <input type="text" name="allergies" class="form-control" value="{{ $patient->allergies }}">
            </div>



            <div class="form-group">
              <label for="">commentaires</label>
              <input type="text" name="commentaires" class="form-control" value="{{ $patient->commentaires }}">
            </div>

             
            <div class="form-group">
              <label for="">imageries</label>
              <input type="text" name="imageries" class="form-control" value="{{ $patient->imageries }}">
            </div>

          	<div class="form-group">
          		
          		<input type="submit" class="form-control btn btn-danger" value="Modifier">
          	</div>

          </form>


  	</div>
  	

  </div> 


</div>



@endsection