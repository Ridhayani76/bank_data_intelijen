<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class RegisterPeneranganPenyuluhanCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'register_penerangan_penyuluhan')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'register_penerangan_penyuluhan')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'id' => 35,
                'name' => 'register_penerangan_penyuluhan',
                'slug' => 'register-penerangan-penyuluhan',
                'display_name_singular' => 'R.IN.22 - Register Pelaksanaan Kegiatan Penerangan Hukum dan Penyuluhan Hukum',
                'display_name_plural' => '22. Register Pelaksanaan Kegiatan Penerangan Hukum dan Penyuluhan Hukum',
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
                'created_at' => '2022-05-21T17:25:54.000000Z',
                'updated_at' => '2022-05-22T18:27:13.000000Z',
            ));

            Badaso::model('Permission')->generateFor('register_penerangan_penyuluhan');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/register-penerangan-penyuluhan')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => '22. Register Pelaksanaan Kegiatan Penerangan Hukum dan Penyuluhan Hukum',
                    'target' => '_self',
                    'icon_class' => '',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_register_penerangan_penyuluhan',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/register-penerangan-penyuluhan';
                $menu_item->title = '22. Register Pelaksanaan Kegiatan Penerangan Hukum dan Penyuluhan Hukum';
                $menu_item->target = '_self';
                $menu_item->icon_class = '';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_register_penerangan_penyuluhan';
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
