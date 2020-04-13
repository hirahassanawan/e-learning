
@extends('index')
     @section('content')

<!-- Begin Page Content -->
<input type="hidden" id="data" value='{{$data}}'>
<div  style="margin-top:2%"; class="container-fluid"><div id="profiledata" >
  @foreach($data as $row)
  <div  class="row">     
  <div class="col-md-4"><img class="responsive"style="height:300px; width:300px" id="img"src="{{URL::asset($row->image)}}" alt="image"></div>
       <div class="col-md-6" >
         <h2 id="name" style="color:#000000" >{{$row->firstname.' '.$row->lastname}}</h2>
         <h5 style="size:4%; color:#0000FF " >{{$row->title}}</h5>
        <h6 id='bio'style="color:#000000" >{{$row->bio}}</h6> <br><p id='mail' >{{$row->email}}</p>
        <a href="#">
         <i style=" color:#000000 " class="fab fa-facebook-f"></i>
        </a>
        <a href="#">
        <i style=" color:#000000 " class="fab fa-google fa-fw"></i>
        </a>
        <a href="#">
        <i style=" color:#000000 "  class="fab fa-linkedin-in"></i>
        </a>
        <a href="#">
        <i style=" color:#000000 "class="fas fa-globe"></i>
        </a><br><br> 
        <button  class="btn btn-dark btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Edit profile</button>

      </div>
  </div>
  @endforeach </div>
</div>

<!-- Large modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div style=" padding:5% "class="container "> 
        <form id="editform" action="{{ route('update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <h2 style="color:#0000FF" >Edit Profile</h2>  
        <div  class="row"> 
        @foreach($data as $row)
        <input type="hidden" name='id' value="{{$row->teacherid}}">
            <h5 style="margin:10px 10px 10px 10px;color:#000000" >First name</h5>  
            <input  style="margin:10px 10px 10px 10px" type="text " id="fname" name="fname" value="{{$row->firstname}}"class="form-control col-md-3">
            <h5 style="margin:10px 10px 10px 10px;color:#000000" >Last name</h5>  
            <input  style="margin:10px 10px 10px 10px" type="text " id="lname" name="lname" value="{{$row->lastname}}"class="form-control col-md-4">
            <h5 style="margin:10px 10px 10px 10px;color:#000000" >Email</h5>     
            <input style="margin:10px 10px 10px 10px" type="email " id="email" name="email" value="{{$row->email}}"class="form-control col-md-5">
            <h5 style="margin:10px 10px 10px 10px;color:#000000" >Title</h5>     
            <input style="margin:10px 10px 10px 10px" type="text " id="title" name="title" value="{{$row->title}}"class="form-control col-md-4">
            <h5 style="margin:10px 10px 10px 10px;color:#000000" >About</h5>     
            <input  style="margin:10px 10px 10px 10px" type="text " id="bio" name="bio" value="{{$row->bio}}"class="form-control col-md-10">
            <h5 style="margin:10px 10px 10px 10px;color:#000000" >Image</h5>    
            <input  style="margin:10px 10px 10px 10px" type="file" id="image" name="image">
          </div> <input  style="margin:10px 10px 10px 10px" type="submit" id="edit" name="edit" class="btn btn-primary ">
        @endforeach
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

  <script>
$(document).ready(function(){


  $('#edit').click(function(){
  $('#editform').on('submit', function(event){
  event.preventDefault(); 
   $.ajax({
    url:"{{ route('update') }}",
    method:"POST",
    data: new FormData(this),
    contentType: false,
    cache:false,
    processData: false,
    dataType:"json",
    success:function(data)
    { alert('data added successfully');
      $("#name").text(data.firstname+' '+data.lastname);
      $("#bio").text(data.bio);
      $("#mail").text(data.email); 
      var img = '/cerd-newproject/E-Learning/img/'+data.teacherid+'.jpg';
      $("#img").attr('src',img);
    //$('#fname').trigger('reset');
     
    }
   });});});
    
  });
</script>
</body>

</html>