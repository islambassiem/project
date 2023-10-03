<?php

namespace App\Models\CreditTransfer;

use App\Models\CreditTransfer\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class College extends Model
{
  use HasFactory;


  protected $connection = 'creditTransfer';

  protected $table = 'colleges';

  protected $fillable = ['college_en', 'college_ar','user_id'];

  public function user(){
    return $this->belongsTo(User::class);
  }

}
