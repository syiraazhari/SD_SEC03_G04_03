<?php

namespace App\Http\Livewire\Student\Merch;

use App\Models\ItemMerchandise;
use App\Models\User;
use Livewire\Component;
use App\Models\Merchandise;
use Illuminate\Support\Facades\Auth;

class StudentMerchandiseComponent extends Component
{
    public function render()
    {
        $lanyard = ItemMerchandise::where('item',1)->get();
        $notebook = ItemMerchandise::where('item',2)->get();
        $hoodie = ItemMerchandise::where('item',3)->get();
        $tshirt = ItemMerchandise::where('item',4)->get();
        $hasItem = Merchandise::where('user_id', Auth::user()->id)->get();
        $student = User::find(Auth::user()->id);
        return view('livewire.student.merch.student-merchandise-component',[
            'lanyard'=>$lanyard,
            'notebook'=>$notebook,
            'tshirt'=>$tshirt,
            'hoodie'=>$hoodie,
            'hasItem'=>$hasItem,
            'student'=>$student,
            ])->layout('layouts.base');
    }
}
