<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Yajra\DataTables\Html\Editor\Fields\Hidden;
use Tymon\JWTAuth\Contracts\JWTSubject;

class UserModel extends Authenticatable implements JWTSubject
{
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'username',
        'nama',
        'password',
        'level_id',
        'image' // tambahan
    ];

    public function level()
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($image) => url('/storage/posts/' . $image),
        );
    }
}

// class UserModel extends Authenticatable implements JWTSubject
// {
//     public function getJWTIdentifier()
//     {
//         return $this->getKey();
//     }
//     public function getJWTCustomClaims()
//     {
//         return[];
//     }

//     use HasFactory;

//     protected $table = 'm_user';
//     protected $primaryKey = 'user_id';
//     protected $fillable = ['username', 'password', 'nama','user_profile', 'level_id', 'created_at', 'updated_at'];
//     protected $hidden = ['password']; // jangan di tampilkan saat select
//     protected $casts = [
//         'password' => 'hashed' // casting password agar otomatis di hash
//     ];
//     // Relasi ke tabel level
//     public function level(): BelongsTo
//     {
//         return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
//     }
//     /**
//      * Mendapatkan nama role
//      */
//     public function getRoleName(): string
//     {
//         return $this->level->level_nama;
//     }

//     /**
//      * Cek apakah user memiliki role tertentu
//      */
//     public function hasRole($role): bool
//     {
//         return $this->level->level_kode == $role;
//     }
//     /**
//      * Mendapatkan kode role
//      */
//     public function getRole(): string
//     {
//         return $this->level->level_kode;
//     }

// }
