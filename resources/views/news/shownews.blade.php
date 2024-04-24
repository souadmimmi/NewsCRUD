<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $news->titre }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    </style>
</head>
<body>
 
    <div class="container mt-5">
        <div class="row">
            <div class="col">
    
        <a href="/" class="btn btn-danger custom-btn-width">Revenir à la liste des articles</a><hr>

        
        <div class="card">
            <div class="card-header">
                <h1>{{ $news->titre }}</h1>
                <p class="card-text"><strong>Catégorie:</strong> {{ $news->categorie }}</p>
                <p class="card-text"><strong>Date de début:</strong> {{ $news->date_debut }}</p>
            </div>
            <div class="container text-center">
                <div class="card-body">
                   
                <p class="card-text">{{ $news->contenu }}</p>
           
            </div></div>

        </div>            </div></div></div>
    </div>

</div>
