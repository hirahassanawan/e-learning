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
        $image = chapter::where('chapid',$chapid)->join('courses','chapters.courseid','=','courses.courseid')
        ->pluck('image'); 
            $topic = topic::where('chapid',$chapid)->pluck('topicid'); 
            $finaldata = array();
            foreach($topic as $id){
                $data = topic::where('topicid',$id)
                ->select('topics.topicid','topics.name as topic','content')->first();
                $data->video;  
                $finaldata[]=$data;           
            }
            return view('topic',['data'=>$finaldata,'chapid'=>$chapid,'image'=>$image]);
            // return dd($image);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function topicstore(Request $request)
    {    
        $topic = new topic();
        $topic->chapid =  $request->chapid;
        $topic->name = $request->name;
        $topic->content = $request->content;
        $topic->save();
        $id = topic::orderBy('topicid', 'DESC')->first();
        $data = [
            'topicid'=>$id['topicid'],
            'name'=> $request->name,
            'content'=>$request->content,
      ];
        return response()->json($data);
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
        $id = chapter::orderBy('chapid', 'DESC')->first();
        $data = [
        'chapid'=>$id['chapid'],
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
    public function deltopic()
    { $id = request()->query('id');
        $topic = topic::find($id);
        $topic->delete();
        return response()->json(['success'=>'data deleted successfully']);
        
    }

    public function delchapter()
    { $id = request()->query('id');
        $chapter = chapter::find($id);
        $chapter->delete();
        return response()->json(['success'=>'data deleted successfully']);
        
    }

    public function delvideo()
    { $id = request()->query('id');
        $video =video::find($id);
  $path =  $video['video'];
        $video->delete();
      // unlink($path);

        return response()->json(['success'=>'data deleted successfully']);
        
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
        $id = video::orderBy('videoid', 'DESC')->first();
        $data = [
            'topicid'=>$request->topicid,
            'lastvideoid'=>$request->hiddenvidid,
            'videoid'=>$id['videoid'],
            'name'=> $request->name,
            'video'=>$file,
          ];
         
        return response()->json($data);
    }
}
