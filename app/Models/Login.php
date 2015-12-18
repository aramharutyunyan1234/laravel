<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\DB;
class Login extends Model
{


    public function select($where){


        $user = DB::table('login')->where('name', $where)->first();


        $users = DB::table('login')
            ->where('name',  $where['name'])
            ->where('password', $where['password'])
            ->orWhere('name', 'John')
            ->get();



        return $user->name;

    }

}
