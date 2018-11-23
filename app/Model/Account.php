<?php

namespace App\Model;

use App\Traits\AdminTraits;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';
    protected $fillable = ['fname','lname'];

    use AdminTraits;

    public function getDashboardActionAttribute()
    {
        $id = $this->id;
        return view('admin_account_table_action',compact('id'));
    }
}
