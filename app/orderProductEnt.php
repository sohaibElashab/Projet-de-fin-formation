<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderProductEnt extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'qty',
        'type'
    ];

    public function pic($id)
    {
        $pic = ent::where('id',$id)->get('picture');
        return $pic[0]['picture'];
    }
  
    public function name($id)
    {
        $name = ent::where('id',$id)->get('name');
        return $name[0]['name'];
    }
  
    public function price($id)
    {
        $price = ent::where('id',$id)->get('price');
        return $price[0]['price'];
    }
}
