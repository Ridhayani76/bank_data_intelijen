<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class RegisterKegiatanTeknologiCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'register_kegiatan_teknologi')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'register_kegiatan_teknologi')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'id' => 24,
                'name' => 'register_kegiatan_teknologi',
                'slug' => 'register-kegiatan-teknologi',
                'display_name_singular' => 'R.IN.11 - Register Kegiatan Teknologi Informasi dan Produksi Intelijen',
                'display_name_plural' => '11. Register Kegiatan Teknologi Informasi dan Produksi Intelijen',
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
                'created_at' => '2022-05-21T17:07:01.000000Z',
                'updated_at' => '2022-05-22T18:21:39.000000Z',
            ));

            Badaso::model('Permission')->generateFor('register_kegiatan_teknologi');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/register-kegiatan-teknologi')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => '11. Register Kegiatan Teknologi Informasi dan Produksi Intelijen',
                    'target' => '_self',
                    'icon_class' => '',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_register_kegiatan_teknologi',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/register-kegiatan-teknologi';
                $menu_item->title = '11. Register Kegiatan Teknologi Informasi dan Produksi Intelijen';
                $menu_item->target = '_self';
                $menu_item->icon_class = '';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_register_kegiatan_teknologi';
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
