<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class DataPetaCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'data_peta')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'data_peta')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'name' => 'data_peta',
                'slug' => 'data-peta',
                'display_name_singular' => 'DATA PETA IDEOLOGI, POLITIK, PERTAHANAN DAN KEAMANAN / SOSIAL BUDAYA DAN KEMASYARAKATAN / EKONOMI DAN KEUANGAN / PENGAMANAN, PEMBANGUNAN STRATEGIS / TEKNOLOGI INFORMASI DAN PRODUKSI INTELIJEN',
                'display_name_plural' => '1. Data Peta',
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
                'updated_at' => '2022-05-22T19:34:31.000000Z',
                'created_at' => '2022-05-22T19:34:31.000000Z',
                'id' => 44,
            ));

            Badaso::model('Permission')->generateFor('data_peta');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/data-peta')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => '1. Data Peta',
                    'target' => '_self',
                    'icon_class' => '',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_data_peta',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/data-peta';
                $menu_item->title = '1. Data Peta';
                $menu_item->target = '_self';
                $menu_item->icon_class = '';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_data_peta';
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
