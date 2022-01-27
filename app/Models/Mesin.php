<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mesin extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_mesin',
        'type_mesin',        
    ];

    // tabel yang berelasi
    // public function parameters()
    // {
    //     return $this->hasMany(Parameters::class,'id_mesin','id');
    // }

    public function parameters(){
        return $this->hasMany(Parameter::class,'id_mesin','id');
    }

    // ada di pengecekans
    public function pengecekans()
    {
        return $this->hasMany(Pengecekan::class,'id_mesin','id');
    }
}
