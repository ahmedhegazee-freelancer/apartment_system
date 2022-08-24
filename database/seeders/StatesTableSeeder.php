<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::insert([

            ['name' => "القاهرة"],
            ['name' => "الجيزة"],
            ['name' => "الأسكندرية"],
            ['name' => "الدقهلية"],
            ['name' => "البحر الأحمر"],
            ['name' => "البحيرة"],
            ['name' => "الفيوم"],
            ['name' => "الغربية"],
            ['name' => "الإسماعلية"],
            ['name' => "المنوفية"],
            ['name' => "المنيا"],
            ['name' => "القليوبية"],
            ['name' => "الوادي الجديد"],
            ['name' => "السويس"],
            ['name' => "اسوان"],
            ['name' => "اسيوط"],
            ['name' => "بني سويف"],
            ['name' => "بورسعيد"],
            ['name' => "دمياط"],
            ['name' => "الشرقية"],
            ['name' => "جنوب سيناء"],
            ['name' => "كفر الشيخ"],
            ['name' => "مطروح"],
            ['name' => "الأقصر"],
            ['name' => "قنا"],
            ['name' => "شمال سيناء"],
            ['name' => "سوهاج"],
        ]);
    }
}