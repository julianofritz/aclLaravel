<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $table = 'actions';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name'
    ];

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_routes_actions', 'action_id', 'group_id');
    }
}
