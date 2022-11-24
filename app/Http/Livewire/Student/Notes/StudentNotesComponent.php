<?php

namespace App\Http\Livewire\Student\Notes;

use App\Models\File;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class StudentNotesComponent extends Component
{
    public function downloadFile(){
        $path = File::all()->value("file_path");
        return Storage::download($path);
    }
    public function render()
    {
        $notes = File::all();
        return view('livewire.student.notes.student-notes-component',['notes'=>$notes])->layout('layouts.base');
    }
}
