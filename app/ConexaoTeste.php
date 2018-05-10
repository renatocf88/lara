<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConexaoTeste extends Model
{
    protected $connection = 'mysql-log';

    protected $table = 'log';


}
