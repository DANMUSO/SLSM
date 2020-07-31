@extends('layouts.admin')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">Admin Dashboard</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
            <div class="info-box-content">
              <div  class="btn btn-info" style="width:100%">
               <a href="">  <h6 style="color:white"> <span><i class="fa fa-users"></i></span></h6>
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th></th><td></td>
                </tr> 
                <tr>
                <th></th><td>
               
                </td>
                </tr>
                <tr>
                <th></th><td>
                
                
                </td>
                </tr>
                </table></a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
            
              <div class="info-box-content">
              <div  class="btn btn-primary" style="width:100%">
              <a href=""> <h6 style="color:white">
               <span><i class="fa fa-dollar"
                 style="font-size:16px;color:white"></i></span></h6>
                
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th></th><td></td>
                </tr> 
                <tr>
                <th></th><td>
                
                </td>
                </tr>
                <tr>
                <th></th><td></td>
                </tr>
                </table>
                </a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
            
              <div class="info-box-content">
              <div  class="btn btn-success" style="width:100%">
              <a href=""> <h6 style="color:white">
              <span><i class="fa fa-users"></i></span></h6>
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th></th><td></td>
                </tr> 
                <tr>
                <th></th><td></td>
                </tr>
                <tr>
                <th></th><td></td>
                </tr>
                </table></a>
              </div>
              
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div></div>
        <div class="row">
         
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
            
              <div class="info-box-content">
              <div  class="btn btn-danger" style="width:100%">
                <a href=""><h6 style="color:white"><span><i class="fa fa-bar-chart"></i></span></h6>
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th></th><td></td>
                </tr> 
                <tr>
                <th></th><td></td>
                </tr>
                <tr>
                <th></th><td></td>
                </tr>
                </table>
                </a>
              </div>
              
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
            <div class="info-box-content">
              <div  class="btn btn-dark" style="width:100%">
                <a href="" style="color:white"><h6><span><i class="fa fa-user-secret"></i></span></h6>
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th></th><td></td>
                </tr> 
                <tr>
                <th></th><td></td>
                </tr>
                <tr>
                <th></th><td></td>
                </tr>
                </table>
                </a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
         
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
            <div class="info-box-content">
              <div  class="btn btn-success" style="width:100%">
               <a href=""> <h6 style="color:white"><i class="fas fa-trophy"></i></h6>
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th></th><td></td>
                </tr> 
                <tr>
                <th></th><td></td>
                </tr>
                <tr>
                <th></th><td></td>
                </tr>
                </table>
                </a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
            
              <div class="info-box-content">
              <div  class="btn btn-secondary" style="width:100%">
                <h6 style="color:white"><span><i class="fa fa-university"></i></span></h6>
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th></th><td></td>
                </tr> 
                <tr>
                <th></th><td></td>
                </tr>
                <tr>
                <th></th><td></td>
                </tr>
                </table>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
            
              <div class="info-box-content">
              <div  class="btn btn-primary" style="width:100%">
               <a href=""> <h6 style="color:white"><span><i class="fas fa-lock"></i></span></h6>
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th></th><td></td>
                </tr> 
                <tr>
                <th></th><td></td>
                </tr>
                <tr>
                <th><s/th><td></td>
                </tr>
                </table>
                </a>
              </div>
              
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
            
              <div class="info-box-content">
              <div  class="btn btn-warning" style="width:100%">
                <a href=""><h6 style="color:white"> <span><i class="fa fa-bus"></i></span></h6>
                </div>
                </span>
                <table class="table table-borderless" style="color:black">
                <tr>
                <th></th><td></td>
                </tr> 
                <tr>
                <th></th><td></td>
                </tr>
                <tr>
                <th></th><td></td>
                </tr>
                </table>
                </a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
         
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- /.row -->

        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    
    <!-- /.content -->
@endsection
