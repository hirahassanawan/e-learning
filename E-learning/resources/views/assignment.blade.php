@extends('index')
     @section('content')

<!-- Begin Page Content -->
<div style="display:block;margin-top:2%" class="container-fluid">
  <div class="row">
  
   <div class="card shadow col-md-13">
            <div class="card-header py-3">
              <h1 class="m-0 font-weight-bold text-primary">Assignments</h1>
              <button style="margin-left:80%" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
 Add assignment
</button>
            </div>
            <div class="card-body">
            
            <!-- Button trigger modal -->

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>File</th>
                      <th>Name</th>
                      <th>Course</th>
                      <th>Chapter</th>
                      <th>Topic</th>
                      <th>Duedate</th>
                      
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($data as $row)
                    <tr>
                    <td><a href="{{$row->file}}" class="btn btn-warning" ><i title="file"style="color:black" class="fa fa-file-alt"></i></a></td>
                      <td>{{$row->assignment}}</td>
                      <td>{{$row->course}}</td>
                      <td>{{$row->chapter}}</td>
                      <td>{{$row->topic}}</td>
                      <td>{{$row->duedate}}</td>
                     
                      <td><span id="del" name="{{$row->assignid}}"><button class=" btn-danger btn-sm" >
                      <i title="delete"style="color:white" class="fa fa-trash-alt"></i></button></span>
                      <span id="edit" name="{{$row->assignid}}"><button class=" btn-success btn-sm" >
                      <i title="edit"style="color:white" class="fa fa-edit"></i></button></span>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  </table>
              </div>
            </div>
          </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">New assignment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data"action="{{ route('storeassign') }}" id="assignform" method="post">
        @csrf <div class="row">
           <input  style="margin:10px 10px 10px 10px" type="text " id="name" name="name" placeholder="Name"class="form-control col-md-5"> 
           <input  style="margin:10px 10px 10px 10px" type="date " id="due" name="due" placeholder="duedate" class="form-control col-md-5">
          <select style="margin:10px 10px 10px 10px" name="course" id="course">
          <option value="0" disabled="true" selected="true" class="form-control col-md-5">Select course</option>
            @foreach ($course as $row)
            <option id="" name="" value="{{$row->courseid}}">
                {{$row->name}}
            </option>
            @endforeach
            </option>
           </select>
          <select style="margin:10px 10px 10px 10px" class="form-control col-md-5" name="topic" id="topic">
          <option value="">select topic</option>
          </select>  
           <input  style="margin:10px 10px 10px 10px" type="file" id="file" name="file">
         </div> <button type="submit" id="go"class=" btn-primary btn-sm">Add</button>
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

 

  $('#course').change(function(){  $('#topic').empty();
  if($(this).val() != '')
  {
   var id= $(this).attr("id");
   var value = $(this).val();
   var _token = $('input[name="_token"]').val();
  // alert(value);
   $.ajax({
    url:"{{ route('topicshow') }}",
    method:"get",
    data:{ id:value},
    success:function(data)
    {
    // alert(data);   

 for (var i = 0; i < data.length; i++) {
    $("#topic").append('<option >'+data[i]+'</option>');
           }

    }

   });
  }
 });


 $('#go').click(function(){
  $('#assignform').on('submit', function(event){
  event.preventDefault(); 
   $.ajax({
    url:"{{ route('storeassign') }}",
    method:"POST",
    data: new FormData(this),
    contentType: false,
    cache:false,
    processData: false,
    dataType:"json",
    success:function(data)
    {alert(data['success']);
    
    }
   });});}); 
 
//delete assignment
   $('span').click( function(){
  var id = $(this).attr('name');
  $(this).parent().parent().remove(); 
  
   $.ajax({
    url:"{{ route('delassign') }}",
    method:"get",
    data:{id:id},
    success:function(data)
    {alert(data['success']);
    }
   });
   }); 
 

  });
</script>
</body>

</html>