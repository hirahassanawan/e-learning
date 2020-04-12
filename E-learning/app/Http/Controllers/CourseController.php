<?php

namespace App\Http\Controllers;
use App\Course;
use App\category;
use App\subcategory;
use App\product;
use App\language;
use App\requirement;
use App\level;
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
        $course = Course::get();
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

       $img =$request->file('image');
       $imgname = $request->name. '.' . $img->getClientOriginalExtension() ;
       $img->move('C:/xampp/htdocs/cerd-newproject/E-learning/img/', $imgname);
       $image= 'http://localhost/cerd-newproject/E-learning/img/' . $imgname;
       $course->image = $image;
       $vid =$request->file('video');
       $vidname = $request->name. '.' . $vid->getClientOriginalExtension() ;
       $vid->move('C:/xampp/htdocs/cerd-newproject/E-learning/video/', $vidname);
       $video= 'http://localhost/cerd-newproject/E-learning/video/' . $vidname;
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
            return view('coursedetail');
        }

}
