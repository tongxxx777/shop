<?php

namespace Database\Seeders;

use Dcat\Admin\Models;
use Illuminate\Database\Seeder;
use DB;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // base tables
        Models\Menu::truncate();
        Models\Menu::insert(
            [
                [
                    "id" => 1,
                    "parent_id" => 0,
                    "order" => 1,
                    "title" => "主页",
                    "icon" => "feather icon-bar-chart-2",
                    "uri" => "/",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2022-03-07 08:11:21",
                    "updated_at" => "2022-03-09 15:49:12"
                ],
                [
                    "id" => 2,
                    "parent_id" => 0,
                    "order" => 3,
                    "title" => "系统",
                    "icon" => "feather icon-settings",
                    "uri" => NULL,
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2022-03-07 08:11:21",
                    "updated_at" => "2022-03-09 15:51:58"
                ],
                [
                    "id" => 3,
                    "parent_id" => 2,
                    "order" => 4,
                    "title" => "管理员",
                    "icon" => NULL,
                    "uri" => "auth/users",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2022-03-07 08:11:21",
                    "updated_at" => "2022-03-09 15:51:58"
                ],
                [
                    "id" => 4,
                    "parent_id" => 2,
                    "order" => 5,
                    "title" => "角色",
                    "icon" => NULL,
                    "uri" => "auth/roles",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2022-03-07 08:11:21",
                    "updated_at" => "2022-03-09 15:51:58"
                ],
                [
                    "id" => 5,
                    "parent_id" => 2,
                    "order" => 6,
                    "title" => "权限",
                    "icon" => NULL,
                    "uri" => "auth/permissions",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2022-03-07 08:11:21",
                    "updated_at" => "2022-03-09 15:51:58"
                ],
                [
                    "id" => 6,
                    "parent_id" => 2,
                    "order" => 7,
                    "title" => "菜单",
                    "icon" => NULL,
                    "uri" => "auth/menu",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2022-03-07 08:11:21",
                    "updated_at" => "2022-03-09 15:51:58"
                ],
                [
                    "id" => 7,
                    "parent_id" => 2,
                    "order" => 8,
                    "title" => "扩展",
                    "icon" => NULL,
                    "uri" => "auth/extensions",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2022-03-07 08:11:21",
                    "updated_at" => "2022-03-09 15:51:58"
                ],
                [
                    "id" => 8,
                    "parent_id" => 0,
                    "order" => 2,
                    "title" => "轮播图",
                    "icon" => "fa-audio-description",
                    "uri" => "banners",
                    "extension" => "",
                    "show" => 1,
                    "created_at" => "2022-03-09 15:51:12",
                    "updated_at" => "2022-03-09 15:55:31"
                ]
            ]
        );

        Models\Permission::truncate();
        Models\Permission::insert(
            [
                [
                    "id" => 1,
                    "name" => "系统",
                    "slug" => "auth-management",
                    "http_method" => "",
                    "http_path" => "",
                    "order" => 1,
                    "parent_id" => 0,
                    "created_at" => "2022-03-07 08:11:21",
                    "updated_at" => "2022-03-09 13:42:55"
                ],
                [
                    "id" => 2,
                    "name" => "管理员",
                    "slug" => "users",
                    "http_method" => "",
                    "http_path" => "/auth/users*",
                    "order" => 2,
                    "parent_id" => 1,
                    "created_at" => "2022-03-07 08:11:21",
                    "updated_at" => "2022-03-09 13:41:52"
                ],
                [
                    "id" => 3,
                    "name" => "角色",
                    "slug" => "roles",
                    "http_method" => "",
                    "http_path" => "/auth/roles*",
                    "order" => 3,
                    "parent_id" => 1,
                    "created_at" => "2022-03-07 08:11:21",
                    "updated_at" => "2022-03-09 13:42:00"
                ],
                [
                    "id" => 4,
                    "name" => "权限",
                    "slug" => "permissions",
                    "http_method" => "",
                    "http_path" => "/auth/permissions*",
                    "order" => 4,
                    "parent_id" => 1,
                    "created_at" => "2022-03-07 08:11:21",
                    "updated_at" => "2022-03-09 13:42:06"
                ],
                [
                    "id" => 5,
                    "name" => "菜单",
                    "slug" => "menu",
                    "http_method" => "",
                    "http_path" => "/auth/menu*",
                    "order" => 5,
                    "parent_id" => 1,
                    "created_at" => "2022-03-07 08:11:21",
                    "updated_at" => "2022-03-09 13:42:10"
                ],
                [
                    "id" => 6,
                    "name" => "扩展",
                    "slug" => "extension",
                    "http_method" => "",
                    "http_path" => "/auth/extensions*",
                    "order" => 6,
                    "parent_id" => 1,
                    "created_at" => "2022-03-07 08:11:21",
                    "updated_at" => "2022-03-09 13:42:19"
                ]
            ]
        );

        Models\Role::truncate();
        Models\Role::insert(
            [
                [
                    "id" => 1,
                    "name" => "超级管理员",
                    "slug" => "administrator",
                    "created_at" => "2022-03-07 08:11:21",
                    "updated_at" => "2022-03-09 13:41:21"
                ],
                [
                    "id" => 2,
                    "name" => "运营",
                    "slug" => "operator",
                    "created_at" => "2022-03-09 13:46:24",
                    "updated_at" => "2022-03-09 13:46:24"
                ]
            ]
        );

        Models\Setting::truncate();
		Models\Setting::insert(
			[

            ]
		);

		Models\Extension::truncate();
		Models\Extension::insert(
			[

            ]
		);

		Models\ExtensionHistory::truncate();
		Models\ExtensionHistory::insert(
			[

            ]
		);

        // pivot tables
        DB::table('admin_permission_menu')->truncate();
		DB::table('admin_permission_menu')->insert(
			[

            ]
		);

        DB::table('admin_role_menu')->truncate();
        DB::table('admin_role_menu')->insert(
            [

            ]
        );

        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_role_permissions')->insert(
            [

            ]
        );

        // finish
    }
}
