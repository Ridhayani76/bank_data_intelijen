<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class RegisterOperasiTeknologiCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'register_operasi_teknologi')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'register_operasi_teknologi')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'id' => 29,
                'name' => 'register_operasi_teknologi',
                'slug' => 'register-operasi-teknologi',
                'display_name_singular' => 'R.IN.16 - Register Operasi Teknologi Informasi dan Produksi Intelijen',
                'display_name_plural' => '16. Register Operasi Teknologi Informasi dan Produksi Intelijen',
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
                'created_at' => '2022-05-21T17:15:45.000000Z',
                'updated_at' => '2022-05-22T18:26:35.000000Z',
            ));

            Badaso::model('Permission')->generateFor('register_operasi_teknologi');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/register-operasi-teknologi')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => '16. Register Operasi Teknologi Informasi dan Produksi Intelijen',
                    'target' => '_self',
                    'icon_class' => '',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_register_operasi_teknologi',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/register-operasi-teknologi';
                $menu_item->title = '16. Register Operasi Teknologi Informasi dan Produksi Intelijen';
                $menu_item->target = '_self';
                $menu_item->icon_class = '';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_register_operasi_teknologi';
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
