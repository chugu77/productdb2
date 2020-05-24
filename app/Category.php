<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    protected $fillable = ['category', '_lft','_rgt', 'parent_id', 'updated_at', 'created_at'];
    use NodeTrait;

    public function children(){
      return $this->hasMany(self::class, 'parent_id');
    }
}
