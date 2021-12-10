<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Icon;

class IconController extends Controller
{
    //
    public function __invoke() {
        $icon = new Icon;
        $icon = $icon->getAll();

        return view('icon', ['icon' => $icon]);
    } 

    public function getOne($img) {
        $icon = new Icon;
        $icon = $icon->getOne($img);

        return view('icon', ['icon' => $icon]);
    }
}
