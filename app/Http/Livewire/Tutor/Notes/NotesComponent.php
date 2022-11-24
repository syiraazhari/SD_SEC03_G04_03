<?php

namespace App\Http\Livewire\Tutor\Notes;

use App\Models\File;
use App\Models\Notes;
use Livewire\Component;
use Illuminate\Http\Request;


class NotesComponent extends Component
{
    public $file;
    public function fileUpload(Request $req){
        $this->validate([
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
    public function render()
    {
        return view('livewire.tutor.notes.notes-component')->layout('layouts.base');
    }
}
