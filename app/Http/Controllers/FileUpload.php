<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUpload extends Controller
{
    public function createForm(){
        return view('livewire.tutor.notes.notes-component')->layout('layouts.base');
    }
    public function fileUpload(Request $req){
            $req->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
            ]);
            $fileModel = new File;
            if($req->file()) {
                $fileName = time().'_'.$req->file->getClientOriginalName();
                $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
                $fileModel->name = time().'_'.$req->file->getClientOriginalName();
                $fileModel->file_path = '/storage/' . $filePath;
                $fileModel->save();
                return back()
                ->with('success','File has been uploaded.')
                ->with('file', $fileName);
            }
    }

}