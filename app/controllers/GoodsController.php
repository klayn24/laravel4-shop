<?php
/**
 * Created by PhpStorm.
 * User: klayn
 * Date: 14.05.15
 * Time: 23:36
 */

class GoodsController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }


    public function getAllGoods()
    {
        $this->data['title'] = $this->langAll['title_20'];
        $this->data['meta'] = $this->langAll['title_21'];

        $goodsModel = new Goods();
        //получаем все товары
        $this->data['allGoods'] = $goodsModel->getAllGoods();



        return View::make('goods.index', ['data'=>$this->data]);
    }


    public function getView($idGoods = 0)
    {
        if(!is_numeric($idGoods) && $idGoods > 0)
            return $this->myRedirect('/', $this->langError['title_4'], 'noDisplay');

        $goodsModel = new Goods();

        $this->data['infoGoods'] = $goodsModel->getInfoGoods($idGoods);


        $this->data['title'] = $this->data['infoGoods'][0]['name_'.$this->data['lang']];
        $this->data['meta'] = $this->data['title'].', '. $this->data['infoGoods'][0]['desc_'.$this->data['lang']];




        return View::make('goods.view')->with('data', $this->data);
    }

}