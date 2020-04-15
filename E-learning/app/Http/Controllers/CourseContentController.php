<?php

namespace App\Http\Controllers;
use App\Course;
use App\category;
use App\chapter;
use App\subcategory;
use App\product;
use App\language;
use App\requirement;
use App\level;
use App\topic;
use App\video;
use App\assignment;
use Illuminate\Http\Request;

class CourseContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $chapid = request()->query('id');
        $topic = topic::where('chapid',$chapid)
        ->join('videos','topics.topicid','=','videos.topicid')
        ->select('topics.name as topic','videos.name as videoname','content','topics.topicid','video')->get();
        return view('topic',['data'=>$topic]);
         // $topic = topic::where('chapid',$chapid)->pluck('topicid'); 
        // $data ="";
        // foreach($topic as $id){
        //      $data = topic::where('topicid',$id)
        //      ->select('topics.topicid','topics.name as topic','content')->first();
        //      $data->video;
        // }
        //return dd($data->topicid);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chapter = new chapter();
        $chapter->create($request->all());
        $data = [
        'courseid'=>$request->courseid,
        'name'=> $request->name,
        'desc'=>$request->desc,
      ];
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function storevideo(Request $request)
    {   $video = new video();
        $f = $request->file('video');
        $fname = time(). '.' . $f->getClientOriginalExtension() ;
        $f->move('C:/xampp/htdocs/cerd-newproject/e-learning/E-learning/video/', $fname);
        $file= 'http://localhost/cerd-newproject/e-learning/E-learning/video/' . $fname;
        $video->video =$file;
        $video->name = $request->name;
        $video->topicid = $request->topicid;
        $video->save();
        return response()->json(['success'=>'data added successfully']);
    }
}
