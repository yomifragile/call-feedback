<?php

namespace App\Model;

use App\Traits\AdminTraits;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $table = 'agents';
    protected $fillable = ['fname','lname'];

    use AdminTraits;

    public function feedbacks()
    {
        $this->hasMany('FeedbackController');
    }

    public function getDashboardActionAttribute()
    {
        $id = $this->id;
        return view('admin_agent_table_action',compact('id'));
    }
}
