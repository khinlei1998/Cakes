<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    //
      const ADMIN_TYPE=1;
    // default declare
    public function isOwner()
    {
        return $this->role_id === self::ADMIN_TYPE;
        // true ko return pyan
        // lat shi login win nay tae type
    }
}
