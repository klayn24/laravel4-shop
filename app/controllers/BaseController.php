<?php

class BaseController extends Controller {


    //тут все языки
    public $langAll = array();
    //язык с ошибками
    public $langError = array();
    //с успешными язык
    public $langSuccess = array();

    //тут все данные будут
    public $data = array();

    public function __construct()
    {
        //устанавливаем заголовки
        $this->data['title'] = '';
        $this->data['meta'] = '';

        //получаем из url язык и передаем его всему приложению
        $this->data['lang'] = Request::segment(1);
        if($this->data['lang'] == '')
            $this->data['lang'] = 'ru';

        App::setLocale($this->data['lang']);

        //получаем все слова для нужной нам версии сайта
        $this->langAll = Langall::getLangAll($this->data['lang']);
        //язык с ошибками
        $this->langError = Langerror::getLangError($this->data['lang']);
        //с успешными язык
        $this->langSuccess = Langsuccess::getLangSuccess($this->data['lang']);

        //для всех пост запросов будет проверка на атаку
        $this->beforeFilter('csrf', array('on'=>'post'));

        $this->beforeFilter(function(){
            //тут сразу во все лайауты и вьюхи передается переменная langAll, которая содержит в себе языки
            View::share('langAll',  $this->langAll);
        });
    }

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}


    protected function myRedirect($url = '', $mess = '', $validate = null)
    {
        if($validate === null)
            return Redirect::to($url)->with('message_ok', $mess);
        elseif($validate === 'noDisplay')
            return Redirect::to($url)->with('message_error', $mess);
        else
            return Redirect::to($url)->with('message_error', $mess)->withErrors($validate)->withInput();
    }
}
