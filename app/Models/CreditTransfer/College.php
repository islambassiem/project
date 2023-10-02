<?php

namespace App\Models\CreditTransfer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
  use HasFactory;


  protected $connection = 'creditTransfer';

  protected $table = 'colleges';

  protected $fillable = ['college_en', 'college_ar', 'user_id'];

}
