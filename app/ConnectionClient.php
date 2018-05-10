<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConnectionClient extends Model
{
    
	protected $connection = 'mysql-generico';

    protected $table = 'connection_client';

    public static function getConnectionClient($client){
    	return self::join('client','client.id','=','connection_client.id_client')
    				->where('link',$client)->get()->toArray();
    }
}
