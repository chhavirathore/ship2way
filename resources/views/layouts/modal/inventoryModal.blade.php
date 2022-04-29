<!------------------------ iNVENTORY ------------------------------------------------------------------>

<div class="modal fade" id="import">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Inventory</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="col-md-12">
              <div class="container">
                <form>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity">First Name</label>
                      <input type="email" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputState">Last Name</label>
                      <input type="email" class="form-control" id="inputCity">
                    </div>
  
                    <div class="col-8">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">Override the imported name</label>
                      </div>
                    </div>
                  </div>
  
                </form>
              </div>
            </div>
          </div>
          <br><br>
          <div class="col-md-12">
          
            <div class="card card-primary card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                      href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home"
                      aria-selected="true">Import Inventory</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                      href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile"
                      aria-selected="false">Import As CSV</a>
                  </li>
  
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
  
                  <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                    aria-labelledby="custom-tabs-four-home-tab">
                    <h5>Attributes</h5>
                    <br>
                    <form>
                      <div class="form-group">
                        <label for="inputAddress">Product Description</label>
                        <input type="text" class="form-control" id="inputAddress">
                      </div>
                      <div class="form-group">
                        <label for="inputAddress">Werehouse Number And Address</label>
                        <input type="text" class="form-control" id="inputAddress">
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputCity">Bun Rack</label>
                          <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputState">Filk Lif Needed</label>
                          <input type="text" class="form-control" id="inputCity">
                        </div>
                      </div>
  
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputCity">Shippin Fee</label>
                          <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputState">Amount Of Unit Per Bulk</label>
                          <input type="text" class="form-control" id="inputCity">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputCity">Automate Distance Calculation</label>
                          <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputState">Country OF Origin</label>
                          <input type="text" class="form-control" id="inputCity">
                        </div>
                      </div>
  
  
                      <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                  </div>
  
                  <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                    aria-labelledby="custom-tabs-four-profile-tab">
                    <div class="container">
  
                      <p>If you'd like to import inventory information from a spreadsheet or other datasource, you can
                        provide your data in our standard CSV file format.</p>
  
                      <a href="">
                        <h4>Download a sample CSV file</h4>
                      </a>
                      <br>
                           <!-- Message -->
                        @if(Session::has('message'))
                        <p >{{ Session::get('message') }}</p>
                        @endif
                      <Form method="post" action="{{route('upload-content')}}" enctype="multipart/Form-data">
                          @csrf
                      <h5>1. Select a File to Import</h5>
  
                      <input type="file" value="Select A File">
                      <br><br>
  
                      <h5>2. Select Warehouse to Apply Import To</h5>
  
                      <div>
                        <select id="inputState" class="form-control">
                          <option selected>Choose...</option>
                          <option>...</option>
                        </select>
                      </div>
  
                      <br>
  
                      <div class="col-8">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">
                            Test Mode
                          </label>
                        </div>
                      </div>
  
                      <br>
  
                      <p>If checked, an import summary will be displayed once complete but no records will be modified.
                      </p>
                      <button type="submit" class="btn btn-primary">Save</button>
                      <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                    </form>
                    </div>
                  </div>
  
                  <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel"
                    aria-labelledby="custom-tabs-four-messages-tab">
  
                    <h5>Default Customs Declarations</h5>
                    <p>The following options will be used to create customs declarations for international shipments that
                      contain this product.</p>
  
                    <form>
                      <div class="col-8">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Do not create for products using this groups</label>
                        </div>
                      </div>
                      <br>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputCity">Description</label>
                          <input type="email" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputState">Declared Value</label>
                          <input type="email" class="form-control" id="inputCity">
                        </div>
                      </div>
  
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputCity">Harmonization Code</label>
                          <input type="email" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputState">Origin Country</label>
                          <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Australia</option>
                            <option>Bangladesh</option>
                            <option>Canada</option>
                            <option>India</option>
                            <option>Pakistan</option>
                            <option>Russia</option>
                          </select>
                        </div>
                      </div>
                      <button type="button" class="btn btn-primary">Save</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </form>
                  </div>
  
  
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
          <div class="modal-footer justify-content-right">
            <div class="col-4">
              <div class="form-check">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Apply changes to open orders</label>
              </div>
            </div>
            <!-- <button type="button" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
          </div>
        </div>
      </div>
  
    </div>
    <!-- /.modal-content -->
  </div>