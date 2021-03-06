<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected static function boot()
    {
        parent::boot();
        
        static::addGlobalScope('age', function (Builder $builder) {
            $builder->where('age', '>', 20);
        });
    }

    public function getData()
    {
        return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }

    public function scopeNameEquql($query, $str)
    {
        return $query->where('name', $str);
    }

    public function scopeAgeGreaterThan($query, $n)
    {
        return $query->where('age', '>=', $n);
    }

    public function scopeAgeLessThan($query, $n)
    {
        return $query->where('age', '<=', $n);
    }
}
