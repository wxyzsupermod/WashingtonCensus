<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'state', 'population_2010', 'population_rank'];
    public function __toString(){
        return "City Name:: <$this->name> State:: <$this->state> Population 2010:: <$this->population_2010> Population Rank:: <$this->population_rank>";
    }
}
