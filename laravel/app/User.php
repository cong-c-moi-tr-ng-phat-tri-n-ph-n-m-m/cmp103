<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Các thuộc tính có thể gán khối lượng.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * Các thuộc tính cần được ẩn cho mảng.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
}
