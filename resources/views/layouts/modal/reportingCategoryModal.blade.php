    <!------------------------------------------------------- Reporting Category ---------------------------->

            <!-- /.modal-dialog -->

            <div class="modal fade" id="category">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Add Product Category</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="container">
                              <form method="POST" action="{{route('reporting-category')}}">
                                @csrf
                                <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <label for="product_category">Add Product Category</label>
                                    <input type="text" class="form-control" id="product_category" name="product_category">
                                    <span class="text-danger">@error('product_category') {{$message}} @enderror</span>
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-primary add-category">Save changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <!-- <button type="submit" class="btn btn-primary add-category">Save changes</button> -->
                          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        </div>
                      </div>
                    </div>
                  </div>
        
                    <!-- <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save</button>
                    </div> -->
               
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
        
              <div class="modal fade" id="edit_rep">
                <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Edit Category</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="container">
                              <form method="post" action="{{route('reporting-category-update')}}">
                                @csrf
                                <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <label for="product_category">Add Product Category</label>
                                    <input name="id" type="hidden" value="{{$reporting_categories->id}}">
                                    <input type="text" class="form-control" id="product_category" name="product_category" value="{{$reporting_categories->product_category}}" name="product_category">
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-primary add-category">Save changes</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <!-- <button type="submit" class="btn btn-primary add-category">Save changes</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
           
              </div>
              
        