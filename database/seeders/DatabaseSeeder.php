<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Days;
use App\Models\ItemMerchandise;
use App\Models\Merchandise;
use App\Models\Times;
use App\Models\Subjects;
use App\Models\Subscriptions;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // For Table Days
        // Days::create(['day' => 'Monday']);
        // Days::create(['day' => 'Tuesday']);
        // Days::create(['day' => 'Wednesday']);
        // Days::create(['day' => 'Thursday']);
        // Days::create(['day' => 'Friday']);
        // Days::create(['day' => 'Sunday']);


        // For Table Times
        // Times::create(['time' => '4.50PM-5.50PM']);
        // Times::create(['time' => '6.00PM-7.20PM']);
        // Times::create(['time' => '7.50PM-8.50PM']);
        // Times::create(['time' => '8.00PM-9.00PM']);
        // Times::create(['time' => '8.00PM-9.15PM']);
        // Times::create(['time' => '9.15PM-10.15PM']);
        // Times::create(['time' => '9.20PM-10.35PM']);


        // For Table Subjects
        // Subjects::create(['subject' => 'Physics']);
        // Subjects::create(['subject' => 'Chemistry']);
        // Subjects::create(['subject' => 'Modern Mathematics']);
        // Subjects::create(['subject' => 'Additional Mathematics']);


        // To fill Subscription Table
        // Subscriptions::create([
        //     'plan' => 'Basic Plan',
        //     'price' => '50',
        // ]);
        // Subscriptions::create([
        //     'plan' => 'Gold Plan',
        //     'price' => '80',
        // ]);
        // Subscriptions::create([
        //     'plan' => 'Platinum Plan',
        //     'price' => '180',
        // ]);


        // To fill Merchandise Item Table
        // ItemMerchandise::create([
        //     'item' => 'Lanyard',
        //     'price' => '15.50',
        // ]);
        // ItemMerchandise::create([
        //     'item' => 'Notebook',
        //     'price' => '350',
        // ]);
        // ItemMerchandise::create([
        //     'item' => 'Hoodie',
        //     'price' => '80',
        // ]);

        // ItemMerchandise::create([
        //     'item' => 'T-Shirt',
        //     'price' => '60',
        // ]);

        
    }
}
