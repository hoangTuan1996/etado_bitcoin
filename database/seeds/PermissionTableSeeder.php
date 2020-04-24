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
        $admin = Role::create(['name' => 'admin','display_name' => 'Admin', 'guard_name' => 'admin']);
        Role::create(['name' => 'teacher','display_name' => 'Giảng viên', 'guard_name' => 'admin']);

        $this->command->info(get_class($this).' seeding completed successfully');

        Permission::create(['name' => 'role-list', 'group' => 'roles', 'display_name' => 'Xem phần quyền','guard_name' => 'admin']);
        Permission::create(['name' => 'role-create', 'group' => 'roles', 'display_name' => 'Thêm phần quyền','guard_name' => 'admin']);
        Permission::create(['name' => 'role-update', 'group' => 'roles', 'display_name' => 'Sửa phần quyền','guard_name' => 'admin']);
        Permission::create(['name' => 'role-delete', 'group' => 'roles', 'display_name' => 'Xóa phần quyền','guard_name' => 'admin']);
        Permission::create(['name' => 'video-list', 'group' => 'videos', 'display_name' => 'Xem video','guard_name' => 'admin']);
        Permission::create(['name' => 'video-add', 'group' => 'videos', 'display_name' => 'Thêm video','guard_name' => 'admin']);
        Permission::create(['name' => 'video-edit', 'group' => 'videos', 'display_name' => 'Sửa video','guard_name' => 'admin']);
        Permission::create(['name' => 'video-delete', 'group' => 'videos', 'display_name' => 'Xóa video','guard_name' => 'admin']);
        Permission::create(['name' => 'post-list', 'group' => 'posts', 'display_name' => 'Xem bài viết','guard_name' => 'admin']);
        Permission::create(['name' => 'post-create', 'group' => 'posts', 'display_name' => 'Thêm bài viết','guard_name' => 'admin']);
        Permission::create(['name' => 'post-edit', 'group' => 'posts', 'display_name' => 'Sửa bài viết','guard_name' => 'admin']);
        Permission::create(['name' => 'post-delete', 'group' => 'posts', 'display_name' => 'Xóa bài viết','guard_name' => 'admin']);
        Permission::create(['name' => 'category-list', 'group' => 'categories', 'display_name' => 'Xem danh mục bài viết','guard_name' => 'admin']);
        Permission::create(['name' => 'category-create', 'group' => 'categories', 'display_name' => 'Thêm danh mục bài viết','guard_name' => 'admin']);
        Permission::create(['name' => 'category-edit', 'group' => 'categories', 'display_name' => 'Sửa danh mục bài viết','guard_name' => 'admin']);
        Permission::create(['name' => 'category-delete', 'group' => 'categories', 'display_name' => 'Xóa danh mục bài viết','guard_name' => 'admin']);
        Permission::create(['name' => 'page-list', 'group' => 'pages', 'display_name' => 'Xem trang','guard_name' => 'admin']);
        Permission::create(['name' => 'page-create', 'group' => 'pages', 'display_name' => 'Thêm trang','guard_name' => 'admin']);
        Permission::create(['name' => 'page-edit', 'group' => 'pages', 'display_name' => 'Sửa trang','guard_name' => 'admin']);
        Permission::create(['name' => 'page-delete', 'group' => 'pages', 'display_name' => 'Xóa trang','guard_name' => 'admin']);
        Permission::create(['name' => 'comment-list', 'group' => 'comments', 'display_name' => 'Xem bình luận','guard_name' => 'admin']);
        Permission::create(['name' => 'comment-create', 'group' => 'comments', 'display_name' => 'Thêm bình luận','guard_name' => 'admin']);
        Permission::create(['name' => 'comment-edit', 'group' => 'comments', 'display_name' => 'Sửa bình luận','guard_name' => 'admin']);
        Permission::create(['name' => 'comment-delete', 'group' => 'comments', 'display_name' => 'Xóa bình luận','guard_name' => 'admin']);
        Permission::create(['name' => 'contact-list', 'group' => 'contacts', 'display_name' => 'Xem liên hệ','guard_name' => 'admin']);
        Permission::create(['name' => 'contact-create', 'group' => 'contacts', 'display_name' => 'Thêm liên hệ','guard_name' => 'admin']);
        Permission::create(['name' => 'contact-edit', 'group' => 'contacts', 'display_name' => 'Sửa liên hệ','guard_name' => 'admin']);
        Permission::create(['name' => 'contact-delete', 'group' => 'contacts', 'display_name' => 'Xóa liên hệ','guard_name' => 'admin']);
        Permission::create(['name' => 'student-list', 'group' => 'students', 'display_name' => 'Xem học viên','guard_name' => 'admin']);
        Permission::create(['name' => 'student-create', 'group' => 'students', 'display_name' => 'Thêm học viên','guard_name' => 'admin']);
        Permission::create(['name' => 'student-edit', 'group' => 'students', 'display_name' => 'Sửa học viên','guard_name' => 'admin']);
        Permission::create(['name' => 'student-delete', 'group' => 'students', 'display_name' => 'Xóa học viên','guard_name' => 'admin']);
        Permission::create(['name' => 'course-list', 'group' => 'courses', 'display_name' => 'Xem lớp học','guard_name' => 'admin']);
        Permission::create(['name' => 'course-create', 'group' => 'courses', 'display_name' => 'Thêm lớp học','guard_name' => 'admin']);
        Permission::create(['name' => 'course-edit', 'group' => 'courses', 'display_name' => 'Sửa lớp học','guard_name' => 'admin']);
        Permission::create(['name' => 'course-delete', 'group' => 'courses', 'display_name' => 'Xóa lớp học','guard_name' => 'admin']);
        Permission::create(['name' => 'section-list', 'group' => 'sections', 'display_name' => 'Xem học phần','guard_name' => 'admin']);
        Permission::create(['name' => 'section-create', 'group' => 'sections', 'display_name' => 'Thêm học phần','guard_name' => 'admin']);
        Permission::create(['name' => 'section-edit', 'group' => 'sections', 'display_name' => 'Sửa học phần','guard_name' => 'admin']);
        Permission::create(['name' => 'section-delete', 'group' => 'sections', 'display_name' => 'Xóa học phần','guard_name' => 'admin']);
        Permission::create(['name' => 'lesson-list', 'group' => 'lessons', 'display_name' => 'Xem bài học','guard_name' => 'admin']);
        Permission::create(['name' => 'lesson-create', 'group' => 'lessons', 'display_name' => 'Thêm bài học','guard_name' => 'admin']);
        Permission::create(['name' => 'lesson-edit', 'group' => 'lessons', 'display_name' => 'Sửa bài học','guard_name' => 'admin']);
        Permission::create(['name' => 'lesson-delete', 'group' => 'lessons', 'display_name' => 'Xóa bài học','guard_name' => 'admin']);
        Permission::create(['name' => 'register-list', 'group' => 'registers', 'display_name' => 'Xem học viên trong lớp','guard_name' => 'admin']);
        Permission::create(['name' => 'register-create', 'group' => 'registers', 'display_name' => 'Thêm học viên trong lớp','guard_name' => 'admin']);
        Permission::create(['name' => 'register-edit', 'group' => 'registers', 'display_name' => 'Sửa học viên trong lớp','guard_name' => 'admin']);
        Permission::create(['name' => 'register-delete', 'group' => 'registers', 'display_name' => 'Xóa học viên trong lớp','guard_name' => 'admin']);
        Permission::create(['name' => 'categories_course-list', 'group' => 'categories_courses', 'display_name' => 'Xem danh mục khóa học','guard_name' => 'admin']);
        Permission::create(['name' => 'categories_course-create', 'group' => 'categories_courses', 'display_name' => 'Thêm danh mục khóa học','guard_name' => 'admin']);
        Permission::create(['name' => 'categories_course-edit', 'group' => 'categories_courses', 'display_name' => 'Sửa danh mục khóa học','guard_name' => 'admin']);
        Permission::create(['name' => 'categories_course-delete', 'group' => 'categories_courses', 'display_name' => 'Xóa danh mục khóa học','guard_name' => 'admin']);
        Permission::create(['name' => 'user-list', 'group' => 'users', 'display_name' => 'Xem thành viên','guard_name' => 'admin']);
        Permission::create(['name' => 'user-create', 'group' => 'users', 'display_name' => 'Thêm thành viên','guard_name' => 'admin']);
        Permission::create(['name' => 'user-edit', 'group' => 'users', 'display_name' => 'Sửa thành viên','guard_name' => 'admin']);
        Permission::create(['name' => 'user-delete', 'group' => 'users', 'display_name' => 'Xóa thành viên','guard_name' => 'admin']);
        Permission::create(['name' => 'slider-list', 'group' => 'sliders', 'display_name' => 'Xem slider','guard_name' => 'admin']);
        Permission::create(['name' => 'slider-create', 'group' => 'sliders', 'display_name' => 'Thêm slider','guard_name' => 'admin']);
        Permission::create(['name' => 'slider-edit', 'group' => 'sliders', 'display_name' => 'Sửa slider','guard_name' => 'admin']);
        Permission::create(['name' => 'slider-delete', 'group' => 'sliders', 'display_name' => 'Xóa slider','guard_name' => 'admin']);
        Permission::create(['name' => 'setting-edit', 'group' => 'settings', 'display_name' => 'Cập nhật cấu hình','guard_name' => 'admin']);
        Permission::create(['name' => 'code-list', 'group' => 'codes', 'display_name' => 'Xem tạo mã','guard_name' => 'admin']);
        Permission::create(['name' => 'code-create', 'group' => 'codes', 'display_name' => 'Thêm tạo mã','guard_name' => 'admin']);
        Permission::create(['name' => 'code-edit', 'group' => 'codes', 'display_name' => 'Sửa tạo mã','guard_name' => 'admin']);
        Permission::create(['name' => 'code-delete', 'group' => 'codes', 'display_name' => 'Xóa tạo mã','guard_name' => 'admin']);

        $user = Admin::create([
                'name' => 'Super Admin',
                'email' => 'super_admin@gmail.com',
                'password' => bcrypt('12345678'),
                'status' => 1,
                'position' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        $permissions = Permission::pluck('id','id')->all();

        $admin->syncPermissions($permissions);

        $user->assignRole([$admin->id]);
    }

    /**
     * @param string $prefix
     * @param string $actions
     * @return array
     */
    private function permissions(string $prefix, string $actions = 'view create edit delete') {
        $permissions = [];
        $array = explode(" ", $actions);
        foreach ($array as $item) {
            $permissions[] = $prefix.'.'.$item;
        }
        return $permissions;
    }
}
