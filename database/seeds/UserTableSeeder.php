<?php


use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Vaciamos la tabla
         User::truncate();

         $user = new User;
         $user->name = 'John Doe';
         $user->email = 'john@mail.com';
         $user->password = bcrypt('123123');
         $user->save();
    }
}
