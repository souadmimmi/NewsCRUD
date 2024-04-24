

<!DOCTYPE html>
<html lang="en">
<head>
    

    <meta charset="UTF-8">
</head>
<body>
    @extends('layouts.layout')


    @section('title')
    NewsCRUD | {{$categoryname}}
    @endsection

    @section('content')
    <div class="container text-center">

        <div class="row">
            <div class="col s12">

            <hr>
            <div class="my-2">

                <div class="container">
                  <h2>{{$categoryname}} </h2>
        @if (session()->has('success')) <x-alert type="success">
          {{
    
         
     session('success')}}</x-alert>
        @endif  </div><br>
          
    <br><br>
             

    <div class="row">


            @foreach ($articles as $mynews)
            <x-news :mynews="$mynews" />

            @endforeach

        </div>
@endsection
</body>
</html>