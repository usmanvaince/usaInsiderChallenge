<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'role_id'       => 1,
                'role_desc'     => 'Captain'
            ],
            [
                'role_id'       => 2,
                'role_desc'     => 'Keeper'
            ],
            [
                'role_id'       => 3,
                'role_desc'     => 'Player'
            ],
            [
                'role_id'       => 4,
                'role_desc'     => 'CaptainKeeper'
            ],
        ];
        foreach ($roles as $item)
        {
            Role::updateOrCreate([  'role_id' =>  $item['role_id'] ] , $item);
        }
    }
}
