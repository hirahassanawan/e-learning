<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Teacher;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $profile = Teacher::get();

    return view('teacher',['data'=>$profile]);
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
        $teacher = new Teacher();
        $teacher->title = $request['title'];
        $teacher->firstname = $request['fname'];
        $teacher->lastname = $request['lname'];
        $teacher->email = $request['email'];
        $teacher->bio = $request['bio'];
        $img = $request->file('image');
        $teacher->save();
        $lastid = teacher::last()->select('teacherid')->get();
        $imgname = $lastid. '.' . $img->getClientOriginalExtension() ;
        $imgpath = public_path('/img/');
        $img->move($imgpath, $imgname);
        $image= 'http://localhost/cerd-newproject/E-learning/resources/img/' . $imgname;
        $teacher->update(['image' => $image]);
        return response()->json(['success'=>'data added succesfully']); 
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
    public function update(Request $request)
    {   $id = $request['id'];
        $teacher = teacher::find($id);
        $title = $request['title'];
        $fname = $request['fname'];
        $lname = $request['lname'];
        $email = $request['email'];
        $bio = $request['bio'];
        $img = $request->file('image');
        if($img == null){
            $teacher->update([ 
                'firstname'=>$fname,
                'lastname'=>$lname,
                'email'=>$email,
                'bio'=>$bio,
                'title'=>$title]);
                return response()->json($teacher);  }
        else{
        $imgname =$id. '.' . $img->getClientOriginalExtension() ;
        $img->move('C:/xampp/htdocs/cerd-newproject/E-learning/img/', $imgname);
        $image= 'http://localhost/cerd-newproject/E-learning/img/' . $imgname;
      
        $teacher->update([ 
        'firstname'=>$fname,
        'lastname'=>$lname,
        'email'=>$email,
        'bio'=>$bio,
        'title'=>$title,
        'image'=>$image]);
        // return dd($teacher);
    return response()->json($teacher); }
    
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
