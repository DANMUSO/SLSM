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
   <p>
   {{ $message}}
   </p>
   </div>
   @endif
      <div class="">
              <div class="btn btn-primary col-md-12" style="text-align:center;">
                <h3 class="card-title">Add forn one students to database</h3>
              </div> 
              <form enctype="multipart/form-data" role="form" method="POST" action="{{ route('admin.foneperformances.update', $foneperformance->id)}}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           {{ method_field('PATCH')}}
                <div class="card-body">
                <div class="row">
                 
                  <div class="col-md-4">
                  <p for="">Mean Grade</p>
                    <input type="text" name="mgrd" value="{{ $foneperformance->mgrd}}" required class="form-control"  placeholder="Mean Grade">
                  </div>
                  <div class="col-md-4">
                  <p for="">Position</p>
                    <input type="text" name="position" value="{{ $foneperformance->position}}" required class="form-control"  placeholder="Position">
                    </div>
                    
                  <div class="col-md-4">
                  <p for="">Class Position</p>
                    <input type="text" name="clsp" value="{{ $foneperformance->clsp}}" required class="form-control"  placeholder="Class Position">
                    </div>
                </div>
                <div class="row">
                 
                    <div class="col-md-4">
                  <p for="">English Marks | Grade</p>
                    <input type="text" name="eng" value="{{ $foneperformance->eng}}" required class="form-control"  placeholder="English Marks ">
                    </div>
                    <div class="col-md-4">
                    <p for="">Kiswhali Marks | Grade</p>
                    <input type="text" name="kisw" required value="{{ $foneperformance->kisw}}" class="form-control"  placeholder="Kiswhali Marks">
                    </div>
                    <div class="col-md-4">
                    <p for="">Mathematics Marks | Grade</p>
                    <input type="text" name="math" required value="{{ $foneperformance->math}}" class="form-control"  placeholder="Mathematics Marks">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <p for="">Chemistry Marks | Grade</p>
                    <input type="text" name="chem" required value="{{ $foneperformance->chem}}" class="form-control"  placeholder="Chemistry Marks">
                  </div>
                  <div class="col-md-4">
                    <p for="">Physics Marks | Grade</p>
                    <input type="text" name="phy" required value="{{ $foneperformance->phy}}" class="form-control"  placeholder="Physics Marks">
                  </div>
                  <div class="col-md-4">
                    <p for="">Biology Marks | Grade</p>
                    <input type="text" name="bio" required value="{{ $foneperformance->bio}}" class="form-control"  placeholder="Biology Marks">
                  </div>
                </div>
                <div class="row">
               
                
                  <div class="col-md-4">
                    <p for="">Agriculture Marks | Grade</p>
                    <input type="text" name="agr" value="{{ $foneperformance->agr}}" required class="form-control"  placeholder="Agriculture Marks">
                    </div>
                   
                    <div class="col-md-4">
                    <p for="">Business Marks | Grade</p>
                    <input type="text" name="bs" value="{{ $foneperformance->bs}}" required class="form-control"  placeholder="Agriculture Marks">
                    </div>
                    <div class="col-md-4">
                    <p for="">Geography Marks | Grade</p>
                    <input type="text" name="geo" value="{{ $foneperformance->geo}}" required class="form-control"  placeholder="Geography Marks">
                    </div>
                  
                </div>
                <div class="row">
                
               
                <div class="col-md-4">
                    <p for="">CRE Marks | Grade</p>
                    <input type="text" name="cre" value="{{ $foneperformance->cre}}" required class="form-control"  placeholder="CRE Marks">
                    </div>
                    <div class="col-md-4">
                    <p for="">History Marks | Grade</p>
                    <input type="text" name="hist" value="{{ $foneperformance->hist}}" required class="form-control"  placeholder="History Marks">
                    </div> 
                    <div class="col-md-4">
                
                    <p for="">IRE Marks Marks</p>
                    <input type="text" name="ire" value="{{ $foneperformance->ire}}" required class="form-control"  placeholder="IRE Marks">
                    </div> 
                </div>
                <div class="row">
                <div class="col-md-4">
                    <p for="">General Science</p>
                    <input type="text" name="gen" value="{{ $foneperformance->gen}}" required class="form-control"  placeholder="General Science Marks">
                    </div>
                    <div class="col-md-4">
                    <p for="">Home Science Marks | Grade</p>
                    <input type="text" name="hs" value="{{ $foneperformance->hs}}" required class="form-control"  placeholder="Home Science Marks">
                    </div>
                    <div class="col-md-4">
                
                    <p for="">Arty and Design Marks | Grade</p>
                    <input type="text" name="ad" value="{{ $foneperformance->ad}}" required class="form-control"  placeholder="Arty and Design Marks">
                    </div>
                    </div>
                    <div class="row">
                
                
                <div class="col-md-4">
                    <p for="">Woodwork Marks | Grade</p>
                    <input type="text" name="ww" value="{{ $foneperformance->ww}}" required class="form-control"  placeholder="Woodwork Marks">
                    </div>
                    <div class="col-md-4">
                    <p for="">Metalwork Marks | Grade</p>
                    <input type="text" name="mw" value="{{ $foneperformance->mw}}" required class="form-control"  placeholder="Metalwork Marks">
                    </div>
                    <div class="col-md-4">
                
                    <p for="">Building Construction Marks | Grade</p>
                    <input type="text" name="bc" value="{{ $foneperformance->bc}}" required class="form-control"  placeholder="Building Construction Marks">
                    </div>
                    </div>
                    <div class="row">
                
                
                <div class="col-md-4">
                    <p for="">Electricity Marks | Grade</p>
                    <input type="text" name="ele" value="{{ $foneperformance->ele}}" required class="form-control"  placeholder="Electricity">
                    </div>
                    <div class="col-md-4">
                    <p for="">Drawing and Design Marks | Grade</p>
                    <input type="text" name="dd" required value="{{ $foneperformance->dd}}" class="form-control"  placeholder="Drawing and Design Marks">
                    </div>
                    <div class="col-md-4">
                    <p for="">Aviation Technology Marks | Grade</p>
                    <input type="text" name="at" required value="{{ $foneperformance->at}}" class="form-control"  placeholder="Aviation Technology Marks">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                    <p for="">Computer studies Marks | Grade</p>
                    <input type="text" name="cs" required value="{{ $foneperformance->cs}}" class="form-control"  placeholder="Computer studies Marks">
                    </div>
                    <div class="col-md-4">
                    <p for="">French Marks | Grade</p>
                    <input type="text" name="french" required value="{{ $foneperformance->french}}" class="form-control"  placeholder="French Marks">
                    </div>
                    <div class="col-md-4">
                    <p for="">German Marks | Grade</p>
                    <input type="text" name="german" required value="{{ $foneperformance->german}}" class="form-control"  placeholder="German Marks">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                    <p for="">Arabic Marks | Grade</p>
                    <input type="text" name="arabic" required value="{{ $foneperformance->arabic}}" class="form-control"  placeholder="Arabic Marks">
                    </div>
                    <div class="col-md-4">
                    <p for="">Kenya Sign Language (KSL) Marks | Grade</p>
                    <input type="text" name="ksl" value="{{ $foneperformance->ksl}}" required class="form-control"  placeholder="Kenya Sign Language (KSL)">
                    </div>
                    <div class="col-md-4"><p for="">Music Marks | Grade</p>
                    <input type="text" name="music" value="{{ $foneperformance->music}}" required class="form-control"  placeholder="Music Marks">
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                    <p for="">Business Studies Marks | Grade</p>
                    <input type="text" name="bs" required value="{{ $foneperformance->bs}}" class="form-control"  placeholder="Business Studies">
                    </div>
                    <div class="col-md-4">
                    <p for="">Total Marks</p>
                    <input type="text" name="marks" value="{{ $foneperformance->marks}}" required class="form-control"  placeholder="Total Marks">
                    </div>
                    <div class="col-md-4">
                    <p for="">Points</p>
                    <input type="text" name="point" value="{{ $foneperformance->point}}" required class="form-control"  placeholder="Points">
                    </div>
                    </div>
                    <div class="row">
                
                
                
                    
                    </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"  class="btn btn-primary">Submit</button>
                </div>
              </form>
</div> </div>
              
@endsection
