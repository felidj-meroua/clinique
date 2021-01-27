@extends('layouts.app')



@section('content')


<div class="container">  
  <div class="row">
  	<div class="col-md-12">
  		
          <form action="{{ url('patients') }}" method="post">
         
         {{ csrf_field() }}


          	<div class="form-group @if($errors->get('Nom_pati')) has-error @endif">
          		<label for="">Nom</label>
      <input type="text" name="Nom_pati" class="form-control" value="{{ old('Nom_pati') }}">
      @if($errors->get('Nom_pati'))
      @foreach($errors->get('Nom_pati') as $message)
<li>{{ $message }}</li>
      @endforeach
      @endif
          	</div>

          	<div class="form-group @if($errors->get('Prenom_pati')) has-error @endif">
          		<label for="">Prenom</label>
          		<input type="text" name="Prenom_pati" class="form-control" value="{{ old('Prenom_pati') }}">
               @if($errors->get('Prenom_pati'))
      @foreach($errors->get('Prenom_pati') as $message)
<li>{{ $message }}</li>
      @endforeach
      @endif
          	</div>

          		<div class="form-group  @if($errors->get('num_de_secu_soci')) has-error @endif">
          		<label for="">numérode suc soci</label>
          		<input type="text" name="num_de_secu_soci" class="form-control" value="{{ old('num_de_secu_soci') }}">
              @if($errors->get('num_de_secu_soci'))
      @foreach($errors->get('num_de_secu_soci') as $message)
<li>{{ $message }}</li>
      @endforeach
      @endif
          	</div>

               <div class="form-group">
              <label for="">date de naissance</label>
              <input type="text" name="date_naissance_pati" class="form-control">
            </div>

            <div class="form-group">
              <label for="">numéro de tél</label>
              <input type="text" name="num_pati" class="form-control">
            </div>
           
            <div class="form-group">
              <label for="">Adresse</label>
              <input type="text" name="adresse_pati" class="form-control">
            </div>

            <div class="form-group">
              <label for="">email</label>
              <input type="text" name="email_pati" class="form-control">
            </div>

            <div class="form-group">
              <label for="">mal chronique</label>
              <input type="text" name="mal_chroniques" class="form-control">
            </div>



            <div class="form-group">
              <label for="">allergies</label>
              <input type="text" name="allergies" class="form-control">
            </div>



            <div class="form-group">
              <label for="">commentaires</label>
              <input type="text" name="commentaires" class="form-control">
            </div>

             
            <div class="form-group">
              <label for="">imageries</label>
              <input type="file" name="imageries" class="form-control">
            </div>

          	<div class="form-group">
          		
          		<input type="submit" class="form-control btn btn-primary" value="Enregistrer">
          	</div>

          </form>


  	</div>
  	

  </div> 


</div>



@endsection