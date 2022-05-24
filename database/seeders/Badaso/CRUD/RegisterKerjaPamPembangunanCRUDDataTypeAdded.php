<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class RegisterKerjaPamPembangunanCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'register_kerja_pam_pembangunan')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'register_kerja_pam_pembangunan')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'id' => 15,
                'name' => 'register_kerja_pam_pembangunan',
                'slug' => 'register-kerja-pam-pembangunan',
                'display_name_singular' => 'R.IN.3 - Register Kerja Pengamanan Pembangunan Strategis',
                'display_name_plural' => '3.4. Register Kerja Pengamanan Pembangunan Strategis',
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
                'created_at' => '2022-05-21T16:55:39.000000Z',
                'updated_at' => '2022-05-22T18:23:47.000000Z',
            ));

            Badaso::model('Permission')->generateFor('register_kerja_pam_pembangunan');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/register-kerja-pam-pembangunan')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => '3.4. Register Kerja Pengamanan Pembangunan Strategis',
                    'target' => '_self',
                    'icon_class' => '',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_register_kerja_pam_pembangunan',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/register-kerja-pam-pembangunan';
                $menu_item->title = '3.4. Register Kerja Pengamanan Pembangunan Strategis';
                $menu_item->target = '_self';
                $menu_item->icon_class = '';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_register_kerja_pam_pembangunan';
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
