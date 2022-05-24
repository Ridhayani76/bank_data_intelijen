<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class PetaIdeologiCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'peta_ideologi')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'peta_ideologi')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'name' => 'peta_ideologi',
                'slug' => 'peta-ideologi',
                'display_name_singular' => 'D.IN.2 - Peta dan Simbol Sektor pada Bidang Ideologi Politik, Pertahanan dan Keamanan',
                'display_name_plural' => '2. Data Peta Ideologi Politik, Pertahanan dan Keamanan',
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
                'updated_at' => '2022-05-22T21:06:19.000000Z',
                'created_at' => '2022-05-22T21:06:19.000000Z',
                'id' => 46,
            ));

            Badaso::model('Permission')->generateFor('peta_ideologi');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/peta-ideologi')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => '2. Data Peta Ideologi Politik, Pertahanan dan Keamanan',
                    'target' => '_self',
                    'icon_class' => '',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_peta_ideologi',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/peta-ideologi';
                $menu_item->title = '2. Data Peta Ideologi Politik, Pertahanan dan Keamanan';
                $menu_item->target = '_self';
                $menu_item->icon_class = '';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_peta_ideologi';
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
