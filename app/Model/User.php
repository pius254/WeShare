<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	// Change default settings
    public $primaryKey = 'email';
    public $incrementing = false;

    // public static function update_pass(Request $request)
    // {
    	
    // }

}
