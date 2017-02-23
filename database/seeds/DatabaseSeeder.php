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

        DB::table('events')->insert([
            'name' => 'Explosion！',
            'content' => '汝之身伏於吾下，吾之命運系於汝之劍。
從於聖杯之下，以此意，此理聽從召喚，回答吧。
吾於此處起誓，吾乃集常世總善者，吾乃懲常世總惡者。
纏繞汝三大言靈之七天。
由抑止之輪而來，不幸追撞了黑色的高級車。
對為了保護後輩而擔下全部責任的三浦，車主——暴力團員谷岡所提出的和解條件是…'
        ]);

        DB::table('events')->insert([
            'name' => '黑色高級車',
            'content' => '我與父親不相見已有二年餘了，我最不能忘記的是他的背影。
那年冬天，祖母死了，父親的差使也交卸了，正是禍不單行的日子，我從北京到徐州，打算跟著父親奔喪回家。到徐州也許是因為過於疲憊，不幸追撞了黑色的高級車。對為了保護後輩而擔下全部責任的三浦，車主——暴力團員谷岡所提出的和解條件是…'
        ]);

        DB::table('event_ind')->insert([
            'user_id_array' => '1,',
            'event_id' => 1,
            'content' => '蘇格蘭戰士試圖阻止配備精良的英國軍隊入侵，
要學會操縱高地人的指令，就要了解世紀帝國2:帝王世紀的基本概念，
包括如何建立經濟，如何訓練你的士兵，而更重要的是:如何攻擊和打敗你的敵人。
如果你是即時戰略遊戲的新手的話，你將要因為過於疲憊，不幸追撞了黑色的高級車。對為了保護後輩而擔下全部責任的三浦，車主——暴力團員谷岡所提出的和解條件是…'
        ]);

        DB::table('event_ind')->insert([
            'user_id_array' => '2,',
            'event_id' => 1,
            'content' => '乙坂有宇擁有著只在極少一部分的青春期少年少女身上誘發產生的罕見特殊能力，依靠這份能力度過著一帆風順的學園生活的他也許是因為過於疲憊，不幸追撞了黑色的高級車。對為了保護後輩而擔下全部責任的三浦，車主——暴力團員谷岡所提出的和解條件是…'
        ]);
    }
}
