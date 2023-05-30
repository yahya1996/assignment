<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'Category A',
            'Slug' => 'A',
            'created_at'=> Carbon::now()->toDateTimeString()
            
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Category B',
            'Slug' => 'B',

            'created_at'=> Carbon::now()->toDateTimeString()
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Category C',
            'Slug' => "C",
            'created_at'=> Carbon::now()->toDateTimeString()
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
