<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadPDFController extends Controller
{
    public $name;
    public$file_path;

    public function downloadFile(){
        $path = File::all()->value("file_path");
        return Storage::disk('s3')->download($path);
    }
}
