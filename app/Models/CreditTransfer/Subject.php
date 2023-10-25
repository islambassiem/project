<?php

namespace App\Models\CreditTransfer;

use App\Models\CreditTransfer\User;
use App\Models\CreditTransfer\College;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
  use HasFactory;

  protected $connection = 'creditTransfer';
  protected $table = 'subjects';
  protected $fillable = ['name', 'hours', 'college_id','user_id'];

  public function user(){
    return $this->belongsTo(User::class);
  }


  public function college(){
    return $this->belongsTo(College::class);
  }

}
