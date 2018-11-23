<?php

namespace App\Traits;

trait AdminTraits{

    public function getFullNameAttribute()
    {
        return $this->fname . ' ' . $this->lname;
    }
}
