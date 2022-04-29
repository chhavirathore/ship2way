<div class="modal fade" id="edit_preset">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Edit Preset Groups</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              
              <div class="modal-body">
                <div class="container-fluid">
                  <div class="col-md-12">
                    <p>Preset Groups allow you to define default attributes that can be applied to multiple products. Any product with this "profile" will be assigned these attributes unless specifically overridden.</p>
                  </div>
                  <form action="{{route('preset-group-update')}}" method="post">
                    @csrf
                  <div class="col-md-12">
                      <div class="container">
                          <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="preset_group_name">Preset Group Name</label>
                              <input name="id" type="hidden" value="{{$preset_groups->id}}">
                              <input type="text" class="form-control" id="preset_group_name" name="preset_group_name" value="{{$preset_groups->preset_group_name}}">

                            </div>
                          </div>
                          <h5>Domestic</h5>
                          <div class="form-row">
                            <div class="form-group col-md-4">
                              
                              <input type="text" class="form-control" id="domestic_service" name="domestic_service" value="">

                            </div>
                            <div class="form-group col-md-4">
                             
                              <input type="text" class="form-control" id="domestic_package" name="domestic_package" value="">

                            </div>
                            <div class="form-group col-md-4">
                             
                              <input type="text" class="form-control" id="domestic_confirmation" name="domestic_confirmation" value="">

                            </div>
                          </div>
                          
                          <h5>International</h5>
                          <div class="form-row">
                            <div class="form-group col-md-4">
                              <input type="text" class="form-control" id="international_service" name="international_service" value="">

                            </div>
                            <div class="form-group col-md-4">
                              
                              <input type="text" class="form-control" id="international_package" name="international_package" value="">

                            </div>
                            <div class="form-group col-md-4">
                              
                              <input type="text" class="form-control" id="international_confirmation" name="international_confirmation" value="">

                            </div>
                          </div>
                              <h5>Package Weight</h5>
                              <div class="form-row">
  
                                <div class="form-group col-md-6">
                                  <label for="package_weight">(lb)</label>
                                  <input type="number" class="form-control" id="package_weight" name="package_weight" value="">

                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputState">(oz)</label>
                                  <input type="number" class="form-control" id="inputCity">
                                </div>
                              </div>
                              <h5>Package Dimensions</h5>
                              <div class="form-row">
                                <div class="form-group col-md-4">
                                  <label for="package_length">L</label>
                                  <input type="number" class="form-control" id="package_length" name="package_length" value="">

                                </div>
                                <div class="form-group col-md-4">
                                  <label for="package_width">W</label>
                                  <input type="number" class="form-control" id="package_width" name="package_width" value="">

                                </div>
                                <div class="form-group col-md-4">
                                  <label for="package_height">H(in)</label>
                                  <input type="number" class="form-control" id="package_height" name="package_height" value="">

                                </div>
                              </div>
  
                              <h5>Customs Declarations</h5>
                              <p>The following options will be used to create customs declarations for international shipments that contain products with this Preset Group.
                              </p>
                              <div class="col-12">
                                  <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="customs_declaration" value="">
                                  <label class="form-check-label">
                                    Do not create customs declartions for products using this preset group
                                  </label>
                                </div>
                              </div>
                             <br>  
  
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" name="description" value="">

                              </div>
                              <div class="form-group col-md-6">
                                <label for="declared_value">Declared Value</label>
                                <input type="text" class="form-control" id="declared_value" name="declared_value" value="">

                              </div>
                            </div>
                           <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="harmonization_code">Harmonization Code</label>
                              <input type="text" class="form-control" id="harmonization_code" name="harmonization_code" value="">

                            </div>
                            <div class="form-group col-md-6">
                              <label for="country_origin">Select Country Origin</label>
                              <select class="form-control" name="country_origin" id="country_origin" value="">
                              <option>United States</option>
                              <option>India</option>
                              <option>Afganistan</option>
                              <option>China</option>
                              <option>South Africa</option>
                            </select>
                            
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary add-preset">Save changes</button>
                    <button type="submi" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
         
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
