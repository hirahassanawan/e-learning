@extends('index')
     @section('content')

<!-- Begin Page Content -->
<div id="course"style="display:block;margin-top:2%" class="container-fluid">
    <div class="row">
        <div class="card col-md-12 " style="margin-left:10px;width: 18rem;">
            <div class="card-body">
                <form id="editform" action="{{ route('update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h2 style="color:#0000FF" >Add course</h2>  
                <div  class="row">
                    <h5 style="margin:10px 10px 10px 10px;color:#000000" >Course name</h5>  
                    <input  style="margin:10px 10px 10px 10px" type="text " id="name" name="name" value=""class="form-control col-md-3">
                    <h5 style="margin:10px 10px 10px 10px;color:#000000" >Description</h5>  
                    <input  style="margin:10px 10px 10px 10px" type="text " id="desc" name="desc" value=""class="form-control col-md-5">
                    <h5 style="margin:10px 10px 10px 10px;color:#000000" >Content</h5>     
                    <input style="margin:10px 10px 10px 10px" type="email " id="content" name="content" value=""class="form-control col-md-10">
                    <h5 style="margin:10px 10px 10px 10px;color:#000000" >Certificate</h5>     
                    <input style="margin:10px 10px 10px 10px" type="text " id="certificate" name="certificate" value=""class="form-control col-md-4">
                    <h5 style="margin:10px 10px 10px 10px;color:#000000" >Language</h5>     
                    <input style="margin:10px 10px 10px 10px" type="text " id="lang" name="lang" value=""class="form-control col-md-4">
                    <h5 style="margin:10px 10px 10px 10px;color:#000000" >Requirements</h5>     
                    <input style="margin:10px 10px 10px 10px" type="text " id="req" name="req" value=""class="form-control col-md-5">
                    <h5 style="margin:10px 10px 10px 10px;color:#000000" >Level</h5>     
                    <input style="margin:10px 10px 10px 10px" type="text " id="level" name="level" value=""class="form-control col-md-4">
                    <h5 style="margin:10px 10px 10px 10px;color:#000000" >Video</h5>     
                    <input  style="margin:10px 10px 10px 10px" type="file" id="video" name="video">
                    <h5 style="margin:10px 10px 10px 10px;color:#000000" >Image</h5>    
                    <input  style="margin:10px 10px 10px 10px" type="file" id="image" name="image">
                </div> <input  style="margin:10px 10px 10px 10px" type="submit" id="add" name="add" class="btn btn-dark ">
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
     
     
     var html = '';
     if(data.errors)
     {
      html = '<div class="alert alert-danger">';
      for(var count = 0; count < data.errors.length; count++)
      {
       html += '<p>' + data.errors[count] + '</p>';
      }
      html += '</div>';
     }
     if(data.success)
     {
      html = '<div class="alert alert-success">' + data.success + '</div>';
      $('#sample_form')[0].reset();
      $('#user_table').DataTable().ajax.reload();
     }
     $('#form_result').html(html);
    }
   });});});
    
  });

</script>
</body>

</html>