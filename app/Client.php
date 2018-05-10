<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	protected $connection = 'mysql-generico';

    protected $table = 'connection_client';
}
