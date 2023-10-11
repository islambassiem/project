<?php

namespace App\Models\CreditTransfer;

use App\Models\CreditTransfer\College;
use Illuminate\Database\Eloquent\Model;
use App\Models\CreditTransfer\Transaction;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionSubject extends Model
{
  use HasFactory;
  protected $connection = 'creditTransfer';
  protected $table = 'transactions_subjects';
  protected $fillable = [
    'transaction_id', 'subject_id', 'user_id'
  ];

  public function subject(){
    return $this->belongsTo(Transaction::class);
  }
}
