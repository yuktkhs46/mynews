<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );

    public function histories()
    {
      return $this->hasMany('App\Models\History');
    }
}
