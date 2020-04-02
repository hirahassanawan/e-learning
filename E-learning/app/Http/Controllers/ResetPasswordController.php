<?php

namespace App\Http\Controllers;
use App\User;
use Mail;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //$email = $request()->get('email');  
        $users=User::all();//->where('email',$email)->get();
        return response()->json($users);
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
        $email = request()->get('email');  
        $user=User::where('email',$email)->select("email")->get();
        if(!$user->isEmpty())
        {
                    $finaldata['status']="Success";
                    $finaldata['reason']="record Exist, password updated";
                    $newpass = time();
                    User::where('email',$email)->update(['password'=>$newpass]);
                    $finaldata['data']=$user; 
        Mail::raw('your new password is: '.$newpass, function($message) {
            $message->to('hinalilaram@gmail.com','hina lilaram')->subject('new password');
            $message->from('hinalilaram@gmail.com','Hina');

        });

        }
        else
        {
                 $finaldata['status']="Failure";
                 $finaldata['reason']="record doesn't exist";
                 $finaldata['data']=null;
        }
        return response()->json($finaldata);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {//

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request )
    {  // $users=User::all();//->where('email',$email)->get();
      //  return response()->json(request()->all());
        // if($user)
        // {
        //             $finaldata['status']="Success";
        //             $finaldata['reason']="email Exist";
        //             $finaldata['data']=$users;

        // }
        // else
        // {
        //          $finaldata['status']="Failure";
        //          $finaldata['reason']="email doesn't exist";
        //          $finaldata['data']=null;
        // }
        // return response()->json($finaldata);
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
}
