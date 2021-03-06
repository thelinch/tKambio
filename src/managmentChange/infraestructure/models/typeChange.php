<?php

namespace managmentChange\infraestructure\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class typeChange extends Model
{
    use SoftDeletes;


    use HasFactory;
    protected $table = "change_type";
    protected $fillable = ["tc_venta", "tc_compra", "fechaCreacion"];
    protected $primaryKey = 'id';
}
