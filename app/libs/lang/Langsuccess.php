<?php
/**
 * Created by PhpStorm.
 * User: klayn
 * Date: 14.05.15
 * Time: 0:42
 */

class Langsuccess
{
    public static function getLangSuccess($segment = 'ru')
    {
        $lang = array();

        $lang['ru']['title_1'] = "Вы успешно зарегистрировались. Войдите в свой аккаунт";
        $lang['en']['title_1'] = "You have registered successfully. Log into your account";

        $lang['ru']['title_2'] = "Вы успешно вошли в свой аккаунт";
        $lang['en']['title_2'] = "You have successfully logged into your account";

        $lang['ru']['title_3'] = "Вы успешно вышли из аккаунта";
        $lang['en']['title_3'] = "You have successfully emerged from the account";


        return $lang[$segment];
    }
}