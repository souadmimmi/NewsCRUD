@props(['mynews'])
@php 
use Illuminate\Support\Str;
@endphp
<div class="col-sm-3 mb-4">
    <div class="card" style="width: 60rem; height: auto;">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title ">{{ Str::limit($mynews->titre, 40) }}</h5>
            <p class="card-text"><b>Date :{{ $mynews->date_debut }}</b></p>
            <p class="card-text"><b>Categorie :{{ $mynews->categorie }}</b></p>
            <p class="card-text">{{ Str::limit($mynews->contenu, 120) }}</p>
            <br>
            <div class="mt-auto">
                <a href="{{ route('show', $mynews->id) }}" class="btn btn-primary btn-sm my-1">Afficher plus</a>
                <a href="{{ route('edit', $mynews->id) }}" class="btn btn-success btn-sm my-1">Éditer</a>
                <form method="post" action="{{ route('delete', $mynews->id) }}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Supprimer" class="btn btn-danger btn-sm my-1">
                </form>
            </div>
        </div>
    </div>
</div>

