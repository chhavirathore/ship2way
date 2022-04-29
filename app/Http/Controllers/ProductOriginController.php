<?php

namespace App\Http\Controllers;
use App\Models\ProductOrigin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class ProductOriginController extends Controller
{
    public function productOrigin(Request $request)
    {
    
            
        $validatedData = $request->validate([
            'company_name' => 'required',
            'customer_name' => 'required|string',
            'user_id' => 'required',
            'tax_id' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'pincode' => 'required',
            'email' => 'required',
            'wechat_id' => 'required',
            'whatsapp_id' => 'required',
            'line_id' => 'required',
            'freight_company' => 'required',
            'contact_name' => 'required',
            'company_address' => 'required',
            'telephone_no'=>'required',
            'app_id'=>'required'   
        ]); 
        $product_origins = new ProductOrigin;  
        $product_origins->company_name = $request->input('company_name');
        $product_origins->customer_name = $request->input('customer_name');
        $product_origins->user_id = $request->input('user_id');
        $product_origins->tax_id = $request->input('tax_id');
        $product_origins->address = $request->input('address');
        $product_origins->city = $request->input('city');
        $product_origins->state = $request->input('state');
        $product_origins->pincode = $request->input('pincode');
        $product_origins->email = $request->input('email');
        $product_origins->whatsapp_id = $request->input('whatsapp_id');
        $product_origins->freight_company = $request->input('freight_company');
        $product_origins->contact_name = $request->input('contact_name');
        $product_origins->company_address = $request->input('company_address');
        $product_origins->telephone_no = $request->input('telephone_no');
        $product_origins->app_id = $request->input('app_id');
        $res = $product_origins->save();
        if($res)
        {
           return back()->with('msg',"Date Saved !");
        }else{
            return redirect('msg',"something wrong");
        }
        
         

    }    
}
