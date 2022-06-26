<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FileRequest;
use Carbon\Carbon;
use DateTime;
use Symfony\Component\HttpFoundation\File\File;

class GambarController extends Controller
{
    public function gambarhotel(FileRequest $request)
    {
        $gambar=$request->file('gambar')->getClientOriginalName().Carbon::now();
        $folderupload=$request->file('gambar')->store('public.gambarhotel');
        $upload -> move($folderupload,$gambar);
    }
}
