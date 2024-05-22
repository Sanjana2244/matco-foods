<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert([
            [
                'key' => 'Footer Text',
                'value' => 'text 123',
                'type' => 'text_area',
                'created_at' => now(),
            ],
            [
                'key' => 'Footer rights',
                'value' => 'tex',
                'type' => 'input',
                'created_at' => now(),
            ],
        ]);
    }
}
