<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * @var string
     */
    protected $table = 'projects';

    /**
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * 
     * @var array
     */
    protected $fillable = ['name','start_date', 'end_date', 'duration', 'cost', 'requirments', 'client', 'project_status', 'project_stage', 'project_category', 'project_leader_id'];

   
    public function projectLeader()
    {
        return $this->belongsTo(User::class, 'project_leader_id');
    }

    
    public function teamMembers()
    {
        return $this->hasMany(TeamMember::class);
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
