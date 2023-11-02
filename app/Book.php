<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'book_id' => 'required',
        'title' => 'required',
        'price' => 'required'
    );

    public function getData()
    {
        return $this->id . ': ' . $this->title;
    }
}
