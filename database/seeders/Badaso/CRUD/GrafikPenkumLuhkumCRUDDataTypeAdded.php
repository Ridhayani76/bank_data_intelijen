<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class GrafikPenkumLuhkumCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'grafik_penkum_luhkum')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'grafik_penkum_luhkum')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'name' => 'grafik_penkum_luhkum',
                'slug' => 'grafik-penkum-luhkum',
                'display_name_singular' => 'D.IN.9 - Data Grafik Kegiatan Penerangan Hukum dan Penyuluhan Hukum',
                'display_name_plural' => '9. Grafik Penerangan Hukum Penyuluhan Hukum',
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
                'updated_at' => '2022-05-22T21:25:55.000000Z',
                'created_at' => '2022-05-22T21:25:55.000000Z',
                'id' => 55,
            ));

            Badaso::model('Permission')->generateFor('grafik_penkum_luhkum');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/grafik-penkum-luhkum')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => '9. Grafik Penerangan Hukum Penyuluhan Hukum',
                    'target' => '_self',
                    'icon_class' => '',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_grafik_penkum_luhkum',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/grafik-penkum-luhkum';
                $menu_item->title = '9. Grafik Penerangan Hukum Penyuluhan Hukum';
                $menu_item->target = '_self';
                $menu_item->icon_class = '';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_grafik_penkum_luhkum';
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
