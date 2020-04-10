@extends('index')
     @section('content')

<!-- Begin Page Content -->

<div style="margin-top:2%"; class="container-fluid">
  @foreach($data as $row)
  <div class="row">     
  <div class="col-md-4"><img class="responsive"style="height:300px; width:300px" src="{{URL::asset($row->image)}}" alt="image"></div>
       <div class="col-md-6" >
         <h2 style="color:#000000" >{{$row->firstname.' '.$row->lastname}}</h2>
         <h5 style="size:4%; color:#fc0341 " >{{$row->title}}</h5>
        <h6 style="color:#000000" >{{$row->bio}}</h6> <br><p>{{$row->email}}</p>
        <a href="#">
         <i style=" color:#fc0341 " class="fab fa-facebook-f"></i>
        </a>
        <a href="#">
        <i style=" color:#fc0341 " class="fab fa-google fa-fw"></i>
        </a>
        <a href="#">
        <i style=" color:#fc0341 "  class="fab fa-linkedin-in"></i>
        </a>
        <a href="#">
        <i style=" color:#fc0341 "class="fas fa-globe"></i>
        </a><br><br> 
        <button  class="btn btn-danger btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Edit profile</button>

      </div>
  </div>
  @endforeach
</div>


<!-- Large modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div style=" padding:5% "class="container "> 
        <form action="" method="post" enctype="multipart/form-data">
        <h5 style="color:#000000" >Edit Profile</h5>  
        <div  class="row"> 
            <input  style="margin:10px 10px 10px 10px" type="text " id="fname" name="fname" placeholder="First name"class="form-control col-md-5">
            <input  style="margin:10px 10px 10px 10px" type="text " id="lname" name="lname" placeholder="last name"class="form-control col-md-5">
            <input style="margin:10px 10px 10px 10px" type="email " id="email" name="email" placeholder="Email"class="form-control col-md-4">
            <input  style="margin:10px 10px 10px 10px" type="text " id="bio" name="bio" placeholder="About"class="form-control col-md-7">
            <input  style="margin:10px 10px 10px 10px" type="file" id="image" name="image">
          </div> <input  type="submit" id="submit" name="submit" class="btn btn-danger ">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>