<?php

namespace App\Models\supplier;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class permit extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    // protected $fillable = [
    //     'id',
    //     '3mp_company_1',
    //     '3mp_company_2',
    //     '3mp_company_3',

    //     '3mp_prod_type_1',
    //     '3mp_prod_type_2',
    //     '3mp_prod_type_3',

    //     '3mp_brand_name_1',
    //     '3mp_brand_name_2',
    //     '3mp_brand_name_3',
    // ];

}

