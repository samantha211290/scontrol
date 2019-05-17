@extends('layouts.app')
@section('title', 'registros')
@section('content')

@foreach($registros as $registro)
<p>{{$registro->name}}</p>

@endforeach
         
            
@endsection
