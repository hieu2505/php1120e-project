<?php

use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('faculty')->insert([
        [
           'title'        =>'CNTT',
           'description'  =>'Mô tả về khoa',
           'note'        =>'Ghi chú về khoa'
        ],
        [
           'title'        =>'Thiết kế đồ họa',
           'description'  =>'Mô tả về khoa',
           'note'        =>'Ghi chú về khoa'
        ],
        [
           'title'        =>'Điện tử viễn thông',
           'description'  =>'Mô tả về khoa',
           'note'        =>'Ghi chú về khoa'
        ],
]);
    }
}
