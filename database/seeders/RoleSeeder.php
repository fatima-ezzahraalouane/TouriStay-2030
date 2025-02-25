<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        //commentaire
        $roles = ['Admin', 'Touriste', 'Propriétaire'];

        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'name_user' => $role,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
