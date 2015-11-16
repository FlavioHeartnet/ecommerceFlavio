<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{


    use AuthenticatesAndRegistersUsers, ThrottlesLogins;


    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function postLogin()
    {

        $email = $_POST['email'];
        $senha = $_POST['password'];

        $query = User::where('name','=',$email, 'and', 'password', '=', $senha);

            $validar = Count($query);

            if($validar == 0){

                $error = "Usuario invalido";

            }else{

                $error = 'Sucesso';

            }

            return view('auth.login', compact($query,'user'), compact($error,'error'));


    }

    public function getLogin()
    {


    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
