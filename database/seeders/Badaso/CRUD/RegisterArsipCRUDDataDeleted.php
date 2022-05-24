<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class RegisterArsipCRUDDataDeleted extends Seeder
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
			$data_type = Badaso::model('DataType')->where('name', 'register_arsip')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'register_arsip')->delete();
            }

			Badaso::model('Permission')->removeFrom('register_arsip');

			$menuItem = Badaso::model('MenuItem')::where('url', '/general/register-arsip');

            if ($menuItem->exists()) {
                $menuItem->delete();
            }

			\DB::commit();
       	} catch(Exception $e) {
        	\DB::rollBack();

        	throw new Exception('Exception occur ' . $e);
       	}
    }
}
