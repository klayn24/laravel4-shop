<?php
/**
 * Created by PhpStorm.
 * User: klayn
 * Date: 15.05.15
 * Time: 0:20
 */

class Goods extends Eloquent
{
    //����� ���� ����� �������� � �������
    protected $fillable = array('availability, brand, cat_id, images_big, images_small, price, new_sale_null');

    protected $fillable_goods_lang = array('name_ru, name_en, desc_ru, desc_en');

    //����, ������� ����� �������� � �����������
    public $lang = "ru";

    //������� ���������
    public static $rules = array(
        'availability'          => '',
        'brand'                 => '',
        'cat_id'                => '',
        'images_big'            => '',
        'images_small'          => '',
        'price'                 => '',
        'new_sale_null'         => ''
    );

    //� ����� ������� ������
    protected $table = 'goods';


    /**
     * ������� ��� ������ � ����������
     * @return mixed
     */
    public function getAllGoods()
    {
        //�������� ����� � ����������
        $temp = Goods::orderBy('id', 'DESC')->joinGoodsLang()->paginate(4);

        foreach($temp as $k=>$it)
        {
            $images = explode('|goods|', $it['images_big']);
            $temp[$k]['image'] = $images[0];
        }


        return $temp;
    }

    public function getInfoGoods($idGoods = 0)
    {
        return Goods::where('id', '=', $idGoods)->joinGoodsLang()->get();
    }


    /**
     * ������� �������� �� ������� goods_lang �������� �������, ������� ����� �� ������� � ������� goods
     * @param $q
     * @return mixed
     */
    public function scopeJoinGoodsLang($q)
    {
        return $q->leftJoin('goods_lang', 'goods.id', '=', 'goods_lang.id_goods');
    }



}