<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'source_url', 'source_id', 'content', 'publish_date'
    ];
}
