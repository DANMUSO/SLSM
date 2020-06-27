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
              <li class="breadcrumb-item active"><a href="{{ route('admin.formones.index')}}">Back</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
@if($errors->any())
<div class="alert alert-danger">
@foreach($errors ->all() as $error)
<li>{{ $error }}</li>
@endforeach
</div>
@endif

   @if($message = Session::get('success'))
   <div class="alert alert-success" style="text-align:center;">
   <label>
   {{ $message}}
   </label>
   </div>
   @endif
      <div class="">
              <div class="btn btn-primary col-md-12" style="text-align:center;">
                <h3 class="card-title">Add forn one students to database</h3>
              </div> 
              <form enctype="multipart/form-data" role="form" method="POST" action="{{ route('admin.ftwoperformances.update', $ftwoperformance->id)}}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           {{ method_field('PATCH')}}
                <div class="card-body">
                <div class="row">
                 
                  <div class="col-md-4">
                  <label for="">Mean Grade</label>
                    <input type="text" name="mgrd" value="{{ $ftwoperformance->mgrd}}"  class="form-control"  placeholder="Mean Grade">
                  </div>
                  <div class="col-md-4">
                  <label for="">Position</label>
                    <input type="text" name="position" value="{{ $ftwoperformance->position}}"  class="form-control"  placeholder="Position">
                    </div>
                    
                  <div class="col-md-4">
                  <label for="">Class Position</label>
                    <input type="text" name="clsp" value="{{ $ftwoperformance->clsp}}"  class="form-control"  placeholder="Class Position">
                    </div>
                </div>
                <div class="row">
                 
                    <div class="col-md-4">
                  <label for="">English Marks | Grade</label>
                    <input type="text" name="eng" value="{{ $ftwoperformance->eng}}"  class="form-control"  placeholder="English Marks ">
                    </div>
                    <div class="col-md-4">
                    <label for="">Kiswhali Marks | Grade</label>
                    <input type="text" name="kisw"  value="{{ $ftwoperformance->kisw}}" class="form-control"  placeholder="Kiswhali Marks">
                    </div>
                    <div class="col-md-4">
                    <label for="">Mathematics Marks | Grade</label>
                    <input type="text" name="math"  value="{{ $ftwoperformance->math}}" class="form-control"  placeholder="Mathematics Marks">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label for="">Chemistry Marks | Grade</label>
                    <input type="text" name="chem"  value="{{ $ftwoperformance->chem}}" class="form-control"  placeholder="Chemistry Marks">
                  </div>
                  <div class="col-md-4">
                    <label for="">Physics Marks | Grade</label>
                    <input type="text" name="phy"  value="{{ $ftwoperformance->phy}}" class="form-control"  placeholder="Physics Marks">
                  </div>
                  <div class="col-md-4">
                    <label for="">Biology Marks | Grade</label>
                    <input type="text" name="bio"  value="{{ $ftwoperformance->bio}}" class="form-control"  placeholder="Biology Marks">
                  </div>
                </div>
                <div class="row">
               
                
                  <div class="col-md-4">
                    <label for="">Agriculture Marks | Grade</label>
                    <input type="text" name="agr" value="{{ $ftwoperformance->agr}}"  class="form-control"  placeholder="Agriculture Marks">
                    </div>
                   
                    <div class="col-md-4">
                    <label for="">Business Marks | Grade</label>
                    <input type="text" name="bs" value="{{ $ftwoperformance->bs}}"  class="form-control"  placeholder="Agriculture Marks">
                    </div>
                    <div class="col-md-4">
                    <label for="">Geography Marks | Grade</label>
                    <input type="text" name="geo" value="{{ $ftwoperformance->geo}}"  class="form-control"  placeholder="Geography Marks">
                    </div>
                  
                </div>
                <div class="row">
                
               
                <div class="col-md-4">
                    <label for="">CRE Marks | Grade</label>
                    <input type="text" name="cre" value="{{ $ftwoperformance->cre}}"  class="form-control"  placeholder="CRE Marks">
                    </div>
                    <div class="col-md-4">
                    <label for="">History Marks | Grade</label>
                    <input type="text" name="hist" value="{{ $ftwoperformance->hist}}"  class="form-control"  placeholder="History Marks">
                    </div> 
                    <div class="col-md-4">
                
                    <label for="">IRE Marks Marks</label>
                    <input type="text" name="ire" value="{{ $ftwoperformance->ire}}"  class="form-control"  placeholder="IRE Marks">
                    </div> 
                </div>
                <div class="row">
                <div class="col-md-4">
                    <label for="">General Science</label>
                    <input type="text" name="gen" value="{{ $ftwoperformance->gen}}"  class="form-control"  placeholder="General Science Marks">
                    </div>
                    <div class="col-md-4">
                    <label for="">Home Science Marks | Grade</label>
                    <input type="text" name="hs" value="{{ $ftwoperformance->hs}}"  class="form-control"  placeholder="Home Science Marks">
                    </div>
                    <div class="col-md-4">
                
                    <label for="">Arty and Design Marks | Grade</label>
                    <input type="text" name="ad" value="{{ $ftwoperformance->ad}}"  class="form-control"  placeholder="Arty and Design Marks">
                    </div>
                    </div>
                    <div class="row">
                
                
                <div class="col-md-4">
                    <label for="">Woodwork Marks | Grade</label>
                    <input type="text" name="ww" value="{{ $ftwoperformance->ww}}"  class="form-control"  placeholder="Woodwork Marks">
                    </div>
                    <div class="col-md-4">
                    <label for="">Metalwork Marks | Grade</label>
                    <input type="text" name="mw" value="{{ $ftwoperformance->mw}}"  class="form-control"  placeholder="Metalwork Marks">
                    </div>
                    <div class="col-md-4">
                
                    <label for="">Building Construction Marks | Grade</label>
                    <input type="text" name="bc" value="{{ $ftwoperformance->bc}}"  class="form-control"  placeholder="Building Construction Marks">
                    </div>
                    </div>
                    <div class="row">
                
                
                <div class="col-md-4">
                    <label for="">Electricity Marks | Grade</label>
                    <input type="text" name="ele" value="{{ $ftwoperformance->ele}}"  class="form-control"  placeholder="Electricity">
                    </div>
                    <div class="col-md-4">
                    <label for="">Drawing and Design Marks | Grade</label>
                    <input type="text" name="dd"  value="{{ $ftwoperformance->dd}}" class="form-control"  placeholder="Drawing and Design Marks">
                    </div>
                    <div class="col-md-4">
                    <label for="">Aviation Technology Marks | Grade</label>
                    <input type="text" name="at"  value="{{ $ftwoperformance->at}}" class="form-control"  placeholder="Aviation Technology Marks">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                    <label for="">Computer studies Marks | Grade</label>
                    <input type="text" name="cs"  value="{{ $ftwoperformance->cs}}" class="form-control"  placeholder="Computer studies Marks">
                    </div>
                    <div class="col-md-4">
                    <label for="">French Marks | Grade</label>
                    <input type="text" name="french"  value="{{ $ftwoperformance->french}}" class="form-control"  placeholder="French Marks">
                    </div>
                    <div class="col-md-4">
                    <label for="">German Marks | Grade</label>
                    <input type="text" name="german"  value="{{ $ftwoperformance->german}}" class="form-control"  placeholder="German Marks">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                    <label for="">Arabic Marks | Grade</label>
                    <input type="text" name="arabic"  value="{{ $ftwoperformance->arabic}}" class="form-control"  placeholder="Arabic Marks">
                    </div>
                    <div class="col-md-4">
                    <label for="">Kenya Sign Language (KSL) Marks | Grade</label>
                    <input type="text" name="ksl" value="{{ $ftwoperformance->ksl}}"  class="form-control"  placeholder="Kenya Sign Language (KSL)">
                    </div>
                    <div class="col-md-4"><label for="">Music Marks | Grade</label>
                    <input type="text" name="music" value="{{ $ftwoperformance->music}}"  class="form-control"  placeholder="Music Marks">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                    <label for="">Business Studies Marks | Grade</label>
                    <input type="text" name="bs"  value="{{ $ftwoperformance->bs}}" class="form-control"  placeholder="Business Studies">
                    </div>
                    <div class="col-md-4">
                    <label for="">Total Marks</label>
                    <input type="text" name="marks" value="{{ $ftwoperformance->marks}}"  class="form-control"  placeholder="Total Marks">
                    </div>
                    <div class="col-md-4">
                    <label for="">Points</label>
                    <input type="text" name="point" value="{{ $ftwoperformance->point}}"  class="form-control"  placeholder="Points">
                    </div>
                    </div>
                    <div class="row">
                
                
                
                    
                    </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
</div> </div>
              
@endsection
