
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title >SB Admin 2 - Dashboard</title>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index">
        <div class="sidebar-brand-icon rotate-n-15">
         
        </div>
        <div class="sidebar-brand-text mx-3">Teacher </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item ">
        <a class="nav-link" href="index">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <!-- <hr class="sidebar-divider"> -->

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Interface
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Course tools</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="course">Course list</a>
            <a class="collapse-item" href="addcourse">Add courses</a>
            <a class="collapse-item" href="assignment">Assignments</a>
          </div>
        </div>  
      </li>

     

      <!-- Nav Item - Utilities Collapse Menu -->
     

      <!-- Divider -->
      <!-- <hr class="sidebar-divider"> -->

      <!-- Heading -->
      <!-- <div class="sidebar-heading">
        Addons
      </div> -->

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login">Login</a>
            <a class="collapse-item" href="register">Register</a>
            <a class="collapse-item" href="forgot-password">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="profile">Profile</a>
            <a class="collapse-item" href="register1">Blank Page</a>
          </div>
        </div>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="review">
          <i class="fas fa-comment"></i>
          <span>Reviews</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile">
          <i class="fas fa-user"></i>
          <span>Profile</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="course">
          <i class="fas fa-list-alt"></i>
          <span>Course list</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content"  style="padding-bottom:5%;background-image: url('{{$image[0]}}');background-size: cover;">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <!-- <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt=""> -->
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <!-- <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> -->
              </a> 
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
       
      



        <!-- Begin Page Content -->
        <div class="container-fluid">
    
           <h1 style="color:#ffffff;margin-left:5%">Topics</h1>
           <button  style="float:left;margin-left:70%"type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
             Add Topic
            </button>
           <!-- Collapsable Card Example -->
 
     <div id="card" style="margin:5% 5% 5% 5%"class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        @foreach($data as $row) 
        <a href="#collapse{{$row->topicid}}" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
          <h6  class="m-0 font-weight-bold text-primary">{{$row->topic}}</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse" id="collapse{{$row->topicid}}">
          <div id="{{$row->topicid}}" class="card-body">
                {{$row->content}} <br><br>
               
               <button  id="{{$row->topicid}}"  data-toggle="modal" data-target=".bd-example-modal-sm" class="videobtn btn-primary btn-sm" >Add video</button><br><br>
                @foreach($row->video as $vid)
                <div class="video{{$row->topicid}}">
                  <a id="videolink"  href="#exampleModalCenter" data-toggle="modal" data-target="#exampleModalCenter{{$vid->videoid}}" >
                    <i  style="margin:1% 1% 1% 1%" class="fas fa-play-circle" ></i>{{$vid->name}}</a>         
         <br>
   <!-- video Modal -->
               <div class="modal fade " id="exampleModalCenter{{$vid->videoid}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div  class="modal-content">
                      <video id="videotag"  width="600" controls>
                      <source src="{{$vid->video}}" type="video/mp4"></source>
                      </video>              
                     </div>
                  </div>
                </div> </div>
          @endforeach
          </div>
      </div> @endforeach
    </div>



 <!-- video add modal -->

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <div style="padding:20%" class="card-body">
    <h3 style="color:#000000">Add video</h3>
        <form enctype="multipart/form-data"action="{{route('storevideo')}}" id="videoform" method="post">
        @csrf <div class="row">
        <input type="hidden" name="topicid" id="hiddenid">
           <input  style="margin:10px 10px 10px 10px" type="text " id="name" name="name" placeholder="Name"class="form-control col-md-5"> 
           <input style="margin:10px 10px 10px 10px" type="file" id="video" name="video">
         </div> <button type="submit" id="videogo"class=" btn-primary btn-sm">Add</button>
        </form>
    </div>
    </div>
  </div>
</div>




<!-- Topic add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <h3 style="color:#000000">Add Topic</h3>
        <form enctype="multipart/form-data" action="{{route('topicstore')}}" id="topicform" method="post">
        @csrf <div class="row">
        <input type="hidden" name="chapid" id="hiddenchapid" value='{{$chapid}}'>
           <input  style="margin:10px 10px 10px 10px" type="text " id="name" name="name" placeholder="Name"class="form-control col-md-5"> 
           <input  style="margin:10px 10px 10px 10px" type="text " id="content" name="content" placeholder="Content" class="form-control col-md-5">
         </div> <button type="submit"  id="topicgo"class=" btn-primary btn-sm">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>




      </div>
        <!-- /.container-fluid -->
        </div>
      <!-- End of Main Content -->

     

    
    <!-- End of Content Wrapper -->

  
  <!-- End of Page Wrapper -->
  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>


<script>
$(document).ready(function(){
   $('.collapse').attr('class','collapse hide');
   
     $('.videobtn').click(function(){
        var topicid = $(this).attr('id');
       // alert(topicid);
     $('#hiddenid').val(topicid); //alert(topicid);
    // $('#hiddenvidid').val(videoid); //alert(videoid);
     });


    //  $('.video').click(function(){
    //     var video = $(this).attr('id');
    //   //   var src =""+video+""; //alert(src);
    //   $("video").html('<source src="'+video+'" type="video/mp4"></source>' );
    // //  var n  = $('source').attr('src');
    //  //alert(n);
    //  });

 
 $('#videogo').click(function(){
  $('#videoform').on('submit', function(event){
  event.preventDefault(); //alert("add");
 
   $.ajax({
    url:"{{ route('storevideo') }}",
    method:"POST",
    data: new FormData(this),
    contentType: false,
    cache:false,
    processData: false,
    dataType:"json",
    success:function(data)
    { alert('video added');
      $('.video' + data.topicid).last().append(
        '<a id="videolink" class="video" href="#exampleModalCenter" data-toggle="modal" data-target="#exampleModalCenter'+data.videoid+'" >'+
      '<i  style="margin:1% 1% 1% 1%" class="fas fa-play-circle" ></i>'+data.name+'</a>'+         
        '<br>'+
               '<div class="modal fade" id="exampleModalCenter'+data.videoid+'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">'+
                  '<div class="modal-dialog modal-dialog-centered" role="document">'+
                    '<div  class="modal-content">'+
                      '<video id="videotag"  width="600" controls>'+
                      '<source src="'+data.video+'" type="video/mp4"></source>'+
                      '</video>'+              
                     '</div>'+
                  '</div>'+
                '</div>');
  
         
   }
   });
  }); 
  });

  
 $('#topicgo').click(function(){ 
  $('#topicform').on('submit', function(event){
  event.preventDefault(); 
  alert("add");
 
   $.ajax({
    url:"{{route('topicstore')}}",
    method:"POST",
    data: new FormData(this),
    contentType: false,
    cache:false,
    processData: false,
    dataType:"json",
    success:function(data)
    { alert(data.topicid);
 $('#card').last().append(
      '<a href="#collapse'+data.topicid+'" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">'+
          '<h6  class="m-0 font-weight-bold text-primary">'+data.name+'</h6>'+
        '</a>'+
        '<div class="collapse" id="collapse'+data.topicid+'">'+
          '<div id="'+data.topicid+'" class="card-body">'+
                data.content +'<br><br>'+
               '<button  id="'+data.topicid+'"  data-toggle="modal" data-target=".bd-example-modal-sm" class="videobtn btn-primary btn-sm" >Add video</button><br><br>'+
               '<div class="video'+data.topicid+'">'+ 
               '</div> </div>'+
          +'</div>');

   }
   });
  }); 
  });


});

  
</script>
</body>

</html>
