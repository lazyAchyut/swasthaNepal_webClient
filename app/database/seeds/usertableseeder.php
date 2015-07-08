// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'username' => 'admin',
        'email'    => 'chris@scotch.io',
        'password' => Hash::make('admin'),
    ));
}

}

