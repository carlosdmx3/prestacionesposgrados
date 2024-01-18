<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    static $rules = [
		'name'            => 'required',
		'oapellidopaterno'=> 'required',
		'oapellidomaterno'=> 'required',
		'orfc'            => 'required',
		'ocurp'           => 'required',
		'ocorreo'         => 'required',
		'ofolio'          => 'required',
		'email'           => 'required',
        'password'        => 'required',
		'orol'         => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [ 'id',
                            'name',
                            'oapellidopaterno',
                            'oapellidomaterno',
                            'orfc',
                            'ocurp',
                            'ocorreo',
                            'ofolio',
                            'email',
                            'password',
                            'istatus',
                            'orol',
                            ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
