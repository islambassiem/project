<?php

namespace App\Models\CreditTransfer;

use App\Models\CreditTransfer\College;
use App\Models\CreditTransfer\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
  use HasFactory;
  protected $connection = 'creditTransfer';

  protected $table = 'users';

  protected $fillable = ['name', 'email', 'empid', 'department_id', 'email_verified_at', 'password', 'remember_token' ];

  // public function subject(){
  //   return $this->hasmany(Subject::class);
  // }

  // public function college(){
  //   return $this->hasmany(College::class);
  // }
}
