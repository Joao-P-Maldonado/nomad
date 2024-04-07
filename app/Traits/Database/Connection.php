<?php

declare(strict_types=1);
namespace app\Traits\Database;

use PDO;
use PDOException;

trait Connection 
{
    protected function on(): mixed
    {
        try{
            $ligation = new PDO(
                'mysql:' .
                    'host=' . SERVER . ';' .
                    'dbname=' . DATABASE . ';' .
                    'charset=' . CHARSET,
                USERNAME,
                PASSWORD,
                array(PDO::ATTR_PERSISTENT => true)
            );

            return $ligation;
        }catch(PDOException $e){
            echo 'Error start connection: ' . $e->getMessage();
            return false;
        }
    }
}