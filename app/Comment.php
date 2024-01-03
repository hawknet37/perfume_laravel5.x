<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'comment', 'comment_name', 'comment_date','comment_product'
    ];
    protected $primaryKey = 'comment_id';
 	protected $table = 'tbl_comment';
}