<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
  'register_date',
  'register_target',
  'register_qualification',
  'register_price',
  'register_process',
  'register_document',
  'register_contact',
  'register_agree',
    ];
}
