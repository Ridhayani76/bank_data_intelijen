<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class RegisterKerjaIdeologiCRUDDataTypeAdded extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
        \DB::beginTransaction();

        try {

            $data_type = Badaso::model('DataType')->where('name', 'register_kerja_ideologi')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'register_kerja_ideologi')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'id' => 3,
                'name' => 'register_kerja_ideologi',
                'slug' => 'register-kerja-ideologi',
                'display_name_singular' => 'R.IN.3 - Register Kerja Ideologi Politik, Pertahanan dan Keamanan',
                'display_name_plural' => '3.1. Register Kerja Ideologi, Politik, Pertahanan dan Keamanan',
                'icon' => NULL,
                'model_name' => NULL,
                'policy_name' => NULL,
                'controller' => NULL,
                'order_column' => NULL,
                'order_display_column' => NULL,
                'order_direction' => NULL,
                'generate_permissions' => true,
                'server_side' => false,
                'is_maintenance' => 0,
                'description' => NULL,
                'details' => NULL,
                'notification' => '[]',
                'is_soft_delete' => false,
                'created_at' => '2022-05-21T16:23:12.000000Z',
                'updated_at' => '2022-05-22T18:22:28.000000Z',
            ));

            Badaso::model('Permission')->generateFor('register_kerja_ideologi');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/register-kerja-ideologi')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => '3.1. Register Kerja Ideologi, Politik, Pertahanan dan Keamanan',
                    'target' => '_self',
                    'icon_class' => '',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_register_kerja_ideologi',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/register-kerja-ideologi';
                $menu_item->title = '3.1. Register Kerja Ideologi, Politik, Pertahanan dan Keamanan';
                $menu_item->target = '_self';
                $menu_item->icon_class = '';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_register_kerja_ideologi';
                $menu_item->order = $order;
                $menu_item->save();
            }

            \DB::commit();
        } catch(Exception $e) {
            \DB::rollBack();

           throw new Exception('Exception occur ' . $e);
        }
    }
}
