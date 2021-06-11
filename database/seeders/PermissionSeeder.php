<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name' => 'view category'
            ],
            [
                'name' => 'add category'
            ],
            [
                'name' => 'delete category'
            ],

            [
                'name' => 'view product'
            ],
            [
                'name' => 'add product'
            ],
            [
                'name' => 'delete product'
            ],

            [
                'name' => 'view customer'
            ],
            [
                'name' => 'add customer'
            ],
            [
                'name' => 'delete customer'
            ],

            [
                'name' => 'view supplier'
            ],
            [
                'name' => 'add supplier'
            ],
            [
                'name' => 'delete supplier'
            ],

            [
                'name' => 'view purchase'
            ],
            [
                'name' => 'add purchase'
            ],
            [
                'name' => 'delete purchase'
            ],

            [
                'name' => 'view return'
            ],
            [
                'name' => 'add return'
            ],
            [
                'name' => 'delete return'
            ],

            [
                'name' => 'view expense'
            ],
            [
                'name' => 'add expense'
            ],
            [
                'name' => 'delete expense'
            ],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
