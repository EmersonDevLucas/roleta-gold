<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormRolete extends Model
{
    use HasFactory;

    protected $table = 'LeadsRoletas';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'sobrenome', 'placa', 'email', 'tel', 'ppv'];
}
