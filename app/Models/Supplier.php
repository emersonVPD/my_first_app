<?php

namespace App\Models;

use App\Models\supplier\major_3_products;
use App\Models\supplier\major_customer_present;
use App\Models\supplier\principal_banks;
use App\Models\supplier\business_registries;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
    'id','datesub','company_name',
    'company_addr','company_phone','plant_ware',
    'fax_no','email','tob',
    'auth_capital','yrs_business','nature_business',
    'prod_lines','src_materials','principal_addrs',
    'terms_payment','others','credit_amount',
    'no_of_vehicle',
];
public function major(){
    return $this->hasOne(major_customer_present::class);
    // return $this->hasOne(principal_banks::class);
}

public function principal(){
    return $this->hasOne(principal_banks::class);
    // return $this->hasOne(principal_banks::class);
}

public function business(){
    return $this->hasOne(business_registries::class);
    // return $this->hasOne(principal_banks::class);
}

public function m3p(){
    return $this->hasOne(major_3_products::class);
    // return $this->hasOne(principal_banks::class);
}
}
