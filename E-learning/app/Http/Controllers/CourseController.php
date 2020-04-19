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
use App\assignment;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = Course::where('teacherid',1)->where('status',1)->get();
        return view('course',['data'=>$course,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $course = new course();
       $course->name = $request->name;
       $course->desc = $request->desc;
       $course->content = $request->content;
       $course->teacherid = 1;
       $img =$request->file('image');
       $imgname = $request->name. '.' . $img->getClientOriginalExtension() ;
       $img->move('C:/xampp/htdocs/cerd-newproject/e-learning/E-learning/img/', $imgname);
       $image= 'http://localhost/cerd-newproject/e-learning/E-learning/img/' . $imgname;
       $course->image = $image;
       $vid =$request->file('video');
       $vidname = $request->name. '.' . $vid->getClientOriginalExtension() ;
       $vid->move('C:/xampp/htdocs/cerd-newproject/e-learning/E-learning/video/', $vidname);
       $video= 'http://localhost/cerd-newproject/e-learning/E-learning/video/' . $vidname;
       $course->introclip = $video;

       $course->langid = $request->lang;
       $prdid = product::where('name',$request->product)->pluck('productid');
       $course->productid = $prdid[0];
       $course->reqid = $request->req;
       $course->certificate = $request->certificate;
       $course->levelid = $request->level;
   // return dd($prdid);
       $course->save();
    return response()->json(['success'=>'data added succesfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $cat = category::get();
        $subcat = subcategory::get();
        $product = product::get();
        $lang = language::get();
        $req = requirement::get();
        $level = level::get();
    return view('addcourse',['cat'=>$cat,'subcat'=>$subcat,'product'=>$product,'lang'=>$lang,'req'=>$req,'level'=>$level]);
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
    public function destroy(Request $request)
    {
        $id = $request['courseid'];
        $course = course::find($id);
        $course->delete($id);
     return response()->json($id);
    }

    public function subcatshow(Request $request){
        $id = $request['value'];
        $data = subcategory::where('catid',$id)->pluck('name');
        //return dd($id);
        return response()->json($data);
    }

    public function prdshow(Request $request){
        $value = $request['value'];
        $id = subcategory::where('name',$value)->pluck('subcatid');
        $data = product::where('subcatid',$id[0])->pluck('name');
        //return dd($id);
        return response()->json($data);
        }


        public function detail(){
            $id = request()->query('id');
            $course = course::where('courseid',$id)->first();
            $course->level;
            $course->level;
            $course->requirement;
            $course->teacher;
            $course->language;
            $course->chapter;
            foreach($course['chapter'] as $i){
               $i->topic;
            }
           //dd($course['chapter'][0]->topic);
            return view('coursedetail',['data'=>$course]);
        }

        public function assignment(){
          
            $assign = assignment::join('topics','assignments.topicid','=','topics.topicid')
            ->join('chapters','topics.chapid','=','chapters.chapid')
            ->join('courses','chapters.courseid','=','courses.courseid')
            ->select('assignments.assignid','assignments.name as assignment','topics.name as topic','file','duedate','courses.name as course','chapters.name as chapter')->get();
            $course = course::where('teacherid',1)->get();
          $topic = topic::all(); 
           //dd($course); 
            return view('assignment',['data'=>$assign,'topic'=>$topic,'course'=>$course]);
        }


        public function topicshow(){
            $id = request()->query('id');
            $chap = chapter::where('courseid',$id)->get();
          
            foreach($chap as $key => $id){
                $topic = topic::where('chapid',$id['chapid'])->pluck('name');
            
         //   $topic = topic::where('chapid',$chap[0])->pluck('name');
           // return dd($id);
            return response()->json($topic);}
            }

            public function storeassign(Request $request){
             $editid = $request['editid'];
                if(!$editid==null){
                    $assign = assignment::find($editid);
                    $topicid  = topic::where('name',$request->topic)->pluck('topicid');
                    $chapid  = topic::where('name',$request->topic)->pluck('chapid'); 
                    $course  = course::where('courseid',$request->course)->pluck('name'); 
                    $chap  = chapter::where('chapid',$chapid[0])->pluck('name');  
                    $assign->update([
                        'name'=>$request->name,
                        'duedata'=>$request->due,
                        'topicid'=>$topicid[0]
                    ]);
                    $file ="";
                    $f =$request->file('file');
                    if(!$f == null){
                    $fname = time(). '.' . $f->getClientOriginalExtension() ;
                    $f->move('C:/xampp/htdocs/cerd-newproject/e-learning/E-learning/', $fname);
                    $file= 'http://localhost/cerd-newproject/e-learning/E-learning/' . $fname;
                   
                    $assign->update([
                        'name'=>$request->name,
                        'file'=>$file,
                        'duedata'=>$request->due,
                        'topicid'=>$topicid[0]
                    ]);}
                    //dd($f);
                   
                    $data = [
                          'assignment'=> $request->name,
                      'assignid'=>$editid,
                      'due'=> $request->due,
                      'topic'=>$request->topic,
                      'file'=> $file,
                      'chapter'=>$chap[0],
                      'course'=>$course[0]
                    ];
                    return response()->json($data);
             }
               else
               { $assign = new assignment();
                $assign->name = $request->name;
                $assign->duedate = $request->due;
                $topicid  = topic::where('name',$request->topic)->pluck('topicid'); 
                $chapid  = topic::where('name',$request->topic)->pluck('chapid'); 
                $course  = course::where('courseid',$request->course)->pluck('name'); 
                $chap  = chapter::where('chapid',$chapid[0])->pluck('name'); 
                $assign->topicid =$topicid[0];
                $file ="";
                $f =$request->file('file');
                if(!$f == null){
                $fname = time(). '.' . $f->getClientOriginalExtension() ;
                $f->move('C:/xampp/htdocs/cerd-newproject/e-learning/E-learning/', $fname);
                $file= 'http://localhost/cerd-newproject/e-learning/E-learning/' . $fname;
                $assign->file =$file;}
                $assign->save();
                // //dd($f);
                $id = assignment::orderBy('assignid', 'DESC')->first();
                $data = [
                      'assignment'=> $request->name,
                  'assignid'=>$id['assignid'],
                  'due'=> $request->due,
                  'topic'=>$request->topic,
                  'file'=> $file,
                  'chapter'=>$chap[0],
                  'course'=>$course[0]
                ];
                return response()->json($data);}
            }

            public function delassign()
            {
                $id = request()->query('id');
                $assign = assignment::find($id);
                $assign->delete($assign);
            return response()->json(['success'=>'data deleted successfully']);
            }

     

}
