@extends('index')
     @section('content')

<!-- Begin Page Content -->
<div id="course"style="display:block;margin-top:2%" class="container-fluid">
    <div class="row">
        <div class="card box-shadow col-md-12 " style="background-image: url('http://www.consultorio20.com.br/wp-content/uploads/2016/02/xWhiteGeometricbackground-01-1.png.pagespeed.ic.bg8cAakHIo.webp');background-size: cover;margin-left:10px;width: 18rem;">
            <div class="card-body">
                <form id="addform" action="{{ route('newcourse') }}" method="post" enctype="multipart/form-data">
                @csrf
                <img style="position:absolute;margin-left:45%; height:90%;width:50% "src="{{asset('/img/elearn.jpg')}}" alt="...">
                <h1 style="margin-left:10px;color:#000000" class="font-weight-bold" >Add course</h1>  
                <div  class="">
                    <h5 class="font-weight-bold" style="margin:10px 10px 10px 10px;color:#000000" >Course name</h5>  
                    <input  style="margin:10px 10px 10px 10px" type="text " id="name" name="name" value=""class="form-control col-md-5">
                    <h5 class="font-weight-bold" style="margin:10px 10px 10px 10px;color:#000000" >Description</h5>  
                    <input  style="margin:10px 10px 10px 10px" type="text " id="desc" name="desc" value=""class="form-control col-md-5">
                    <select name="certificate" id="certificate" class=" col-md-5" style="margin:10px 10px 10px 10px">
                        <option value="0" disabled="true" selected="true">Certificate</option>
                        <option value="1">yes</option>
                        <option value="0">No</option>
                    </select> <br>
                    <select name="lang" id="lang" class=" col-md-5" style="margin:10px 10px 10px 10px">
                        <option value="0" disabled="true" selected="true">Language</option>
                        @foreach ($lang as $row)
                        <option id="" name="" value="{{$row->langid}}">
                            {{$row->lang}}
                        </option>
                        @endforeach
                        </option>
                        <option value="other" class="form-control col-md-5">other</option>
                    </select> 
                    <input style="display:none;margin:10px 10px 10px 10px" placeholder="New language" class="form-control col-md-5"  type="text" id="newlang" name="newlang" >
                   <br>
                    <select name="req" id="req" class=" col-md-5" style="margin:10px 10px 10px 10px">
                        <option value="0" disabled="true" selected="true">Requirement</option>
                        @foreach ($req as $row)
                        <option id="" name="" value="{{$row->reqid}}">
                            {{$row->req}}
                        </option>
                        @endforeach
                        </option>
                        <option value="other" class="form-control col-md-5">other</option>
                    </select>
                    <input style="display:none;margin:10px 10px 10px 10px" placeholder="New Requirement" class="form-control col-md-5" type="text" id="newreq" name="newreq" >
                   <br>
                    <select name="level" id="level" class=" col-md-5" style="margin:10px 10px 10px 10px">
                        <option value="0" disabled="true" selected="true">Level</option>
                        @foreach ($level as $row)
                        <option id="" name="" value="{{$row->levelid}}">
                            {{$row->level}}
                        </option>
                        @endforeach
                        </option>
                    </select>
                    
                   <br>
                    <select name="cat" id="cat" class="categorylist col-md-5" style="margin:10px 10px 10px 10px">
                        <option value="0" disabled="true" selected="true">Select Category</option>
                        @foreach ($cat as $row)
                        <option id="" name="" value="{{$row->catid}}">
                            {{$row->type}}
                        </option>
                        @endforeach
                        <option value="other" class="form-control col-md-5">other</option>
                    </select> <br>
                    <select name="subcat" id="subcat" class="subcategorylist col-md-5" style="margin:10px 10px 10px 10px">
                        <option value="0" disabled="true" selected="true">Select subcategory</option>
                       
                        </option>
                        <option value="other" class="form-control col-md-5">other</option>
                    </select> <br>
                    <select name="product" id="product" class=" col-md-5" style="margin:10px 10px 10px 10px">
                        <option value="0" disabled="true" selected="true">Select product</option>
                        </option>
                        <option value="other" class="form-control col-md-5">other</option>
                    </select>
                    
                    <input style="display:none; margin:10px 10px 10px 10px" placeholder=" New category" class="form-control col-md-5"  type="text" id="newcat" name="newcat" >
                    <input style="display:none; margin:10px 10px 10px 10px" placeholder=" New subcategory" class="form-control col-md-5"  type="text" id="newsubcat" name="newsubcat" >
                    <input style="display:none; margin:10px 10px 10px 10px" placeholder=" New product"  class="form-control col-md-5"  type="text" id="newprd" name="newprd" >
                    
                    <h5 class="font-weight-bold" style="margin:10px 10px 10px 10px;color:#000000" >Content</h5>     

                    <textarea style="margin:10px 10px 10px 10px" type="email " id="content" name="content" value=""class="form-control col-md-5"></textarea>
                    <h5 class="font-weight-bold" style="margin:10px 10px 10px 10px;color:#000000" >Intro Video</h5>     
                    <input  style="margin:10px 10px 10px 10px" type="file" id="video" name="video"> <br>
                    <h5 class="font-weight-bold" style="margin:10px 10px 10px 10px;color:#000000" >Image</h5>    
                    <input  style="margin:10px 10px 10px 10px" type="file" id="image" name="image">
                </div> <input  style="margin:50px 10px 10px 100px; width:30%" type="submit" id="add" name="add" class="btn btn-primary ">
                </form>
            </div>{{ csrf_field() }}
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
    if($(this).val() == 'other') 
    {  $('#newcat').show();
        $("#newsubcat").show();
        $("#newprd").show();
    }
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

$('#lang').change( function(){
    var val = $(this).val();
    if( val == "other")
    {//alert(other);
     $('#newlang').show();
    }
}); 

$('#req').change( function(){
    var val = $(this).val();
    if( val == "other")
    {//alert(other);
     $('#newreq').show();
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