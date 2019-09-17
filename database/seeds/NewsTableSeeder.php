<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; // 追加
use Illuminate\Support\Facades\DB; // 追加

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = [
            [
                'id' => '1',
                'url'  => 'https://twitter.com/WWF',
                'title'  => 'WWF',
                'body'  => 'ニュース本文',
                'image_path'  => '/',
                'area_id'  => '1',
                'admin_id'  => '1',
            ],
            [
                'id' => '2',
                'url'  => 'https://twitter.com/NatGeo',
                'title'  => 'NatGeo',
                'body'  => 'ニュース本文',
                'image_path'  => '/',
                'area_id'  => '1',
                'admin_id'  => '1',
            ],
            [
                'id' => '3',
                'url'  => 'https://twitter.com/Greenpeace',
                'title'  => 'Greenpeace',
                'body'  => 'ニュース本文',
                'image_path'  => '/',
                'area_id'  => '1',
                'admin_id'  => '1',
            ],
            [
                'id' => '4',
                'url'  => 'https://twitter.com/AmericanForests',
                'title'  => 'American Forests',
                'body'  => 'ニュース本文',
                'image_path'  => '/',
                'area_id'  => '1',
                'admin_id'  => '1',
            ],
            [
                'id' => '5',
                'url'  => 'https://twitter.com/NAFO_Forests',
                'title'  => 'NAFO Forests',
                'body'  => 'ニュース本文',
                'image_path'  => '/',
                'area_id'  => '1',
                'admin_id'  => '1',
            ],
            [
                'id' => '6',
                'url'  => 'https://twitter.com/canintl',
                'title'  => 'Climate Action Network-International',
                'body'  => 'ニュース本文',
                'image_path'  => '/',
                'area_id'  => '1',
                'admin_id'  => '1',
            ],
            [
                'id' => '7',
                'url'  => 'https://twitter.com/EUClimateAction',
                'title'  => 'EU Climate Action',
                'body'  => 'ニュース本文',
                'image_path'  => '/',
                'area_id'  => '1',
                'admin_id'  => '1',
            ],
            [
                'id' => '8',
                'url'  => 'https://twitter.com/Irishwildlife',
                'title'  => 'Irish Wildlife Trust',
                'body'  => 'ニュース本文',
                'image_path'  => '/',
                'area_id'  => '1',
                'admin_id'  => '1',
            ],
            [
                'id' => '9',
                'url'  => 'https://twitter.com/IUCN',
                'title'  => 'IUCN',
                'body'  => 'ニュース本文',
                'image_path'  => '/',
                'area_id'  => '1',
                'admin_id'  => '1',
            ],
        ];

        foreach ($news as $value) {

            DB::table('news')->insert([
                'id' => $value['id'],
                'url' => $value['url'],
                'title' => $value['title'],
                'body' => $value['body'],
                'image_path' => $value['image_path'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'area_id' => $value['area_id'],
                'admin_id' => $value['admin_id'],
            ]);
        }
    }
}