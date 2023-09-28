<?php

namespace App\Models\CreditTransfer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use HasFactory;
  protected $connection = 'creditTransfer';

  protected $table = 'users';

  protected $fillable = ['name', 'email', 'empid', 'department_id', 'email_verified_at', 'password', 'remember_token' ];
}
