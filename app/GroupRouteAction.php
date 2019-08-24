<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupRouteAction extends Model
{
    protected $table = 'group_routes_actions';

    protected $primaryKey = 'id';

    protected $fillable = [
        'group_id',
        'route_id', 
        'action_id'
    ];

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }

    public function route()
    {
        return $this->belongsTo(Route::class, 'route_id', 'id');
    }

    public function action()
    {
        return $this->belongsTo(Action::class, 'action_id', 'id');
    }
}
