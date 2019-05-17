@extends('layouts.app')
@section('title', 'Cuenta')
@section('content')
 <form class="form-group" method="POST" action="/usuario" >
  @csrf
   <div class="form-group">
        <label for="">Nombre</label>
        <input name='name' type="text" class="form-control">
</div>
            <button type="submit" class="btn btn-primary">Guardar</button>   
     
 </form>
 
            
@endsection
