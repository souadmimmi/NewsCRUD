<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    @extends('layouts.layout')


    @section('title')
     NewsCRUD
    @endsection

    @section('content')
    <div class="container text-center">

        <div class="row">
            <div class="col s12">

            <hr>
            <div class="my-2">

                <div class="container">
    
        @if (session()->has('success')) <x-alert type="success">
          {{
    
         
     session('success')}}</x-alert>
        @endif  </div><br>
          
            <a href="/AddNews" class="btn btn-outline-dark">ajouter un article </a>  <hr>
    <br><br>
             

    <div class="row">


            @foreach ($news as $mynews)
            <x-news :mynews="$mynews" />

            @endforeach
            {{ $news->links() }}


        </div>
@endsection
</body>
</html>