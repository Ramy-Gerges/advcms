<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = [
    	'site_name',
    	'email',
    	'keywords',
    	'description',
    	'maintenance',
    	'maintenance_message'
    ];
}
