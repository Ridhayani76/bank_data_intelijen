<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class RegisterEkspedisiSuratCRUDDataDeleted extends Seeder
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
			$data_type = Badaso::model('DataType')->where('name', 'register_ekspedisi_surat')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'register_ekspedisi_surat')->delete();
            }

			Badaso::model('Permission')->removeFrom('register_ekspedisi_surat');

			$menuItem = Badaso::model('MenuItem')::where('url', '/general/register-ekspedisi-surat');

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
