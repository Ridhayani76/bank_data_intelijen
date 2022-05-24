<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class PetaTeknologiCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'peta_teknologi')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'peta_teknologi')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'name' => 'peta_teknologi',
                'slug' => 'peta-teknologi',
                'display_name_singular' => 'D.IN.6 - Peta dan Simbol Sektor pada Bidang Teknologi Informasi dan Produksi Intelijen',
                'display_name_plural' => '6. Data Peta Teknologi Informasi dan Produksi Intelijen',
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
                'updated_at' => '2022-05-22T21:13:59.000000Z',
                'created_at' => '2022-05-22T21:13:59.000000Z',
                'id' => 50,
            ));

            Badaso::model('Permission')->generateFor('peta_teknologi');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/peta-teknologi')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => '6. Data Peta Teknologi Informasi dan Produksi Intelijen',
                    'target' => '_self',
                    'icon_class' => '',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_peta_teknologi',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/peta-teknologi';
                $menu_item->title = '6. Data Peta Teknologi Informasi dan Produksi Intelijen';
                $menu_item->target = '_self';
                $menu_item->icon_class = '';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_peta_teknologi';
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
