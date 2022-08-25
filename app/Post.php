<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'body',
        'category_id'
    ];
    public function getByLimit(int $limit_count = 10)
    {
        //updateed_atで降順に並べたあと、limitで制限をかける
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        //updated_atで降順に並べた後、limitで件数制限をかける
        return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    //「1対1の関係」
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}

