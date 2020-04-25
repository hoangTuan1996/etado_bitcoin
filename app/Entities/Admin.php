<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class Admin.
 *
 * @package namespace App\Entities;
 */
class Admin extends Authenticatable implements Transformable
{
    use TransformableTrait, HasRoles, SoftDeletes;
    protected $guard = "admin";
    protected $guard_name = "admin";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'phone', 'birthday', 'status', 'limit_account'];

}
