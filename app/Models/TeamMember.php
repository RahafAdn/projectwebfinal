<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    /**
     * @var string
     */
    protected $table = 'team_members';

    /**
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $fillable = ['project_leader_id', 'staff_id','project_id'];

    public function projectLeader()
    {
        return $this->belongsTo(User::class, 'project_leader_id');
    }


    public function staff()
    {
        return $this->belongsTo(Staff::class, 'staff_id');
    }


    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }


    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('project_leader_id', function (Builder $builder) {
            if (auth()->check() && auth()->user()->role == 'PL') {
                return $builder->where('project_leader_id', auth()->id());
            }
        });
    }


}
