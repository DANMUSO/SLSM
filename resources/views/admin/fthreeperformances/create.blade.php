@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark">Students</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Students</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
<?php
   $con = mysqli_connect("localhost","root","","serp");
   ?>
<div class="row">
<div class="col-md-1"> </div>
   <div class="col-md-10">    <div class="">
              <div class="card-footer">
                <h3 class="card-title">Add Marks to database</h3>
              </div> 
              <form enctype="multipart/form-data" role="form" method="POST" action="{{ route('admin.fthreeperformances.store')}}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                  <p for="">Admission No</p>
                  <select name="id" class="select2_single form-control" style="width: 100%"  tabindex="-1" >
                                        <option value="0">Admission No</option>
                                        <?php
                                        $result= mysqli_query($con,"select * from formthrees") or die (mysqli_error());
                                        while ($row= mysqli_fetch_array ($result) ){
                                        $id=$row['id'];
                                        ?>
                                            <option value="<?php echo $row['id'];?>"><?php echo $row['id'];?></option>
                                        <?php } ?>
                                        </select> </div>
                 
                  <div class="col-md-4">
                  <p for="">Mean Grade</p>
                    <input type="text" name="mgrd"  class="form-control"  placeholder="Mean Grade">
                  </div>
                  <div class="col-md-4">
                  <p for="">Position</p>
                    <input type="text" name="position"  class="form-control"  placeholder="Position">
                    </div>
                </div>
                <div class="row">
                 
                  <div class="col-md-4">
                  <p for="">Class Position</p>
                    <input type="text" name="clsp"  class="form-control"  placeholder="Class Position">
                    </div>
                    <div class="col-md-4">
                  <p for="">English Marks | Grade</p>
                    <input type="text" name="eng"  class="form-control"  placeholder="English Marks ">
                    </div>
                    <div class="col-md-4">
                    <p for="">Kiswhali Marks | Grade</p>
                    <input type="text" name="kisw"  class="form-control"  placeholder="Kiswhali Marks">
                    </div>
                </div>
                <div class="row">
                  
                    <div class="col-md-4">
                    <p for="">Mathematics Marks | Grade</p>
                    <input type="text" name="math"  class="form-control"  placeholder="Mathematics Marks">
                  </div>
                  <div class="col-md-4">
                    <p for="">Chemistry Marks | Grade</p>
                    <input type="text" name="chem"  class="form-control"  placeholder="Chemistry Marks">
                  </div>
                  <div class="col-md-4">
                    <p for="">Physics Marks | Grade</p>
                    <input type="text" name="phy"  class="form-control"  placeholder="Physics Marks">
                  </div>
                </div>
                <div class="row">
               
                <div class="col-md-4">
                    <p for="">Biology Marks | Grade</p>
                    <input type="text" name="bio"  class="form-control"  placeholder="Biology Marks">
                  </div>
                  <div class="col-md-4">
                    <p for="">Agriculture Marks | Grade</p>
                    <input type="text" name="agr"  class="form-control"  placeholder="Agriculture Marks">
                    </div>
                   
                    <div class="col-md-4">
                    <p for="">Business Marks | Grade</p>
                    <input type="text" name="agr"  class="form-control"  placeholder="Agriculture Marks">
                    </div>
                  
                </div>
                <div class="row">
                <div class="col-md-4">
                    <p for="">Business Marks | Grade</p>
                    <input type="text" name="bs"  class="form-control"  placeholder="Business Marks">
                    </div>
                <div class="col-md-4">
                    <p for="">Geography Marks | Grade</p>
                    <input type="text" name="geo"  class="form-control"  placeholder="Geography Marks">
                    </div>
                <div class="col-md-4">
                    <p for="">CRE Marks | Grade</p>
                    <input type="text" name="cre"  class="form-control"  placeholder="CRE Marks">
                    </div>
                  
                   
                   
                </div>
                <div class="row">
                <div class="col-md-4">
                    <p for="">History Marks | Grade</p>
                    <input type="text" name="hist"  class="form-control"  placeholder="History Marks">
                    </div>
                <div class="col-md-4">
                
                    <p for="">IRE Marks Marks</p>
                    <input type="text" name="ire"  class="form-control"  placeholder="IRE Marks">
                    </div>
                <div class="col-md-4">
                    <p for="">General Science</p>
                    <input type="text" name="gen"  class="form-control"  placeholder="General Science Marks">
                    </div>
                    </div>
                    <div class="row">
                <div class="col-md-4">
                    <p for="">Home Science Marks | Grade</p>
                    <input type="text" name="hs"  class="form-control"  placeholder="Home Science Marks">
                    </div>
                <div class="col-md-4">
                
                    <p for="">Arty and Design Marks | Grade</p>
                    <input type="text" name="ad"  class="form-control"  placeholder="Arty and Design Marks">
                    </div>
                <div class="col-md-4">
                    <p for="">Woodwork Marks | Grade</p>
                    <input type="text" name="ww"  class="form-control"  placeholder="Woodwork Marks">
                    </div>
                    </div>
                    <div class="row">
                <div class="col-md-4">
                    <p for="">Metalwork Marks | Grade</p>
                    <input type="text" name="mw"  class="form-control"  placeholder="Metalwork Marks">
                    </div>
                <div class="col-md-4">
                
                    <p for="">Building Construction Marks | Grade</p>
                    <input type="text" name="bc"  class="form-control"  placeholder="Building Construction Marks">
                    </div>
                <div class="col-md-4">
                    <p for="">Electricity Marks | Grade</p>
                    <input type="text" name="ele"  class="form-control"  placeholder="Electricity">
                    </div>
                    </div>
                    <div class="row">
                <div class="col-md-4">
                    <p for="">Drawing and Design Marks | Grade</p>
                    <input type="text" name="dd"  class="form-control"  placeholder="Drawing and Design Marks">
                    </div>
                <div class="col-md-4">
                
                    <p for="">Aviation Technology Marks | Grade</p>
                    <input type="text" name="at"  class="form-control"  placeholder="Aviation Technology Marks">
                    </div>
                <div class="col-md-4">
                    <p for="">Computer studies Marks | Grade</p>
                    <input type="text" name="cs"  class="form-control"  placeholder="Computer studies Marks">
                    </div>
                    </div>
                    <div class="row">
                <div class="col-md-4">
                    <p for="">French Marks | Grade</p>
                    <input type="text" name="french"  class="form-control"  placeholder="French Marks">
                    </div>
                <div class="col-md-4">
                
                    <p for="">German Marks | Grade</p>
                    <input type="text" name="german"  class="form-control"  placeholder="German Marks">
                    </div>
                <div class="col-md-4">
                    <p for="">Arabic Marks | Grade</p>
                    <input type="text" name="arabic"  class="form-control"  placeholder="Arabic Marks">
                    </div>
                    </div>
                    <div class="row">
                <div class="col-md-4">
                    <p for="">Kenya Sign Language (KSL) Marks | Grade</p>
                    <input type="text" name="ksl"  class="form-control"  placeholder="Kenya Sign Language (KSL)">
                    </div>
                <div class="col-md-4">
                
                    <p for="">Music Marks | Grade</p>
                    <input type="text" name="music"  class="form-control"  placeholder="Music Marks">
                    </div>
                <div class="col-md-4">
                    <p for="">Business Studies Marks | Grade</p>
                    <input type="text" name="bs"  class="form-control"  placeholder="Business Studies">
                    </div>
                    
                    </div>
                    <div class="row">
                <div class="col-md-4">
                    <p for="">Total Marks</p>
                    <input type="text" name="marks"  class="form-control"  placeholder="Total Marks">
                    </div>
                <div class="col-md-4">
                
                    <p for="">Points</p>
                    <input type="text" name="point"  class="form-control"  placeholder="Points">
                    </div>
                
                    
                    </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
</div></div>
   
@endsection
