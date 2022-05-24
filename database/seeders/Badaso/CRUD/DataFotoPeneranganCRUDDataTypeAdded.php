<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class DataFotoPeneranganCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'data_foto_penerangan')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'data_foto_penerangan')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'name' => 'data_foto_penerangan',
                'slug' => 'data-foto-penerangan',
                'display_name_singular' => 'D.IN.8 - Data Foto Dokumentasi Kegiatan Penerangan Hukum',
                'display_name_plural' => '8.1. Data Foto Dokumentasi Penerangan Hukum',
                'icon' => NULL,
                'model_name' => NULL,
                'policy_name' => NULL,
                'controller' => NULL,
                'order_column' => NULL,
                'order_display_column' => NULL,
                'order_direction' => NULL,
                'generate_permissions' => true,
                'server_side' => false,
                'description' => NULL,
                'details' => NULL,
                'notification' => '[]',
                'is_soft_delete' => false,
                'updated_at' => '2022-05-22T21:22:10.000000Z',
                'created_at' => '2022-05-22T21:22:10.000000Z',
                'id' => 53,
            ));

            Badaso::model('Permission')->generateFor('data_foto_penerangan');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/data-foto-penerangan')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => '8.1. Data Foto Dokumentasi Penerangan Hukum',
                    'target' => '_self',
                    'icon_class' => '',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_data_foto_penerangan',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/data-foto-penerangan';
                $menu_item->title = '8.1. Data Foto Dokumentasi Penerangan Hukum';
                $menu_item->target = '_self';
                $menu_item->icon_class = '';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_data_foto_penerangan';
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
