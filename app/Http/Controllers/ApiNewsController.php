<?php

namespace App\Http\Controllers;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;


class ApiNewsController extends Controller
{




    public function Getnews(){
        // recuperer just les news non expirés
            $currentDate = Carbon::now()->toDateString();

        $news = News::whereDate('date_expiration', '>=', $currentDate)
        ->latest()->get();
        return response()->json($news,200);
 
    }


       // rechercher  les news par ID

    public function GetnewsById($id){
        $news=News::find($id);

        if(is_null($news)){
            return response()->json(['message'=>'introuvable'],404);

        }
        return response()->json($news,200);
   }

   public function addnews(request $request){

    // Valider les données
    $data = Validator::make($request->all(), [
        'titre' => 'required',
        'contenu' => 'required',
        'categorie' => 'required|exists:categories,nom', 
        'date_debut' => 'required',
        'date_expiration' => 'required|date|after:date_debut'
    ]);
    if ($data->fails()) {
        return response()->json(['errors' => $data->errors()], 400);

    }
    $news=News::create($data);
  
    return response()->json(['message'=>'news ajouté'],201);
}

public function updatenews(Request $request, $id)
{
    $news=News::find($id);
    if(is_null($news)){
        return response()->json(['message' => ' introuvable'],404);
    }
   // Valider les données
    $data = Validator::make($request->all(), [
        'titre' => 'required',
        'contenu' => 'required',
        'categorie' => 'required|exists:categories,nom', 
        'date_debut' => 'required',
        'date_expiration' => 'required|date|after:date_debut'
    ]);
    if ($data->fails()) {
        return response()->json(['errors' => $data->errors()], 400);

    }

    $news->update($$data);
    return response($news,200);
}
    
public function DeleteNews($id){
    $news=News::find($id);

    if(is_null($news)){
        return response()->json(['message' => ' introuvable'],404);

    }
    $news->delete();
    return response(['message' => 'news supprimé'],200);

}
}
