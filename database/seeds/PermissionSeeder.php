<?php


use App\Permission;
use Illuminate\Database\Seeder;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manageUser = new Permission();
        $manageUser->name = 'Управление пользователями';
        $manageUser->slug = 'manage-users';
        $manageUser->save();
        $createTasks = new Permission();
        $createTasks->name = 'Управление информацией в базах данных';
        $createTasks->slug = 'manage-db';
        $createTasks->save();
        $createTasks = new Permission();
        $createTasks->name = 'Управление расписанием/журналом';
        $createTasks->slug = 'manage-schedule';
        $createTasks->save();
    }
}
