<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;
use Carbon\Carbon;


class NewsController extends Controller
{
    public function index()
    {    $currentDate = Carbon::now()->toDateString();

        $news = News::whereDate('date_expiration', '>=', $currentDate)
        ->latest()->paginate(12);
        return view('news',compact('news'));
    }

    public function show($id)
    {
        $news = News::find($id);

        if (is_null($news)) {
            abort(404);
        }

        return view('news.shownews', ['news' => $news]);
    }

    public function AddNews(){
        return view('news.addnews');
    }
    public function Store(Request $request){
        $data = $request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            'categorie' => 'required|exists:categories,nom', 
            'date_debut' => 'required',
            'date_expiration' => 'required|date|after:date_debut'
        ]);
    
    
        $news=News::create($data);
        return redirect(route('news'))->with('success','article ajouté');


    }

    public function edit($id){

        $news = News::findOrFail($id);
        return view('news.editnews', compact('news'));


    }


    public function update(Request $request,$id){
        $news = News::findOrFail($id);
        $data=$request->validate([
            'titre'=>'Required',
            'contenu'=>'Required',
            'categorie' => 'required|exists:categories,nom', 
            'date_debut'=>'Required',
            'date_expiration' => 'required|date|after:date_debut'
        ]);

            $news->update($data);

            return redirect(route('news'))->with('success','article modifié');

    }





    public function delete($id){

        $news = News::findOrFail($id);
        $news->delete($news);

        return redirect()->back()->with('success','article suprimé');


    }

    
}
