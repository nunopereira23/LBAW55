<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use DateTime;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/my_profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'birthdate' => 'date',
            'profile_picture_path' => '',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $file = $_FILES['file']['name'];
        $c_image_tmp = $_FILES['file']['tmp_name'];

        if ($file == '') {
            $destination = '';
        } else {
            $destination = 'storage/images/user/' . $file;
        }

        move_uploaded_file($c_image_tmp, $destination);

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'nr_warnings' => 0,
            'profile_picture_path' => $destination == '' ? null : $destination,
            'password' => bcrypt($data['password']),
            'birthdate' => null,
        ]);
    }
}
