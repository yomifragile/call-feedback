<?php

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';

    protected $fillable = ['account_id','agent_id','rating','feedback_desc'];

    public function agents()
    {
        return $this->belongsTo(Agent::class,'agent_id');
    }

    public function account()
    {
        return $this->belongsTo(Account::class,'account_id');
    }

    public function getDateSubmittedAttribute()
    {
        $date = Carbon::parse($this->created_at);
        $date = $date->format('M d Y, h:m:s a');
        return $date;
    }

    public function getRatingStarsAttribute()
    {
        $rating = $this->rating;
        $feedback_id = $this->id;
        return view('admin-rating',compact('rating','feedback_id'));
    }
}
