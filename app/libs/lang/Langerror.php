<?php
/**
 * Created by PhpStorm.
 * User: klayn
 * Date: 14.05.15
 * Time: 0:37
 */

class Langerror
{
    public static function getLangError($segment = 'ru')
    {
        $lang = array();

        $lang['ru']['title_1'] = "Вы допустили ошибку";
        $lang['en']['title_1'] = "You made a mistake";

        $lang['ru']['title_2'] = "Человек с таким email и паролем не найден";
        $lang['en']['title_2'] = "A person with this email and password was not found";

        $lang['ru']['title_3'] = "Вы уже вошли в свой личный кабинет";
        $lang['en']['title_3'] = "You are already logged in to your personal cabinet";


        return $lang[$segment];
    }
}