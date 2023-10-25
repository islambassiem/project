<?php

namespace App\Models\CreditTransfer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
  use HasFactory;

  protected $connection = 'creditTransfer';

  protected $table = 'departments';

  protected $fillable = ['name'];
}
