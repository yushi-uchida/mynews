<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = array('id');

    // 以下を追記 14 投稿データを保存しよう 課題５の一部
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
    public function profilehistory()
    {
        return $this->hasMany('App\ProfileHistory');
    }
}