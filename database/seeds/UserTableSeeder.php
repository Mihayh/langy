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
        //
        User::create([
        	'name' => 'Balas Mihai',
        	'email' => 'mihai@langy.com',
        	'password' => bcrypt('mihai'),
        ]);
    }
}
