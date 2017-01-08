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
            'name' => 'BEST LARP PLAYER',
            'email' => 'blp@gmail.com',
            'password' => password_hash('1234', PASSWORD_DEFAULT),
        ]);

        DB::table('events')->insert([
            'name' => 'Explosion！',
            'content' => '汝之身伏於吾下，吾之命運系於汝之劍。
從於聖杯之下，以此意，此理聽從召喚，回答吧。
吾於此處起誓，吾乃集常世總善者，吾乃懲常世總惡者。
纏繞汝三大言靈之七天。
由抑止之輪而來，不幸追撞了黑色的高級車。
對為了保護後輩而擔下全部責任的三浦，車主——暴力團員谷岡所提出的和解條件是…'
        ]);
    }
}
