<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class GrafikNarkotikaCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'grafik_narkotika')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'grafik_narkotika')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'name' => 'grafik_narkotika',
                'slug' => 'grafik-narkotika',
                'display_name_singular' => 'D.IN.11 - Data Grafik Perkara Narkotika dan Zat Adiktif',
                'display_name_plural' => 'Data Grafik Perkara Narkotika dan Zat Adiktif',
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
                'updated_at' => '2022-05-22T21:29:21.000000Z',
                'created_at' => '2022-05-22T21:29:21.000000Z',
                'id' => 57,
            ));

            Badaso::model('Permission')->generateFor('grafik_narkotika');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/grafik-narkotika')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => 'Data Grafik Perkara Narkotika dan Zat Adiktif',
                    'target' => '_self',
                    'icon_class' => '',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_grafik_narkotika',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/grafik-narkotika';
                $menu_item->title = 'Data Grafik Perkara Narkotika dan Zat Adiktif';
                $menu_item->target = '_self';
                $menu_item->icon_class = '';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_grafik_narkotika';
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
