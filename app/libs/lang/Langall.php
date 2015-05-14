<?php
/**
 * Created by PhpStorm.
 * User: klayn
 * Date: 12.05.15
 * Time: 1:38
 */

class Langall
{
    public static function getLangAll($segment = 'ru')
    {
        $lang = array();

        $lang['ru']['title_1'] = "Зарегистрироваться или войти";
        $lang['en']['title_1'] = "Register or sign in";

        $lang['ru']['title_2'] = "Язык сайта";
        $lang['en']['title_2'] = "Site language";

        $lang['ru']['title_3'] = "Войти";
        $lang['en']['title_3'] = "Login";

        $lang['ru']['title_4'] = "Онлайн магазин дешевых товаров";
        $lang['en']['title_4'] = "Online Shop for cheap goods";

        $lang['ru']['title_5'] = "Главная";
        $lang['en']['title_5'] = "Home";

        $lang['ru']['title_6'] = "Контакты";
        $lang['en']['title_6'] = "Contact";

        $lang['ru']['title_7'] = "О нас";
        $lang['en']['title_7'] = "About";

        $lang['ru']['title_8'] = "Блог";
        $lang['en']['title_8'] = "Blog";

        $lang['ru']['title_9'] = "Поиск";
        $lang['en']['title_9'] = "Search";

        $lang['ru']['title_10'] = "Copyright © 2013-".date('Y')." E-SHOPPER Inc. Все права защищены.";
        $lang['en']['title_10'] = "Copyright © 2013-".date('Y')." E-SHOPPER Inc. All rights reserved.";

        $lang['ru']['title_11'] = "Войдите в свою учетную запись";
        $lang['en']['title_11'] = "Login to your account";

        $lang['ru']['title_12'] = "Регистрация нового пользователя!";
        $lang['en']['title_12'] = "New User Sign Up!";

        $lang['ru']['title_13'] = "ИЛИ";
        $lang['en']['title_13'] = "OR";

        $lang['ru']['title_14'] = "Логин";
        $lang['en']['title_14'] = "Login";

        $lang['ru']['title_15'] = "Пароль";
        $lang['en']['title_15'] = "Password";

        $lang['ru']['title_16'] = "Войти";
        $lang['en']['title_16'] = $lang['en']['title_14'];

        $lang['ru']['title_17'] = "Повторите пароль";
        $lang['en']['title_17'] = "Repeat password";

        $lang['ru']['title_18'] = "Зарегистрироваться";
        $lang['en']['title_18'] = "Sign up";

        $lang['ru']['title_19'] = "Выйти";
        $lang['en']['title_19'] = "Logout";

        $lang['ru']['title_20'] = "Все товары на сайте E-Shopper";
        $lang['en']['title_20'] = "All products on the site E-Shopper";

        $lang['ru']['title_21'] = "В нашем магазине очень просто купить любые товары";
        $lang['en']['title_21'] = "In our shop is very easy to buy any goods";

        $lang['ru']['title_22'] = "Популярные товары";
        $lang['en']['title_22'] = "Featured items";

        $lang['ru']['title_23'] = "Добавить в корзину";
        $lang['en']['title_23'] = "Add to cart";

        $lang['ru']['title_24'] = "Добавить в желаемое";
        $lang['en']['title_24'] = "Add to wishlist";



        return $lang[$segment];
    }
}