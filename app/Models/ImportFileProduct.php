<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class ImportFileProduct extends Model
// {
//     use HasFactory;
//     protected $fillable = [
//         'sku',
//         'loc1',
//         'loc2',
//         'loc3',
//         'loc4',
//         'stock',
//         'record_threshold',
//         'cost'
//     ];
// }
class Page extends Model {

    public static function insertData($data){
 
       $value=DB::table('csv_data')->where('product_name', $data['product_name'])->get();
       if($value->count() == 0){
          DB::table('csv_data')->insert($data);
       }
    }
 
 }
