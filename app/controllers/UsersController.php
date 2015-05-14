<?php
/**
 * Created by PhpStorm.
 * User: klayn
 * Date: 13.05.15
 * Time: 22:54
 */

class UsersController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Показываем форму входа
     * @return mixed
     */
    public function getLogin()
    {
        if(Auth::check())
            return $this->myRedirect('/', $this->langError['title_3'], 'noDisplay');

        $this->data['title'] = $this->langAll['title_1'];
        $this->data['meta'] = $this->data['title'];
        return View::make('users.signup', ['data'=>$this->data]);
    }

    /**
     * Методом пост заносим нового юзера в бд
     * @return mixed
     */
    public function postCreateNewAccount()
    {
        if(Auth::check())
            return $this->myRedirect('/', $this->langError['title_3'], 'noDisplay');

        $validate = Validator::make(Input::all(), User::$rules);

        if($validate->passes())
        {
            $user = new User();
            $user->login = Input::get('login');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));

            $user->save();

            return $this->myRedirect('users/login', $this->langSuccess['title_1']);
        }

        return $this->myRedirect('users/login', $this->langError['title_1'], $validate);
    }

    /**
     * методом пост делаем вход в личный аккаунт юзера
     * @return mixed
     */
    public function postSignIn()
    {
        if(Auth::check())
            return $this->myRedirect('/', $this->langError['title_3'], 'noDisplay');

        $validate = Validator::make(Input::all(), User::$rules_in);
        if($validate->passes())
        {
            if(Auth::attempt(['email'=>Input::get('email'), 'password'=>Input::get('password')]))
            {
                return Redirect::intended()->with('message_ok', $this->langSuccess['title_2']);
            }

            return $this->myRedirect('users/login', $this->langError['title_2'], 'noDisplay');
        }

        return $this->myRedirect('users/login', $this->langError['title_1'], $validate);

    }

    /**
     * выход из личного аккаунта
     * @return mixed
     */
    public function getLogout()
    {
        Auth::logout();
        return $this->myRedirect('/', $this->langSuccess['title_3']);
    }


}