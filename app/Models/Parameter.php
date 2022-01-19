<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parameter extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 
        'nama_parameter',
        'id_mesin'
    ];

    public function pengecekans()
    {
        return $this->hasMany(Pengecekan::class,'id_parameter','id');
    }

    public function mesin(){
        return $this->hasMany(Mesin::class,'id_mesin','id');
    }

    // public function 
}
