@extends('layouts.main-layout');

@section('content')

    <div class="container">
        <table class="table">
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
                            <a href="/saint/{{$saint->id}}">{{$saint -> nome}}</a>
                        </td>
                        <td>{{$saint -> luogoNascita}}</td>
                        <td>{{$saint -> dataBenedizione}}</td>
                        <td>{{$saint -> numeroMiracoli}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
       
       
    
    
@endsection