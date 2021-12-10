<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sticker;

class StickerController extends Controller
{
    //
   public function __invoke() {
       $sticker = new Sticker;
       $sticker = $sticker->getAll();

       return view('sticker', ['st' => $sticker]);


   }

   public function getOne($img) {
       $sticker = new Sticker;
       $sticker = $sticker->getOne($img);

       return view('sticker', ['st' => $sticker]);
   }
}
