<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use \Spatie\Permission\Models\Permission;
use App\Entities\Admin;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin', 'display_name' => 'Admin', 'guard_name' => 'admin']);

        $this->command->info(get_class($this) . ' seeding completed successfully');

        Permission::create(['name' => 'user-list', 'group' => 'users', 'display_name' => 'Xem thành viên', 'guard_name' => 'admin']);
        Permission::create(['name' => 'user-create', 'group' => 'users', 'display_name' => 'Thêm thành viên', 'guard_name' => 'admin']);
        Permission::create(['name' => 'user-edit', 'group' => 'users', 'display_name' => 'Sửa thành viên', 'guard_name' => 'admin']);
        Permission::create(['name' => 'user-delete', 'group' => 'users', 'display_name' => 'Xóa thành viên', 'guard_name' => 'admin']);

        $user = Admin::create([
                'name' => 'Super Admin',
                'email' => 'super_admin@gmail.com',
                'password' => bcrypt('12345678'),
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        $permissions = Permission::pluck('id', 'id')->all();

        $admin->syncPermissions($permissions);

        $user->assignRole([$admin->id]);
    }

    /**
     * @param string $prefix
     * @param string $actions
     * @return array
     */
    private function permissions(string $prefix, string $actions = 'view create edit delete')
    {
        $permissions = [];
        $array = explode(" ", $actions);
        foreach ($array as $item) {
            $permissions[] = $prefix . '.' . $item;
        }
        return $permissions;
    }
}
