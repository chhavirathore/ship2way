@extends('layouts.app')
@section('content')

  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Preset Groups</h1>
        </div>
        
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div> -->
        </div>
        <div class="row">
          <!-------------dropdown---------------------->
          <div class="col-sm-6 col-md-12">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#preset_model" style="float:right">Add Prest Groups</button>
          </div>
          <!-------------------dropdown--------------------->     
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content ---------------------------------------------------------------------->
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
                    
                      <th>Preset Group</th>
                      <th>Stores</th>
                      <th>Manufacturer</th>
                      <th>Brand</th>
                      <th>Size</th>
                      <th>Color</th>
                      <th>Product Type Group</th>
                      <th>Dimension</th>
                      <th>Weight</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($preset_groups as $item) 
                    <tr>
                      <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"> 
                        </div>
                      </td>
                      
                      <td>{{$item->preset_group_name}}</td>
                      <td>{{item->domestic_service}}</td>
                      <td>{{$item->description}}</td>
                      <td>{{$item->package_width}}</td>
                      <td>{{$item->package_height}}</td>
                      <td>{{$item->package_length}}</td>
                      <td>{{$item->type_of_products}}</td>
                      <td>{{$item->package_length}} X {{$item->package_width}}</td>
                      <td>{{$item->package_weight}}</td> 
                      <td>
                        <form action="" method="post">
                    
                        <a class="badge badge-warning" id="" data-toggle="modal"  data-target="#edit_preset" onclick="update();"><i class="fa fa-edit"></i></a>
                        <!-- <button onclick="update({{$item->preset_group_name}})" class="badge badge-warning" data-target="#edit_preset">edit</button> -->
                        <script>
                           function update()
                          {
                            alert('hello');
                          }
                          </script>
                        @csrf
                        @method('DELETE')
                        <a class="badge badge-danger" href="/preset-group-destroy/{{$item->id}}"><i class="fa fa-trash"></i></a>
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
          <!-- /.card-header -->
          
          <!-- /.card-body -->
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
  @include('layouts.modal.presetGroupModal')
@endsection

