<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;

    public function getAll() {
        $arr = array();
        for ($i = 1;  $i < 3; $i++) {
            $arr[] = "icon".$i.".png";
        }
        return $arr;
    }

    public function getOne($img) {
        return array($img);
        
    }
}
