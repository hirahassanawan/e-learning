@extends('index')
     @section('content')

<!-- Begin Page Content -->
<div id="course"style="display:block;margin-top:2%" class="container-fluid">
<div class="row">
@foreach($data as $row)
<div class="card " style="margin-left:50px;width: 18rem;">
  <img class="card-img-top responsive" src="{{asset($row->image)}}" alt="course image">
  <div class="card-body">
    <h4 style="color:#000000" class="card-title">{{$row->name}}</h4>
    <p class="card-text">{{$row->desc}}</p>
    <a href="#" class="btn btn-dark btn-sm">show more</a>
  </div>
</div>
@endforeach
</div>
</div>


<div id="addcourse" style="display:none;margin-top:2%" class="container-fluid">
<div class="row">
hellow world
</div>
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


  });
</script>
</body>

</html>