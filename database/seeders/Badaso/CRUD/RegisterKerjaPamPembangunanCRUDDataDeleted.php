<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class RegisterKerjaPamPembangunanCRUDDataDeleted extends Seeder
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
			$data_type = Badaso::model('DataType')->where('name', 'register_kerja_pam_pembangunan')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'register_kerja_pam_pembangunan')->delete();
            }

			Badaso::model('Permission')->removeFrom('register_kerja_pam_pembangunan');

			$menuItem = Badaso::model('MenuItem')::where('url', '/general/register-kerja-pam-pembangunan');

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
