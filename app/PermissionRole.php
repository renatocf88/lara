<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    protected $connection = 'mysql';

    protected $table = 'permission_role';
}
