<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportingCategory extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $fillable = [
        'product_category',
    ];
}
