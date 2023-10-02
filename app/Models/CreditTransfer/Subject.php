<?php

namespace App\Models\CreditTransfer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
  use HasFactory;

  protected $connection = 'creditTransfer';
  protected $table = 'subjects';
  protected $fillable = ['name_en', 'code_en', 'name_ar', 'code_ar', 'hours', 'user_id'];
}
