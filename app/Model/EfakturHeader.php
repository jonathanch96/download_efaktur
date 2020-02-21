<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EfakturHeader extends Model
{
  protected $fillable=[
    "no_nota",
    "no_fp",
    "cust_code",
    "cust_group",
    "cust_name",
    "cust_address",
    "tgl_nota",
    "fp_scan_path",
    "nota_scan_path",

  ];
}
