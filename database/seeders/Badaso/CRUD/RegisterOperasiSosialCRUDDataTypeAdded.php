<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class RegisterOperasiSosialCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'register_operasi_sosial')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'register_operasi_sosial')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'id' => 26,
                'name' => 'register_operasi_sosial',
                'slug' => 'register-operasi-sosial',
                'display_name_singular' => 'R.IN.13 - Register Operasi Sosial Budaya dan Kemasyarakatan',
                'display_name_plural' => '13. Register Operasi Sosial Budaya dan Kemasyarakatan',
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
                'created_at' => '2022-05-21T17:11:43.000000Z',
                'updated_at' => '2022-05-22T18:26:19.000000Z',
            ));

            Badaso::model('Permission')->generateFor('register_operasi_sosial');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/register-operasi-sosial')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => '13. Register Operasi Sosial Budaya dan Kemasyarakatan',
                    'target' => '_self',
                    'icon_class' => '',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_register_operasi_sosial',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/register-operasi-sosial';
                $menu_item->title = '13. Register Operasi Sosial Budaya dan Kemasyarakatan';
                $menu_item->target = '_self';
                $menu_item->icon_class = '';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_register_operasi_sosial';
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
