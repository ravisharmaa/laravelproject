<?php

use Illuminate\Database\Seeder;

class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('config')->insert([
        	'address'=>'Kathamandu',
        	'facebook'=>'www.facebbok.com',
        	'twitter' =>'www.twitter.com',
        	'about_desc'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod
				            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'mail'=>'mail.com',
			'gplus' => 'gplus.com'
        	]);
    }
}
