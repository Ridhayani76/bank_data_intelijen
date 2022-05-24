<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class PetaIdeologiCRUDDataDeleted extends Seeder
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

			Badaso::model('Permission')->removeFrom('peta_ideologi');

			$menuItem = Badaso::model('MenuItem')::where('url', '/general/peta-ideologi');

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
