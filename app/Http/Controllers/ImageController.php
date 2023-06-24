<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use PDF;
class ImageController extends Controller
{
    public function index()
    {
        $data = Image::all();
        return view('pages.user', ['data' => $data]);
    }
    public function generatepdf()
    {
        $data =Image::all();
        $pdf = PDF::loadView('pages.user',['data'=>$data]);
        return $pdf->download('latihanpdf.pdf');

    }
}
