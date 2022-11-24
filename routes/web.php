<?php

use App\Http\Controllers\DownloadPDFController;
use App\Http\Controllers\FileUpload;
use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ChangePasswordComponent;

use App\Http\Livewire\Tutor\Notes\NotesComponent;
use App\Http\Livewire\Admin\Class\MeetingComponent;
use App\Http\Livewire\Student\Tutor\TutorComponent;
use App\Http\Livewire\Admin\Class\RecordedComponent;
use App\Http\Livewire\Admin\Class\ScheduleComponent;
use App\Http\Livewire\Student\Subs\SubscriptionForm;
use App\Http\Livewire\Student\Subs\GoldFormComponent;
use App\Http\Livewire\Admin\Class\AddMeetingComponent;

use App\Http\Livewire\Student\Subs\BasicFormComponent;
use App\Http\Livewire\Admin\Class\AddRecordedComponent;
use App\Http\Livewire\Admin\Class\AddScheduleComponent;
use App\Http\Livewire\Admin\Merch\MerchandiseComponent;
use App\Http\Livewire\Admin\Subs\SubscriptionComponent;
use App\Http\Livewire\Student\Form\AttendanceComponent;
use App\Http\Livewire\Admin\Order\OrderHistoryComponent;

use App\Http\Livewire\Admin\Order\OrderPurchaseComponent;
use App\Http\Livewire\Student\Subs\PlatinumFormComponent;
use App\Http\Livewire\Tutor\Class\TutorScheduleComponent;
use App\Http\Livewire\Admin\Profile\AdminProfileComponent;
use App\Http\Livewire\Tutor\Profile\TutorProfileComponent;
use App\Http\Livewire\Tutor\Merch\TutorMerchandiseComponent;
use App\Http\Livewire\Tutor\Subs\TutorSubscriptionComponent;
use App\Http\Livewire\Student\Class\StudentRecordedComponent;
use App\Http\Livewire\Student\Class\StudentScheduleComponent;
use App\Http\Livewire\Tutor\StudentList\StudentListComponent;
use App\Http\Livewire\Admin\Profile\AdminEditProfileComponent;
use App\Http\Livewire\Student\Profile\StudentProfileComponent;
use App\Http\Livewire\Admin\Announcement\AnnouncementComponent;
use App\Http\Livewire\Student\Merch\StudentMerchandiseComponent;
use App\Http\Livewire\Student\Subs\StudentSubscriptionComponent;
use App\Http\Livewire\Tutor\Attendance\TutorAttendanceComponent;
use App\Http\Livewire\Admin\Announcement\AddAnnouncementComponent;
use App\Http\Livewire\Student\Notes\StudentNotesComponent;
use App\Http\Livewire\Student\Profile\StudentEditProfileComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.base');
// });

Route::get('/', HomeComponent::class)->name('home');
Route::get('/changepassword', ChangePasswordComponent::class)->name('change.password');

//For Student
Route::middleware(['auth:sanctum','verified'])->group(function(){

    //For Profile
    Route::get('/student/profile', StudentProfileComponent::class)->name('student.profile');
    //For Class
    Route::get('/student/class-recorded', StudentRecordedComponent::class)->name('student.recorded');
    Route::get('/student/class-schedule', StudentScheduleComponent::class)->name('student.scheduled');
    //For Form
    Route::get('/student/attendance', AttendanceComponent::class)->name('student.form');
    //For Notes
    Route::get('/student/notes', StudentNotesComponent::class)->name('student.notes');
    Route::get('/student/notes/download/', [DownloadPDFController::class, 'downloadFile'])->name('download');
    //For Merchandise
    Route::get('/student/merchandise', StudentMerchandiseComponent::class)->name('student.merch');
    //For Subscription
    Route::get('/student/subscription', StudentSubscriptionComponent::class)->name('student.subs');
    Route::get('/student/subscription/form', SubscriptionForm::class)->name('student.subsform');

    //For Basic
    Route::get('/student/subscriptions/basic', BasicFormComponent::class)->name('basic.form');
    //For Basic
    Route::get('/student/subscriptions/gold', GoldFormComponent::class)->name('gold.form');
    //For Basic
    Route::get('/student/subscriptions/platinum', PlatinumFormComponent::class)->name('platinum.form');
    //For Tutor
    Route::get('/student/tutor', TutorComponent::class)->name('student.tutors');

});

//For Tutor
Route::middleware(['auth:sanctum','verified'])->group(function(){
    //For Attendance
    Route::get('/tutor/attendance', TutorAttendanceComponent::class)->name('tutor.form');
    //For Class
    Route::get('/tutor/class-recorded', RecordedComponent::class)->name('tutor.recorded');
    Route::get('/tutor/class-schedule', TutorScheduleComponent::class)->name('tutor.scheduled');
    //For Merchandise
    Route::get('/tutor/merchandise', TutorMerchandiseComponent::class)->name('tutor.merch');
    //For Notes
    Route::get('/tutor/notes', NotesComponent::class)->name('tutor.notes');
    Route::get('tutor/notes/upload-file', [FileUpload::class, 'createForm']);
    Route::post('tutor/notes/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');

    //For Profile
    Route::get('/tutor/profile', TutorProfileComponent::class)->name('tutor.profile');
    //For Student List
    Route::get('/tutor/student/list', StudentListComponent::class)->name('tutor.studentlist');
    //For Subscription
    Route::get('/tutor/subscription', TutorSubscriptionComponent::class)->name('tutor.subs');
});

//For Admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    //For Dashboard
        //For Announcement
        Route::get('/admin/announcement', AnnouncementComponent::class)->name('admin.announcement');
        Route::get('/admin/announcement/add', AddAnnouncementComponent::class)->name('admin.addannouncement');
        //For Class
        Route::get('/admin/meeting', MeetingComponent::class)->name('admin.meeting');
        Route::get('/admin/meeting/add', AddMeetingComponent::class)->name('admin.addmeeting');
        Route::get('/admin/recorded', RecordedComponent::class)->name('admin.recorded');
        Route::get('/admin/recorded/edit', AddRecordedComponent::class)->name('admin.addrecorded');
        Route::get('/admin/schedule', ScheduleComponent::class)->name('admin.schedule');
        Route::get('/admin/schedule/add', AddScheduleComponent::class)->name('admin.addSchedule');
        //For Merchandise
        Route::get('/admin/merchandise', MerchandiseComponent::class)->name('admin.merchandise');
        //For Order
        Route::get('/admin/order/history', OrderHistoryComponent::class)->name('admin.orderhistory');
        Route::get('/admin/order/purchase', OrderPurchaseComponent::class)->name('admin.orderpurchase');
        //For profile
        Route::get('/admin/profile', AdminProfileComponent::class)->name('admin.profile');
        //For Subscription
        Route::get('/admin/subscription', SubscriptionComponent::class)->name('admin.subscription');
});