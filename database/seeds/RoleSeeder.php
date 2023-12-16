<?php

use App\Role;
use Illuminate\Database\Seeder;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = new Role();
        $superadmin->name = 'Суперадминистратор';
        $superadmin->slug = 'super-admin';
        $superadmin->save();
        $admin = new Role();
        $admin->name = 'Администратор';
        $admin->slug = 'admin';
        $admin->save();
        $student = new Role();
        $student->name = 'Ученик';
        $student->slug = 'student';
        $student->save();
        $parent = new Role();
        $parent->name = 'Родитель';
        $parent->slug = 'parent';
        $parent->save();
        $coach = new Role();
        $coach->name = 'Тренер';
        $coach->slug = 'coach';
        $coach->save();
        $manager = new Role();
        $manager->name = 'Менеджер';
        $manager->slug = 'manager';
        $manager->save();
    }
}
