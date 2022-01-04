<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengecekan extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type_pengecekan',
        'id_mesin',
        'id_user',
        'id_parameter',
    ];

    public function user(){
        return $this->belongsTo(User::class,'id_user','id');
    }
    public function mesin(){
        return $this->belongsTo(Mesin::class,'id_mesin','id');
    }
    public function parameter(){
        return $this->belongsTo(Parameter::class,'id_parameter','id');
    }
    
}
