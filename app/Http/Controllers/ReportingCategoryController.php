<?php

namespace App\Http\Controllers;
use App\Models\ReportingCategory;

use Illuminate\Http\Request;

class ReportingCategoryController extends Controller
{
 public function ReportingCategory(Request $request)
 {
    $request->validate([
        'product_category'=>'required'
    ]);
    $reporting_categories = new ReportingCategory;
    $reporting_categories->product_category = $request->input('product_category');
    $res = $reporting_categories->save();
    if($res)
    {
       return back()->with('msg',"Date Saved !");
    }else{
        return back()->with('msg',"something wrong");
    }
 }
 public function show(ReportingCategory $reporting_categories)
 {

    $reporting_categories = ReportingCategory::all();
    //dd($reporting_categories);

   return view('layouts.product.reportingCategory' ,['reporting_categories'=>$reporting_categories]);
 }
 public function destroy(Request $request)
 {

  $result=ReportingCategory::where('id','=',$request->id)->delete();

 return redirect()->route('reporting-category')
   ->with('success','data has been deleted successfully');

 }
 public function edit(ReportingCategory $reporting_categories)
 {
     return view('layouts.product.reportingCategory',compact('reporting_categories'));
 }
 public function update(Request $request)
 {

   
   $reporting_categories = ReportingCategory::find($request->id);
   $reporting_categories->product_category = $request->product_category;
   $res = $reporting_categories->save();
   if($res)
   {
      return back()->with('msg',"Date update !");
   }else{
       return back()->with('msg',"something wrong");
   }
 }



}
