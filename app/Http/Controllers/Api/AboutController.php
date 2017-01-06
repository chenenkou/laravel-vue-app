<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function getIntro()
    {
        return response()->json([
            'title' => '个人简介',
            'content' => '...',
        ]);
    }
}
