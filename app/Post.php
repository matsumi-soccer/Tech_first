<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getByLimit(int $limit_count = 10)
    {
        //updateed_atで降順に並べたあと、limitで制限をかける
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
}
