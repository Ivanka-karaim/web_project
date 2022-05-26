<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Award;
use App\Models\Painting;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }
    public function awards(){
        $awards=Award::all();
        return view("awards", compact('awards'));
    }
    public function artists(){
        $artists=Artist::all();
        return view("artists", compact('artists'));
    }
    public function paintings(){
        $paintings=Painting::all();
        return view("paintings", compact('paintings'));
    }
    public function getAwardsById($id){
        $award = Award::find($id);
        return view("award", compact('award'));
    }
    public function getArtistsById($id){
        $artist = Artist::find($id);
        return view("artist", compact('artist'));
    }
    public function getPaintingsById($id){
        $painting = Painting::find($id);
        return view("painting", compact('painting'));
    }
    public function addPaint(){
        return view("addPaint",["artists"=>Artist::all()]);
    }
    public function addPaintPost(Request $request){
        $paint = new Painting();
        $paint->name=$request->name;
        $paint->photo='img/'.$request->photo.'.jpg';
        $paint->year_drawn=$request->year_drawn;
        $paint->artist_id=$request->artist;
        $paint->save();
        return view("addPaint", ["status"=>true,"artists"=>Artist::all()]);
    }

}
