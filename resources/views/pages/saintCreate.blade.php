@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <form method="POST" action="{{route('saint.store')}}">
            @csrf
            <div class="form-group">
              <label for="nome">Enter name</label>
              <input type="text" class="form-control" placeholder="Enter name" name="nome">
            </div>
            <div class="form-group">
              <label for="luogoNascita">Enter your place of birth</label>
              <input type="text" class="form-control" placeholder="Enter your place of birth" name="luogoNascita">
            </div>
            <div class="form-group">
                <label for="dataBenedizione">Enter your date of sanctification</label>
                <input type="date" class="form-control" placeholder="Enter your date of sanctification" name="dataBenedizione">
            </div>
            <div class="form-group">
                <label for="numeroMiracoli">Enter your number of miracles</label>
                <input type="number" min="5" max="20" class="form-control" placeholder="Enter your place of birth" name="numeroMiracoli">
            </div>

            <button type="submit" class="btn btn-danger my-3">Create new saint</button>
        </form>
    </div>
@endsection