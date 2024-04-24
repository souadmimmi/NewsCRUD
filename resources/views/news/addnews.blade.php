<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      </head>
      <body>
      <title>   NewsCRUD | Ajouter un  nouveau article  </title>

        
    
     
     
         
      <div class="container my-4">
    



              
              <div class="row">


                <div class="container-sm">

                  <div class="row">
                  <h1>Ajouter un  nouveau article</h1>
                    <div class="col text-end">                      <a href="/" class="btn btn-outline-info">Revenir à la liste des articles</a></div>
                  </div></div>
                </div>

                <hr>
            @if ($errors->any())

         <ul>
            @foreach ($errors->all() as $err)
            <x-alert type='danger'  >  <li>{{$err}}</li></x-alert>
            @endforeach

         </ul>

                
            @endif
   
    <form method="POST" action="{{route('store')}}">
        @csrf 
        @method('POST')
        <div class="form-group">
    <label for="titre" class="form-label">titre :</label>
    <input type="text" class="form-control" id="titre" name="titre" value="{{ old('titre') }}" >


  </div>
 
  <div class="form-group">
    <label for="contenu" class="form-label">contenu :</label>
   <div class="form-floating">
  <textarea type="text" class="form-control" id="contenu" name="contenu"  style="height: 180px;" >{{ old('contenu') }}</textarea>


    <br> 
 
  <div class="form-group">
    <label for="Classe" class="form-label">categorie :<br>      
   

       
            <select name="categorie" class="form-select">
              <option selected>choisissez une categorie</option>

                <optgroup label="Actualités">

                    <option value="politique">Politique</option>
                    <option value="economie">Économie</option>
                    <option value="sport">Sport</option>
                </optgroup>
                <optgroup label="Divertissement">
                    <option value="cinema">Cinéma</option>
                    <option value="musique">Musique</option>
                    <option value="sorties">Sorties</option>
                </optgroup>
                <optgroup label="Technologie">
                    <optgroup label="> Informatique">
                        <option value="desktop">Ordinateurs de bureau</option>
                        <option value="laptop">PC portable</option>
                        <option value="connexion">Connexion internet</option>
                    </optgroup>
                    <optgroup label="> Gadgets">
                        <option value="smartphones">Smartphones</option>
                        <option value="tablettes">Tablettes</option>
                        <option value="jeux_video">Jeux vidéo</option>
                    </optgroup>
                </optgroup>
                <optgroup label="Santé">
                    <option value="medecine">Médecine</option>
                    <option value="bien_etre">Bien-être</option>
                </optgroup>
            </select>
            
         
    </label>
    <br>
    <br>  <label for="date_debut" class="form-label">date de debut :</label>
    <input type="date" class="form-control" id="date_debut" name="date_debut" value="{{ old('date_debut') }}" >
    <br>   <label for="date_expiration" class="form-label">date d'expiration :</label>
    <input type="date" class="form-control" id="date_expiration" name="date_expiration" value="{{ old('date_expiration') }}" >
    <br> 
  </div><br>  </div>  
</div>     
  <input type="submit" class="btn btn-primary" value="ajoute un article ">  <hr>


    <br><br>
   
    <hr>
</body>
</html>