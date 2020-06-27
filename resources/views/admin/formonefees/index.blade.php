@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h6 class="m-0 text-dark">Form One Fees Transactions</h6>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Form One Fees</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-12">
          <div class="info-box mb-3">
            
          <div class="info-box-content">
            <div  class="btn btn-primary" style="width:100%">
            <a href="{{ route('admin.formonefees.index')}}"> <h6 style="color:white">Form One Students
           </h6></a>
              </div>
              </span>
              <table class="table table-borderless" style="color:black">
              
              <tr>
              <th>Total Fees 250,000 KES</td><th>     <a href="">Paid Fees  
                     <?php
                      $con = mysqli_connect("localhost","root","","serp");
                      $sum = mysqli_query($con,"SELECT SUM(amount) FROM formonefees");
                      while ($fee=mysqli_fetch_assoc($sum))
                      {
                         $amount=$fee['SUM(amount)'];
                       ?>
                      <?php echo $fee['SUM(amount)'].' '.'KES';?>
                       <?php }
                      ?>
                      </a></td><th>     <a href="">Pending Fees 60,000 KES</a></td>
              </tr> 
              
              </table>
            </div>
            
            <!-- /.info-box-content -->
          </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
       

        <!-- /.row -->

        <!-- /.row -->
                    </div><!--/. container-fluid -->
                  </section>
                  
                  <div class="row"><div class="col-md-6"><h6>&nbsp&nbsp Recent fees payment transactions</h6></div>
                  <div class="col-md-4"></div>
                  <div class="col-md-2"><a href="{{ route('admin.formonefees.create')}}" class="btn btn-primary">Make Payment</a></div></div>
                  <div class="container">
                  <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
                  <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                    <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                      <header class="modal__header">
                        <h2 class="modal__title" id="modal-1-title">
                          Micromodal
                        </h2>
                        <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                      </header>
                      <main class="modal__content" id="modal-1-content">
                        <p>
                          Try hitting the <code>tab</code> key and notice how the focus stays within the modal itself. Also, <code>esc</code> to close modal.
                        </p>
                      </main>
                      <footer class="modal__footer">
                        <button class="modal__btn modal__btn-primary">Continue</button>
                        <button class="modal__btn" data-micromodal-close aria-label="Close this dialog window">Close</button>
                      </footer>
                    </div>
                  </div>
                </div>
                <div class="row justify-content-center">
                <div class="col-lg-12 bg-light rounded my-2 py-2" style="overflow-x:auto;">
                <table id="example" class="table table-striped table-bordered table-hover">
                <thead style="background-color:#33e6ff;">
                <tr>
                <th>#ID</th>
                <th>Admission No</th>
                <th>Bank</th>
                <th>Receipt Number</th>
                <th>Date</th>
                <th>Amount</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody id="myTable">
                @foreach($formonefees as $c)
                <tr>
                <td>{{ $c->id}}</td>
                <td>{{ $c->admissionno}}</td>
                <td>{{ $c->bank}}</td>
                <td>{{ $c->receiptno}}</td> 
                <td>{{ $c->created_at}}</td>
                    
                <td>{{ $c->amount}}</td>    
                <td>
                <a href="{{ route('admin.formones.show', $c->id)}}" class="btn btn-success fa fa-eye"></a>
                <a href="{{ route('admin.formonefees.edit', $c->id)}}" class="btn btn-primary fa fa-edit" ></a>
                <form id="delete_from_{{$c->id}}" method="POST" action="{{ route('admin.formonefees.destroy', $c->id) }}">
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
                <?php
                $con = mysqli_connect("localhost","root","","serp");
                $sum = mysqli_query($con,"SELECT SUM(amount) FROM formonefees");
                while ($fee=mysqli_fetch_assoc($sum))
                {
                $amount=$fee['SUM(amount)'];
                ?>
                      
                <tr>
                <td colspan="4">Total Amount</td>
                <td><?php echo $fee['SUM(amount)'].' '.'KES';?></td>
                    
                      
                </tr>
                <?php }

                ?>
                </table>
                <div class="modal fade" id="post-modal" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                <form name="userForm" class="form-horizontal">
                <input type="hidden" name="post_id" id="post_id">
                <div class="form-group">
                <label for="name" class="col-sm-2">title</label>
                <div class="col-sm-12">
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                <span id="titleError" class="alert-message"></span>
                </div>
                </div>

                <div class="form-group">
                <label class="col-sm-2">Description</label>
                <div class="col-sm-12">
                <textarea class="form-control" id="description" name="description" placeholder="Enter description" rows="4" cols="50">
                </textarea>
                <span id="descriptionError" class="alert-message"></span>
                </div>
                </div>
                </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="createPost()">Save</button>
                </div>
                </div>
                </div>
              </div>
                  </div></div></div>
     
@endsection