<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Model\CustomerModel;
use App\Providers\RouteServiceProvider;
use App\Rules\EmailRules;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
        $this->middleware('guest:web');
    }

    public function register(Request $request)
    {
        $this->Rules($request);
        CustomerModel::create([
            'name' => $this->setCustomerName($request),
            'email' => $request['email'],
            'gender' => $request['gender'],
            'phone_number' => $request['phone_number'],
            'password' => bcrypt($request['password']),
            'registration_type' => CustomerModel::Mobile,
            'date_added' => now()
        ]);

    }


    protected function setCustomerName($request)
    {
        return ucfirst($request->first_name) . ' ' . ucfirst($request->last_name);
    }


    protected function Rules($request)
    {
        $request->validate([
            'first_name' => 'required|string|between:2,50',
            'last_name' => 'required|string|between:2,50',
            'email' => ['required', 'string', 'email', 'max:100', 'unique,customers', new EmailRules()],
            'password' => 'required|string|confirmed|min:6',
            'phone_number' => ['required', 'numeric', 'digits_between:7,7'],
            'gender' => 'required|string',
        ]);
    }


}
