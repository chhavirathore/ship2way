<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresetGroup extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $primaryKey='id';
    protected $fillable = [
        'domestic_service','description', 'package_width', 'package_height', 'package_length','type_of_products','package_length','package_width','package_weight',
        'country_origin',
     
    ];
   
}
