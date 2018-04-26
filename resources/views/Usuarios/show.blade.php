@extends('layout')

@section('contenido')
	<h2>Informacion acerca de {{$persona->nombre}}</h2>


	<br>


	<div class="row">
      <div class="col-lg-2">
        <a href="#" class="btn btn-danger" style =" border-width: 25px; width: 180px"> <span class="glyphicon glyphicon-remove-circle"></span>     Certificado    </a> 
      </div>

      <div class="col-lg-2">
        <a href="#" class="btn btn-primary" style =" border-width: 25px; width: 180px"> <span class="glyphicon glyphicon-remove-circle"></span> Certificado</a> 
      </div> 

       <div class="col-lg-2"  >
        <a href="" class="btn btn-info" style =" border-width: 25px; width: 180px"> <span class="glyphicon glyphicon-remove-circle"></span>       Certificado    </a> 
      </div> 

       <div class="col-lg-2">
        <a href="" class="btn btn-success" style =" border-width: 25px; width: 180px"> <span class="glyphicon glyphicon-remove-circle"></span>   Certificado   </a> 
      </div> 


    </div>
	
	<br>


	<div class="row">
      <div class="col-lg-2">
        <a href="#" class="btn btn-success" style =" border-width: 25px; width: 180px"> <span class="glyphicon glyphicon-remove-circle"></span>     Certificado    </a> 
      </div>

      <div class="col-lg-2">
        <a href="#" class="btn btn-info" style =" border-width: 25px; width: 180px"> <span class="glyphicon glyphicon-remove-circle"></span> Certificado</a> 
      </div> 

       <div class="col-lg-2"  >
        <a href="" class="btn btn-primary" style =" border-width: 25px; width: 180px"> <span class="glyphicon glyphicon-remove-circle"></span>       Certificado    </a> 
      </div> 

       <div class="col-lg-2">
        <a href="" class="btn btn-danger" style =" border-width: 25px; width: 180px"> <span class="glyphicon glyphicon-remove-circle"></span>   Certificado   </a> 
      </div> 


    </div>



@stop