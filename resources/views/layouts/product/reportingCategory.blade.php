@extends('layouts.app')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Reporting Categories</h1>
        </div>
        
        </div>
        <div class="row">
          
            <div class="col-sm-6 col-md-12">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#category" style="float:right">Add Product Category</button>
            </div>
             
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-body">
              <div class="col-md-12" style="overflow: auto;">
              <table id="tbUser" class="table align-items-center table-flush order-column">
              <thead class="thead-light">
                <tr>
                  <th>
                    <div class="form-check mb-3">
                          <input class="form-check-input" type="checkbox">
                    </div>
                  </th>
                  <th>Product Category</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                @foreach ($reporting_categories as  $data) 
                  <td>
                    <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                    </div>
                  </td>
                  <td>{{$data->product_category}}</td>

                  <td>
                    <form method="post">
                    <a class="badge badge-warning"  data-toggle="modal" data-target="#edit_rep" href="/reporting-category-update/{{$data->id}}"><i class="fa fa-edit"></i></a>
                    @csrf
                    @method('DELETE')
                    <a class="badge badge-danger" href="/reporting-category-destroy/{{$data->id}}"><i class="fa fa-trash"></i></a>
                  </form>
                  </td>
                </tr>
                @endForeach
              </tbody>
              
              </table>
              </div>
            </div>
            </div>
          </div>
          <!-- /.card-header -->
          
          <!-- /.card-body -->
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
  @include('layouts.modal.reportingCategoryModal')

  @endsection

       

