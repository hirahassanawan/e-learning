@extends('index')
     @section('content')

<!-- Begin Page Content -->
<div id="course"style="display:block;margin-top:2%" class="container-fluid">
    <div class="row">
        <div class="card box-shadow col-md-12 " style="margin-left:10px;width: 18rem;">
            <div class="card-body">
                <form id="addform" action="{{ route('newcourse') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h2 style="color:#0000FF" >Add course</h2>  
                <div  class="row">
                    <h5 style="margin:10px 10px 10px 10px;color:#000000" >Course name</h5>  
                    <input  style="margin:10px 10px 10px 10px" type="text " id="name" name="name" value=""class="form-control col-md-3">
                    <h5 style="margin:10px 10px 10px 10px;color:#000000" >Description</h5>  
                    <input  style="margin:10px 10px 10px 10px" type="text " id="desc" name="desc" value=""class="form-control col-md-5">
                    <h5 style="margin:10px 10px 10px 10px;color:#000000" >Content</h5>     
                    <input style="margin:10px 10px 10px 10px" type="email " id="content" name="content" value=""class="form-control col-md-10">
                    <select name="certificate" id="certificate" class=" col-md-5" style="margin:10px 10px 10px 10px">
                        <option value="0" disabled="true" selected="true">Certificate</option>
                        <option value="1">yes</option>
                        <option value="0">No</option>
                    </select>
                    <select name="lang" id="lang" class=" col-md-5" style="margin:10px 10px 10px 10px">
                        <option value="0" disabled="true" selected="true">Language</option>
                        @foreach ($lang as $row)
                        <option id="" name="" value="{{$row->langid}}">
                            {{$row->lang}}
                        </option>
                        @endforeach
                        </option>
                    </select>
                    <select name="req" id="req" class=" col-md-5" style="margin:10px 10px 10px 10px">
                        <option value="0" disabled="true" selected="true">Requirement</option>
                        @foreach ($req as $row)
                        <option id="" name="" value="{{$row->reqid}}">
                            {{$row->req}}
                        </option>
                        @endforeach
                        </option>
                    </select>
                    <select name="level" id="level" class=" col-md-5" style="margin:10px 10px 10px 10px">
                        <option value="0" disabled="true" selected="true">Level</option>
                        @foreach ($level as $row)
                        <option id="" name="" value="{{$row->levelid}}">
                            {{$row->level}}
                        </option>
                        @endforeach
                        </option>
                    </select>
                    
                   
                    <select name="cat" id="cat" class="categorylist col-md-5" style="margin:10px 10px 10px 10px">
                        <option value="0" disabled="true" selected="true">Select Category</option>
                        @foreach ($cat as $row)
                        <option id="" name="" value="{{$row->catid}}">
                            {{$row->type}}
                        </option>
                        @endforeach
                        </option>
                    </select>
                    <select name="subcat" id="subcat" class="subcategorylist col-md-5" style="margin:10px 10px 10px 10px">
                        <option value="0" disabled="true" selected="true">Select subcategory</option>
                       
                        </option>
                    </select>
                    <select name="product" id="product" class=" col-md-6" style="margin:10px 10px 10px 10px">
                        <option value="0" disabled="true" selected="true">Select product</option>
                        </option>
                    </select>{{ csrf_field() }}
                    
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

    $('#add').click(function(){
  $('#addform').on('submit', function(event){
  event.preventDefault(); 
   $.ajax({
    url:"{{ route('newcourse') }}",
    method:"POST",
    data: new FormData(this),
    contentType: false,
    cache:false,
    processData: false,
    dataType:"json",
    success:function(data)
    { alert(data['success']);
     
     
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


   $('#cat').change(function(){ $('#subcat').empty();  
  if($(this).val() != '')
  {
   var select = $(this).attr("id");
   var value = $(this).val();
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('subcatshow') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token,},
    success:function(data)
    {
    // alert(data.length);
    

 for (var i = 0; i < data.length; i++) {
    $("#subcat").append('<option >'+data[i]+'</option>');
           }

    }

   });
  }
 });


 
 $('#subcat').change(function(){  $('#product').empty();
  if($(this).val() != '')
  {
   var select = $(this).attr("id");
   var value = $(this).val();
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('prdshow') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token,},
    success:function(data)
    {
    // alert(data.length);
    

 for (var i = 0; i < data.length; i++) {
    $("#product").append('<option >'+data[i]+'</option>');
           }

    }

   });
  }
 });

 

//    $('#cat').on('change', function () {
//       var cat_id = $('#cat').val();
//     //  alert(cat_id);
//       //alert(pro_id);
//       var div = $(this).parent();

//       var op = " ";
//   $.ajax({
//     url:"{{ route('subcatshow') }}",
//     method:"POST",
//     data: {id:cat_id},
//     contentType: false,
//     cache:false,
//     processData: false,
//     dataType:"json",
//     success:function(data)
//     { alert(data);}
//       });
//     });
    
  });

</script>
</body>

</html>