<?php

namespace App\Models\CreditTransfer;

use App\Models\CreditTransfer\User;
use App\Models\CreditTransfer\College;
use Illuminate\Database\Eloquent\Model;
use App\Models\CreditTransfer\Department;
use App\Models\CreditTransfer\Specialization;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
  use HasFactory;
  protected $connection = 'creditTransfer';
  protected $table = 'transactions';
  protected $fillable = [
    'student_name',
    'student_id',
    'semester',
    'college_id',
    'specialization_id',
    'department_id',
    'user_id'];


    public function user(){
      return $this->belongsTo(User::class);
    }

    public function college(){
      return $this->belongsTo(College::class);
    }

    public function specialization(){
      return $this->belongsTo(Specialization::class);
    }

    public function department(){
      return $this->belongsTo(Department::class);
    }

}
