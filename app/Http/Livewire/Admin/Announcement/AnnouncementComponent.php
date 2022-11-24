<?php

namespace App\Http\Livewire\Admin\Announcement;

use App\Models\Announcement;
use Livewire\Component;

class AnnouncementComponent extends Component
{
    public function render()
    {
        $announcement = Announcement::all();
        return view('livewire.admin.announcement.announcement-component',['announcement'=>$announcement])->layout('layouts.base');
    }
}
