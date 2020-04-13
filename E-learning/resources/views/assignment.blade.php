@extends('index')
     @section('content')

<!-- Begin Page Content -->
<div id="course" style="display:block;margin-top:2%" class="container-fluid">
  <div class="row">
  
   <div class="card shadow col-md-12">
            <div class="card-header py-3">
              <h1 class="m-0 font-weight-bold text-primary">Assignments</h1>
              <button style="margin-left:80%" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
 Add assignment
</button>
            </div>
            <div class="card-body">
            
            <!-- Button trigger modal -->

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>File</th>
                      <th>Topic</th>
                      <th>Due</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($data as $row)
                    <tr>
                      <td>{{$row->name}}</td>
                      <td>Junior Technical Author</td>
                      <td>San Francisco</td>
                      <td>66</td>
                      <td><a href="" class="btn-danger btn-sm"><i title="delete" class="fa fa-trash-alt"></i></a>
                      <a href="" class="btn-success btn-sm"><i  title="edit" class="fa fa-edit"></i></a>
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
        <form action="" method="post">
        @csrf <div class="row">
           <input  style="margin:10px 10px 10px 10px" type="text " id="name" name="name" value="Name"class="form-control col-md-5"> 
           <input  style="margin:10px 10px 10px 10px" type="text " id="content" name="content" value="content" class="form-control col-md-5">
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
         </div> <button type="submit" class=" btn-primary btn-sm">Add</button>
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