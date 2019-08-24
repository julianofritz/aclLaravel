<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';

    protected $primaryKey = 'id';
    
    protected $fillable = [
        'name',
    ];

    public function routes()
    {
        return $this->belongsToMany(Route::class, 'group_routes_actions', 'group_id', 'route_id');
    }

    public function actions()
    {
        return $this->belongsToMany(Action::class, 'group_routes_actions', 'group_id', 'action_id');
    }

    public function routeActions($routeId)
    {
        return $this->belongsToMany(Action::class, 'group_routes_actions', 'group_id', 'action_id')->wherePivot('route_id', $routeId);
    }
}
