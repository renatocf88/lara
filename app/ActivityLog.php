<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ActivityLog extends \Spatie\Activitylog\Models\Activity
{
    
    protected $connection = 'mysql-log';
    protected $table = "activity_log";
}