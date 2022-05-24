<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class PenandatangananCRUDDataDeleted extends Seeder
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
			$data_type = Badaso::model('DataType')->where('name', 'penandatanganan')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'penandatanganan')->delete();
            }

			Badaso::model('Permission')->removeFrom('penandatanganan');

			$menuItem = Badaso::model('MenuItem')::where('url', '/general/penandatanganan');

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
