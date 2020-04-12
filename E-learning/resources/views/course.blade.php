@extends('index')
     @section('content')

<!-- Begin Page Content -->
<div id="course" style="display:block;margin-top:2%" class="container-fluid">
<div class="row">
@foreach($data as $row)
<span type='hidden'  id="span" value="{{$row->courseid}}" >
<div class="card " style="margin-left:50px;width: 18rem;">
  <img class="card-img-top responsive" src="{{asset($row->image)}}" alt="course image">
  <div class="card-body">
    <h4 style="color:#000000" class="card-title">{{$row->name}}</h4>
    <p class="card-text">{{$row->desc}}</p>
    <a href="{{route('detail',['id'=>$row->courseid])}}" class="btn btn-dark btn-sm">show more</a>
    <button type="submit" id='{{$row->courseid}}' class="btn btn-danger"><i class="fa fa-trash-alt" ></i></button>
  </div>
</div></span>
@endforeach
</div>
</div>{{ csrf_field() }}




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

  $('button').click(function(event){
    event.preventDefault(); 
    var select = $(this).attr("id");
   var value = $(this).val();
   var courseid = $(this).attr('id'); 
    alert("are you sure you want to delete this course?");
    $(this).parent().parent().remove();
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('delete') }}",
    method:"POST",
    data:{courseid:courseid, _token:_token,},
    success:function(data)
    { // alert(data);
     //$('span').val(data);.remove();
     
     //$(this).parent().remove();
    
     
    }
   });});

  });
</script>
</body>

</html>