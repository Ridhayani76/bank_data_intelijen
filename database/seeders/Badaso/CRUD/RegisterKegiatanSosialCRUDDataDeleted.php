<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class RegisterKegiatanSosialCRUDDataDeleted extends Seeder
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
			$data_type = Badaso::model('DataType')->where('name', 'register_kegiatan_sosial')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'register_kegiatan_sosial')->delete();
            }

			Badaso::model('Permission')->removeFrom('register_kegiatan_sosial');

			$menuItem = Badaso::model('MenuItem')::where('url', '/general/register-kegiatan-sosial');

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
