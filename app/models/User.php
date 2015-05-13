<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    //поля которые можно переопределять
    protected $fillable = array('login', 'name', 'email', 'lastname', 'password', 'phone');

    //правила для регистрации
    public static $rules = array(
        'login' => 'required|min:6|max:20|alpha_dash',
        'name' => 'min:2',
        'email' => 'required|email|unique:users',
        'lastname' => 'min:2',
        'password' => 'required|alpha_num|between:6,12|confirmed',
        'password_confirmation' => 'required|alpha_num|between:6,12',
        'phone' => 'between:9,20'
    );

    //правила для входа в аккаунт
    public static $rules_in = array(
        'email' => 'required|email',
        'lastname' => 'min:2',
        'password' => 'required|alpha_num|between:6,12',
    );

}
