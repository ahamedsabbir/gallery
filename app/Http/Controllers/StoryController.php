<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Category;
use App\Models\Story;
use IIlluminate\Support\Facades\Storage;
use Image;
use rolecheck;


class StoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
		$this->middleware('rolecheck');
    }
	public function insert_page(){
		return view('starlight/story/insert', [
			'category' => Category::all()
		]);
    }
	public function insert_function(Request $request){
		if($request->submit == "insert"){
			$request->validate(
				[
					'title' => 'required',
					'description' => 'required',
					'thumb' => 'file|mimes:jpg,bmp,png'
				],
			);
			Story::insert([
				"title" => $request->title,
				"description" => $request->description,
				"thumb" => image_insert_function($request, 'thumb'),
				"created_at" => Carbon::now()
			]);
			return redirect('dashboard/story/loop')->with('success', 'story add success');
		}else{
			return redirect('home');
		}
    }
	public function loop(){
		return view('starlight/story/loop', [
			'story' => Story::latest()->get()
		]);
    }
	public function update_page($id){
		return view('starlight/story/update', [
			'story' => Story::where('id', $id)->get()
		]);
    }
	public function update_function(Request $request, $id){
		Story::find($id)->update([
			'title' => $request->title,
			"description" => $request->description,
			'thumb' => image_update_function($request, Story::where('id', $id)->get(), 'thumb'),
		]);
		return back()->with("alert", "story update done....");
    }
	public function search_function(){
		/*$keyword = $_GET['keyword']
		return view('search', [
			"Story" = Story::where("name", "like", "%$keyword%")->get();
		]);*/
	}
	public function remove_function($id){
		image_delete_function(Story::where('id', $id)->get(), 'thumb');
		Story::find($id)->forceDelete();
		return redirect('dashboard/story/loop')->with('success', 'story delete success');
    }
}
