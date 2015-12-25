<?php

namespace App\Http\Controllers;
use App\Models\Login;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class IndexController extends Controller
{
    public function index(){




            if (Input::has('name')){
                $name=(Input::get('name'));
                $password=(Input::get('password'));


            }



        $oLogin= new Login();
        $where=array('name'=>'test');
        $login=$oLogin->select($where);

        return view('index.index', ['h'=>'iugy']);

    }
}