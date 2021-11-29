<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

class UsersTableSeeder extends Seeder
{
    /**
     * データベースに対するデータ設定の実行
     *
     * @return void
     */
    public function run()
    {
        // usersテーブルにadmin情報をインサート.
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' => Hash::make("admin001"),
            'role' => 'admin',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('users')->insert([
            'name' => 'guest',
            'email' => 'guest@guest',
            'password' => Hash::make("guest001"),
            'role' => 'guest',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}