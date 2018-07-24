<?php

use Core\Models\Book;
use Illuminate\Database\Seeder;

class JabtaskUsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('jabtask_users')->truncate();

        if (!App::environment('production')) {
            $jabtask_users = [
                ['id' => '1', 'name_full' => 'Michal Holubec', 'adress_user' => 'Glocova 22, Praha', 'adress_bill' => 'Sladkovského 38, Praha'],
                ['id' => '2', 'name_full' => 'Hugo Zamazal', 'adress_user' => 'Akademická 124, Brno', 'adress_bill' => 'Živanského 150, Brno'],
                ['id' => '3', 'name_full' => 'Františka Ulrychová', 'adress_user' => 'Ivanovických legionářů 123, Ostrava', 'adress_bill' => 'Panská lícha 124, Ostrava']
            ];

            foreach ($jabtask_users as $users) {
                Book::create([
                    'id'          => $users[0],
                    'name_full'   => $users[1],
                    'adress_user' => $users[2],
                    'adress_bill' => $users[3],
                ]);
            }
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
