<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class PetaSosialCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'peta_sosial')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'peta_sosial')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'name' => 'peta_sosial',
                'slug' => 'peta-sosial',
                'display_name_singular' => 'D.IN.3 - Peta dan Simbol Sektor pada Bidang Sosial Budaya dan Kemasyarakatan',
                'display_name_plural' => '3. Data Peta Sosial Budaya dan Kemasyarakatan',
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
                'updated_at' => '2022-05-22T21:08:09.000000Z',
                'created_at' => '2022-05-22T21:08:09.000000Z',
                'id' => 47,
            ));

            Badaso::model('Permission')->generateFor('peta_sosial');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/peta-sosial')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => '3. Data Peta Sosial Budaya dan Kemasyarakatan',
                    'target' => '_self',
                    'icon_class' => '',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_peta_sosial',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/peta-sosial';
                $menu_item->title = '3. Data Peta Sosial Budaya dan Kemasyarakatan';
                $menu_item->target = '_self';
                $menu_item->icon_class = '';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_peta_sosial';
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
