<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
class Data extends Model {
     use SearchableTrait;
	  protected $searchable = [
        'columns' => [
            'title' => 10,
           
        ],
    ];
    public function posts()
    {
        return $this->hasMany('Post');
    }
	protected $fillable = [];
	
	protected $table = 'data';

}
