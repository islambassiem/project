<?php

namespace App\Models\CreditTransfer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionSubject extends Model
{
  use HasFactory;
  protected $connection = 'creditTransfer';
  protected $table = 'transactions_subjects';
  protected $fillable = [
    'transaction_id', 'subject_id', 'user_id'
  ];
}
