<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Filmghibli;
use Illuminate\Http\Request;

class filmsGhibliController extends Controller
{
    public function allFilms()
    {
        $films = Filmghibli::get();
        return view('filmsGhibli',compact('films'));
    }

    public function displayOne($id)
    {
        $film_id = $id;
        $film = Filmghibli::find($id);
        $filmPosts = Post::get()->where('film_id', $id);
        $filmComments = Comment::get()->where('film_id', $id);
        return view("filmGhibli",compact('film','filmPosts','filmComments'));
    }

}
