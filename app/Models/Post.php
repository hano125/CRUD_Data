<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $fillable=['post_name','post_no','post_content','created_at','updated_at'];
    protected $hidden=['created_at','updated_at'];

}
