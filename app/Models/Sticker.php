<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sticker extends Model
{
    use HasFactory;

    public function getAll() {
        $arr = array();
        for ($i = 1; $i < 5; $i++) {
            $arr[] = "ami".$i.".jpg"; 
        }
        return $arr;
    }

    public function getOne($img) {
        return array($img);
    }

}
