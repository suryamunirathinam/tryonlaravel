<?php
// this is the model 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    // table name
    protected $table = 'posts';
    // primary key
    public $primaryKey = 'id';
    public $timestamps = true;
}
