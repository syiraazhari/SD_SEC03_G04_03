<?php

namespace App\Http\Livewire\Admin\Announcement;

use App\Models\Announcement;
use Livewire\Component;

class AddAnnouncementComponent extends Component
{
    public $title;
    public $subtitle;
    public $status;

    public function addAnnouncement()
    {
        $announcement = new Announcement();
        $announcement->title = $this->title;
        $announcement->subtitle = $this->subtitle;
        $announcement->status = $this->status;
        $announcement->save();
        session()->flash('message','Announcement has been added successfully');
    }
    public function render()
    {
        $announcement = Announcement::all();
        return view('livewire.admin.announcement.add-announcement-component',['announcement'=>$announcement])->layout('layouts.base');
    }
}
