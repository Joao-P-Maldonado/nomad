<?php

declare(strict_types=1);
namespace app\Traits\Database\Query;
use app\Traits\Database\Connection;
use Exception;
use PDO;

trait Select
{
    use Connection;
    private $db;

    public function __construct()
    {
        $this->db = $this->on();
    }

    private function off()
    {
        $this->db = null;
    }
    
    protected function findAll(string $sql, array $params = [])
    {
        try{
            $query = $this->db->prepare($sql);
            $query->execute($params);
            $result = $query->fetchAll(PDO::FETCH_CLASS);

            $this->off();
            return $result;
        }catch(Exception $e){
            $this->off();
            echo  $e->getMessage();
            return;
        }
    }

    protected function findOne(string $sql, array $params = [])
    {
        try{
            $query = $this->db->prepare($sql);
            $query->execute($params);
            $result = $query->fetch(PDO::FETCH_ASSOC);

            $this->off();
            return $result;
        }catch(Exception $e){
            echo  $e->getMessage();
            return;
        }
    }
}