@extends('layouts.app')

@section('content')


<div class="contrainer">
 <div class="row">
	<div class="col-md12">

@if(session()->has('success') )

    <div class="alert-success">
       
    {{ session()->get('success') }}
  </div>
@endif
		<h1>     La liste des patients </h1>

    <div class="pull-right">
    	
    	<a href="{{ url('patients/create') }}" class="btn btn-success">Nouveau Patient</a>

    </div>


		<table class="table">
          <head>
		    <tr>
			      <th>Nom_pati</th>
			       <th>Prenom_pati</th>
			        <th>num_de_secu_soci</th>
			        <th>date_naissance_pati</th>
                     <th>num_pati</th>
                     <th>adresse_pati</th>
                     <th>email_pati</th>
                     <th>mal_chroniques</th>
                     <th>allergies</th>
                     <th>commentaires</th>
                     <th>imageries</th>
                     <th>actions</th>

		    </tr>

          </head>
           <body>

        @foreach($patients as $patient)


        	<tr>
       		
             <td>{{ $patient->Nom_pati }}</td>
             <td>{{ $patient->Prenom_pati }}</td>
             <td>{{ $patient->num_de_secu_soci }}</td>
             <td>{{ $patient->date_naissance_pati }}</td>
             <td>{{ $patient->num_pati }}</td>
             <td>{{ $patient->adresse_pati }}</td>
             <td>{{ $patient->email_pati }}</td>
             <td>{{ $patient->mal_chroniques }}</td>
             <td>{{ $patient->allergies }}</td>
             <td>{{ $patient->commentaires }}</td>
             <td>{{ $patient->imageries }}</td>
             <td>
             

               <form action="{{ url('patients/'.$patient->id) }}" method="post">
               	
                    {{ csrf_field() }}                 
                     {{ method_field('DELETE') }}

                     	<a href="" class="btn btn-primary">Details</a>
      <a href="{{ url('patients/'.$patient->id.'/edit') }}" class="btn btn-default">Editer</a>

                     <button type="submit" class="btn btn-danger">Supprimer</button> 

               </form>     
             	


             </td>
             






         	</tr>
        @endforeach

           </body>

          </table>


	</div>
 </div>
</div>







@endsection