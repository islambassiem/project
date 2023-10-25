<?php

namespace App\Models\CreditTransfer;

use App\Models\CreditTransfer\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Specialization extends Model
{
  use HasFactory;
  protected $connection = 'creditTransfer';
  protected $table = 'specializations';
  protected $fillable = ['name', 'user_id'];

  public function user(){
    return $this->belongsTo(User::class);
  }
}
