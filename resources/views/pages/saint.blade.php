@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <h2 class="mb-4">Saint {{$saint -> nome}}</h2>
        <p>Saint {{$saint -> nome}} was born in {{$saint -> luogoNascita}} and was sanctified in {{$saint -> 
           dataBenedizione}}. The number of the miracles is {{$saint -> numeroMiracoli}}.
        </p>
    </div>
@endsection