<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PresetGroup;

class PresetGroupController extends Controller
{
  public function PresetGroup(Request $request , $id)
  {
      $request->validate([
          'preset_group_name'=>'required',
          'domestic_service'=>'required',
          'domestic_package'=>'required',
          'domestic_confirmation'=>'required',
          'international_service'=>'required',
          'international_package'=>'required',
          'international_confirmation'=>'required',
          'package_weight'=>'required',
          'package_length'=>'required',
          'package_width'=>'required',
          'package_height'=>'required',
          'customs_dimension'=>'required',
          'description'=>'required',
          'declared_value'=>'required',
          'type_of_store'=>'required',
          'type_of_products'=>'required',
          'harmonization_code'=>'required',
          'country_origin'=>'required'

      ]);
      $preset_groups = new PresetGroup;
      $preset_groups->preset_group_name = $request->input('preset_group_name');
      $preset_groups->domestic_service = $request->input('domestic_service');
      $preset_groups->domestic_package = $request->input('domestic_package');
      $preset_groups->domestic_confirmation = $request->input('domestic_confirmation');
      $preset_groups->international_service = $request->input('international_service');
      $preset_groups->international_package = $request->input('international_package');
      $preset_groups->international_confirmation = $request->input('international_confirmation');
      $preset_groups->package_weight = $request->input('package_weight');
      $preset_groups->package_length = $request->input('package_length');
      $preset_groups->package_width = $request->input('package_width');
      $preset_groups->package_height = $request->input('package_height');
      $preset_groups->customs_dimension = $request->input('customs_dimension');
      $preset_groups->description = $request->input('description');
      $preset_groups->declared_value = $request->input('declared_value');
      $preset_groups->type_of_store = $request->input('type_of_store');
      $preset_groups->type_of_products = $request->input('type_of_products');
      $preset_groups->harmonization_code = $request->input('harmonization_code');
      $preset_groups->country_origin = $request->input('country_origin');
      $res = $preset_groups->save();
      if($res)
      {
         return back()->with('msg',"Date Saved !");
      }else{
          return back()->with('msg',"something wrong");
      }
  }
  public function show(PresetGroup $preset_groups)
  {
 
    $preset_groups = PresetGroup::all();

    return view('layouts.product.presetGroup',['preset_groups'=>$preset_groups]);
  }

  public function edit(PresetGroup $preset_groups)
  {
      return view('layouts.product.presetGroup',compact('preset_groups'));
  }
  public function update(Request $request , $id)
  {
    $preset_groups = PresetGroup::find($request->id);
    $preset_groups->preset_group_name = $request->preset_group_name;
    $preset_groups->domestic_service = $request->domestic_service;
    $preset_groups->domestic_package = $request->domestic_package;
    $preset_groups->domestic_confirmation = $request->domestic_confirmation;
    $preset_groups->international_service = $request->international_service;
    $preset_groups->international_package = $request->international_package;
    $preset_groups->international_confirmation = $request->international_confirmation;
    $preset_groups->package_weight = $request->package_weight;
    $preset_groups->package_length = $request->package_length;
    $preset_groups->package_width = $request->package_width;
    $preset_groups->package_height = $request->package_height;
    $preset_groups->customs_dimension = $request->customs_dimension;
    $preset_groups->description = $request->description;
    $preset_groups->declared_value = $request->declared_value;
    $preset_groups->type_of_store = $request->type_of_store;
    $preset_groups->type_of_products = $request->type_of_products;
    $preset_groups->harmonization_code = $request->harmonization_code;
    $preset_groups->country_origin = $request->country_origin;
    $res = $preset_groups->save();
    if($res)
    {
       return back()->with('msg',"Date update !");
    }else{
        return back()->with('msg',"something wrong");
    }
  }

 
  
  public function destroy(Request $request)
  {

   $result=PresetGroup::where('id','=',$request->id)->delete();

  return redirect()->route('preset-group')
    ->with('success','data has been deleted successfully');
 
  }
  
}
