
@extends('index')
     @section('content')

<!-- Begin Page Content -->

<div  style="margin-top:2%"; class="container-fluid"><div id="profiledata" >

<h1 id="name" style="color:#000000" >Reviews</h1>
 <!-- Dropdown Card Example -->
 <div class="card shadow mb-4">
 
                <!-- Card Header - Dropdown -->
                @foreach($data as $row)
                <div  class="row">     
                  <div class="col-md-2"><img class="rounded-circle"style="height:150px; width:150px;margin:20px 20px 20px 20px" id="img"src="{{URL::asset($row->image)}}" alt="image"></div>
                      <div class="col-md-8" >
                        <h3 id="name" style="color:#000000;margin:20px 20px 20px 20px" >{{$row->firstname.' '.$row->lastname}}</h3>
                        <h6 style="size:4%; margin:20px 20px 20px 20px" >{{$row->review}}</h6>
                        @php $rating =$row->rating; @endphp  
                        
                        @foreach(range(1,5) as $i)
                            <span class="fa-stack" style="width:1em; color:#FF9529;  margin:2px ">
                                <i class="far fa-star fa-stack-1x"></i>

                                @if($rating >0)
                                    @if($rating >0.5)
                                        <i class="fas fa-star fa-stack-1x"></i>
                                    @else
                                        <i class="fas fa-star-half fa-stack-1x"></i>
                                    @endif
                                @endif
                                @php $rating--; @endphp
                            </span>
                        @endforeach
                         
                        <p>{{$row->created_at}}</p>
                      </div>
                  </div><hr>
                @endforeach
                 <div style="margin-left:5%"> {{$data->links()}} </div>
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