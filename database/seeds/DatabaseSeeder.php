<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'root@gmail.com',
            'type' => config('const.admin'),
            'password' => password_hash('root1234', PASSWORD_DEFAULT),
        ]);

        DB::table('users')->insert([
            'name' => '朱雨',
            'email' => '2@gmail.com',
            'password' => password_hash('5jm3', PASSWORD_DEFAULT),
        ]);

        DB::table('users')->insert([
            'name' => '黃薨',
            'email' => '3@gmail.com',
            'password' => password_hash('cj6c', PASSWORD_DEFAULT),
        ]);

        DB::table('users')->insert([
            'name' => '蒼森 銀',
            'email' => '4@gmail.com',
            'password' => password_hash('hnpu', PASSWORD_DEFAULT),
        ]);

        DB::table('users')->insert([
            'name' => '水十 早月',
            'email' => '5@gmail.com',
            'password' => password_hash('gjo3', PASSWORD_DEFAULT),
        ]);

        DB::table('users')->insert([
            'name' => '希優爾',
            'email' => '6@gmail.com',
            'password' => password_hash('vuu3', PASSWORD_DEFAULT),
        ]);

        DB::table('users')->insert([
            'name' => '紫羽 信實',
            'email' => '7@gmail.com',
            'password' => password_hash('y3m3', PASSWORD_DEFAULT),
        ]);

        DB::table('users')->insert([
            'name' => '守座 一条',
            'email' => '8@gmail.com',
            'password' => password_hash('g3yj', PASSWORD_DEFAULT),
        ]);

        DB::table('users')->insert([
            'name' => '久保 一文字',
            'email' => '9@gmail.com',
            'password' => password_hash('ru31', PASSWORD_DEFAULT),
        ]);

        DB::table('users')->insert([
            'name' => '紅葉',
            'email' => '10@gmail.com',
            'password' => password_hash('cj6u', PASSWORD_DEFAULT),
        ]);

        DB::table('users')->insert([
            'name' => '白野 月',
            'email' => '11@gmail.com',
            'password' => password_hash('196u', PASSWORD_DEFAULT),
        ]);

        DB::table('users')->insert([
            'name' => '宮田 保志',
            'email' => '12@gmail.com',
            'password' => password_hash('ejwu', PASSWORD_DEFAULT),
        ]);

        DB::table('users')->insert([
            'name' => '金野 澤',
            'email' => '13@gmail.com',
            'password' => password_hash('rupu', PASSWORD_DEFAULT),
        ]);

        DB::table('users')->insert([
            'name' => '石田 耶',
            'email' => '14@gmail.com',
            'password' => password_hash('g6wu', PASSWORD_DEFAULT),
        ]);

        DB::table('users')->insert([
            'name' => '山田 大介',
            'email' => '15@gmail.com',
            'password' => password_hash('g0wu', PASSWORD_DEFAULT),
        ]);

        DB::table('users')->insert([
            'name' => '秋堂 冬篆',
            'email' => '16@gmail.com',
            'password' => password_hash('fuw6', PASSWORD_DEFAULT),
        ]);

        DB::table('users')->insert([
            'name' => '秋堂 涼',
            'email' => '17@gmail.com',
            'password' => password_hash('fuw6', PASSWORD_DEFAULT),
        ]);

        DB::table('users')->insert([
            'name' => '千尋',
            'email' => '18@gmail.com',
            'password' => password_hash('fu0v', PASSWORD_DEFAULT),
        ]);

        DB::table('users')->insert([
            'name' => '千葉 紀之',
            'email' => '19@gmail.com',
            'password' => password_hash('fu0u', PASSWORD_DEFAULT),
        ]);

        DB::table('users')->insert([
            'name' => '阿特拉克',
            'email' => '20@gmail.com',
            'password' => password_hash('8wk4', PASSWORD_DEFAULT),
        ]);
    }
}
