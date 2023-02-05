@extends('layouts.main-layout')

@section('content')

    <div class="container">

        {{-- Link che mi riporta a nuova pagina per creazione nuovo santo: --}}
        <a href="{{('/saint/create')}}">Create new saint</a>
        <table class="table my-3">
            <thead>
                <th>Name</th>
                <th>Place of Birth</th>
                <th>Date of sanctification</th>
                <th>Number of Miracles</th>
            </thead>
    
            <tbody>
                @foreach ($saints as $saint)
                    <tr> 
                        <td>
                            {{-- link con rotta per dettagli singolo santo --}}
                            <a href="{{route('saint.show', ['id'=> $saint -> id ]) }}">{{$saint -> nome}}</a>
                        </td>
                        <td>{{$saint -> luogoNascita}}</td>
                        <td>{{$saint -> dataBenedizione}}</td>
                        <td>{{$saint -> numeroMiracoli}}</td>

                        <td>
                            {{-- link con rotta per eliminazione santo --}}
                            <a href="{{route('saint.destroy', ['id'=> $saint -> id ]) }}">Elimina</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
       
       
    
    
@endsection