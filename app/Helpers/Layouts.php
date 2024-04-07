<?php 

declare(strict_types=1); 

namespace app\Helpers;

use Exception;

class Layouts { 
    public static function render(array $structures, array $data = null)
    {
        if (!is_array($structures)) throw new Exception("Error in layout - System Function");
        
        if (!empty($data) && is_array($data)) {
            extract($data);
        }

        foreach ($structures as $st => $structure) {
            include("../src/views/$structure.php");
        }
    }
}