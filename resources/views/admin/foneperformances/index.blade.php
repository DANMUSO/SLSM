@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark">School Performance</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">School Performance</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
      <div class="container-fluid">
    
      <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><button class="nav-link active" href="#form-one" data-toggle="tab" style="color:black">Form One Performance</button></li>
                  </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
         <!-- /.tab-pane -->
                  <div class="active tab-pane" id="form-two">
                    <!-- Post -->
                    <div class="post">
                     
                      <!-- /.user-block -->
                  
                    <!-- /.post -->
</div>

         
                

                  
                  <!-- /.tab-pane -->
                </div>
                
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            
            <!-- /.nav-tabs-custom -->
          </div>
          <div class="row"><div class="col-md-6"><h6>&nbsp&nbsp Form One Performance</h6></div>
                      <div class="col-md-4"></div>
                      <div class="col-md-2"><a href="{{ route('admin.foneperformances.create')}}" class="btn btn-primary">Add Marks</a></div></div>
                      <div class="container">
                    <div class="row justify-content-center">
                    <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
                    <table id="example" class="table table-striped table-bordered table-hover">
                    <thead style="background-color:#33e6ff;">
                    <tr>
                    <th>Admission No</th>
                    <th>MGRD</th>
                    <th>POSITION</th>
                    <th>CLSP</th>
                    <th>ENG/GRD</th>
                    <th>KISW/GRD</th>
                    <th>MATH/GRD</th>
                    <th>CHEM/GRD</th>
                    <th>PHY/GRD</th>
                    <th>BIO/GRD</th>
                    <th>AGR/GRD</th>
                    <th>BS/GRD</th>
                    <th>GEO/GRD</th>
                    <th>HIST/GRD</th>
                    <th>CRE/GRD</th>
                    <th>IRE/GRD</th>
                    <th>GS/GRD</th>
                    <th>HS/GRD</th>
                    <th>AD/GRD</th>
                    <th>WW/GRD</th>
                    <th>MW/GRD</th>
                    <th>BC/GRD</th>
                    <th>ELE/GRD</th>
                    <th>DD/GRD</th>
                    <th>AT/GRD</th>
                    <th>CS/GRD</th>
                    <th>FRENCH/GRD</th>
                    <th>GERMAN/GRD</th>
                    <th>ARABIC/GRD</th>
                    <th>KSL/GRD</th>
                    <th>MUSIC/GRD</th>
                    <th>Date</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    @foreach($foneperformances as $c)
                    <tr>
                    <td>{{ $c->id}}</td>
                    <td>{{ $c->mgrd}}</td> 
                    <td>{{ $c->position}}</td>
                    <td>{{ $c->clsp}}</td>
                    <td>{{ $c->eng}}</td> 
                    <td>{{ $c->kisw}}</td>
                    <td>{{ $c->math}}</td>
                    <td>{{ $c->chem}}</td> 
                    <td>{{ $c->phy}}</td> 
                    <td>{{ $c->bio}}</td> 
                    <td>{{ $c->agr}}</td> 
                    <td>{{ $c->bs}}</td> 
                    <td>{{ $c->geo}}</td> 
                    <td>{{ $c->hist}}</td>
                    <td>{{ $c->cre}}</td> 
                    <td>{{ $c->ire}}</td> 
                    <td>{{ $c->gen}}</td>  
                    <td>{{ $c->hs}}</td> 
                    <td>{{ $c->ad}}</td> 
                    <td>{{ $c->ww}}</td> 
                    <td>{{ $c->mw}}</td>
                    <td>{{ $c->bc}}</td>  
                    <td>{{ $c->ele}}</td> 
                    <td>{{ $c->dd}}</td>
                    <td>{{ $c->at}}</td>
                    <td>{{ $c->cs}}</td>
                    <td>{{ $c->french}}</td>
                    <td>{{ $c->german}}</td>
                    <td>{{ $c->arabic}}</td>
                    <td>{{ $c->ksl}}</td>
                    <td>{{ $c->music}}</td>
                    <td>{{ $c->created_at}}</td>   
                    <td>
                     <a href="{{ route('admin.formones.show', $c->id)}}" class="btn btn-success fa fa-eye"></a>
                     <a href="{{ route('admin.foneperformances.edit', $c->id)}}" class="btn btn-primary fa fa-edit" ></a>
                     <form id="delete_from_{{$c->id}}" method="POST" action="{{ route('admin.foneperformances.destroy', $c->id) }}">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}

                      <div class="form-group">
                          <a href="javascript:void(0);" data-id="{{$c->id}}" class="_delete_data">
                              <span class="btn btn-danger fa fa-trash-alt"></span>
                          </a>                    
                      </div>
                      </form>
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
@endsection