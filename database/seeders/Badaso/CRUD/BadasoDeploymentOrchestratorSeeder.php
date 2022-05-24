<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Traits\Seedable;

class BadasoDeploymentOrchestratorSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = 'database/seeders/Badaso/CRUD/';

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        
        
        $this->seed(RegisterSuratKeluarCRUDDataTypeAdded::class);
        $this->seed(RegisterSuratKeluarCRUDDataRowAdded::class);
        $this->seed(RegisterKerjaIdeologiCRUDDataTypeAdded::class);
        $this->seed(RegisterKerjaIdeologiCRUDDataRowAdded::class);
        $this->seed(RegisterKerjaSosialCRUDDataTypeAdded::class);
        $this->seed(RegisterKerjaSosialCRUDDataRowAdded::class);
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        $this->seed(RegisterKegiatanSosialCRUDDataDeleted::class);
        $this->seed(RegisterKegiatanIdeologiCRUDDataDeleted::class);
        $this->seed(RegisterArsipCRUDDataDeleted::class);
        $this->seed(RegisterProdukIntelijenCRUDDataDeleted::class);
        $this->seed(RegisterEkspedisiSuratCRUDDataDeleted::class);
        $this->seed(RegisterKerjaTeknologiCRUDDataDeleted::class);
        $this->seed(RegisterKerjaPamPembangunanCRUDDataDeleted::class);
        $this->seed(RegisterKegiatanEkonomiCRUDDataDeleted::class);
        $this->seed(RegisterKerjaEkonomiCRUDDataTypeAdded::class);
        $this->seed(RegisterKerjaEkonomiCRUDDataRowAdded::class);
        
        
        $this->seed(RegisterOperasiPamPembangunanCRUDDataDeleted::class);
        $this->seed(RegisterKerjaPamPembangunanCRUDDataTypeAdded::class);
        $this->seed(RegisterKerjaPamPembangunanCRUDDataRowAdded::class);
        $this->seed(RegisterKerjaTeknologiCRUDDataTypeAdded::class);
        $this->seed(RegisterKerjaTeknologiCRUDDataRowAdded::class);
        $this->seed(RegisterEkspedisiSuratCRUDDataTypeAdded::class);
        $this->seed(RegisterEkspedisiSuratCRUDDataRowAdded::class);
        $this->seed(RegisterProdukIntelijenCRUDDataTypeAdded::class);
        $this->seed(RegisterProdukIntelijenCRUDDataRowAdded::class);
        $this->seed(RegisterArsipCRUDDataTypeAdded::class);
        $this->seed(RegisterArsipCRUDDataRowAdded::class);
        $this->seed(RegisterKegiatanIdeologiCRUDDataTypeAdded::class);
        $this->seed(RegisterKegiatanIdeologiCRUDDataRowAdded::class);
        $this->seed(RegisterKegiatanSosialCRUDDataTypeAdded::class);
        $this->seed(RegisterKegiatanSosialCRUDDataRowAdded::class);
        $this->seed(RegisterKegiatanEkonomiCRUDDataTypeAdded::class);
        $this->seed(RegisterKegiatanEkonomiCRUDDataRowAdded::class);
        $this->seed(RegisterKegiatanPamPembangunanCRUDDataTypeAdded::class);
        $this->seed(RegisterKegiatanPamPembangunanCRUDDataRowAdded::class);
        $this->seed(RegisterKegiatanTeknologiCRUDDataTypeAdded::class);
        $this->seed(RegisterKegiatanTeknologiCRUDDataRowAdded::class);
        $this->seed(RegisterOperasiIdeologiCRUDDataTypeAdded::class);
        $this->seed(RegisterOperasiIdeologiCRUDDataRowAdded::class);
        $this->seed(RegisterOperasiSosialCRUDDataTypeAdded::class);
        $this->seed(RegisterOperasiSosialCRUDDataRowAdded::class);
        $this->seed(RegisterOperasiEkonomiCRUDDataTypeAdded::class);
        $this->seed(RegisterOperasiEkonomiCRUDDataRowAdded::class);
        $this->seed(RegisterOperasiPamPembangunanCRUDDataTypeAdded::class);
        $this->seed(RegisterOperasiPamPembangunanCRUDDataRowAdded::class);
        $this->seed(RegisterOperasiTeknologiCRUDDataTypeAdded::class);
        $this->seed(RegisterOperasiTeknologiCRUDDataRowAdded::class);
        $this->seed(RegisterBeritaMasukCRUDDataTypeAdded::class);
        $this->seed(RegisterBeritaMasukCRUDDataRowAdded::class);
        $this->seed(RegisterBeritaKeluarCRUDDataTypeAdded::class);
        $this->seed(RegisterBeritaKeluarCRUDDataRowAdded::class);
        $this->seed(RegisterTelaahanCRUDDataTypeAdded::class);
        $this->seed(RegisterTelaahanCRUDDataRowAdded::class);
        $this->seed(RegisterEkspedisiBeritaCRUDDataTypeAdded::class);
        $this->seed(RegisterEkspedisiBeritaCRUDDataRowAdded::class);
        $this->seed(RegisterPphPpmCRUDDataTypeAdded::class);
        $this->seed(RegisterPphPpmCRUDDataRowAdded::class);
        $this->seed(RegisterPeneranganPenyuluhanCRUDDataTypeAdded::class);
        $this->seed(RegisterPeneranganPenyuluhanCRUDDataRowAdded::class);
        
        
        $this->seed(RegisterSuratMasukCRUDDataDeleted::class);
        
        
        $this->seed(RegisterSuratMasukCRUDDataTypeAdded::class);
        $this->seed(RegisterSuratMasukCRUDDataRowAdded::class);
        $this->seed(PenandatangananCRUDDataDeleted::class);
        
        
        $this->seed(PenandatangananCRUDDataTypeAdded::class);
        $this->seed(PenandatangananCRUDDataRowAdded::class);
        $this->seed(DataPetaCRUDDataTypeAdded::class);
        $this->seed(DataPetaCRUDDataRowAdded::class);
        
        
        $this->seed(PetaIdeologiCRUDDataDeleted::class);
        $this->seed(PetaIdeologiCRUDDataTypeAdded::class);
        $this->seed(PetaIdeologiCRUDDataRowAdded::class);
        $this->seed(PetaSosialCRUDDataTypeAdded::class);
        $this->seed(PetaSosialCRUDDataRowAdded::class);
        $this->seed(PetaEkonomiCRUDDataTypeAdded::class);
        $this->seed(PetaEkonomiCRUDDataRowAdded::class);
        $this->seed(PetaPamCRUDDataTypeAdded::class);
        $this->seed(PetaPamCRUDDataRowAdded::class);
        $this->seed(PetaTeknologiCRUDDataTypeAdded::class);
        $this->seed(PetaTeknologiCRUDDataRowAdded::class);
        $this->seed(DataPeneranganCRUDDataTypeAdded::class);
        $this->seed(DataPeneranganCRUDDataRowAdded::class);
        $this->seed(DataPenyuluhanCRUDDataTypeAdded::class);
        $this->seed(DataPenyuluhanCRUDDataRowAdded::class);
        $this->seed(DataFotoPeneranganCRUDDataTypeAdded::class);
        $this->seed(DataFotoPeneranganCRUDDataRowAdded::class);
        $this->seed(DataFotoPenyuluhanCRUDDataTypeAdded::class);
        $this->seed(DataFotoPenyuluhanCRUDDataRowAdded::class);
        $this->seed(GrafikPenkumLuhkumCRUDDataTypeAdded::class);
        $this->seed(GrafikPenkumLuhkumCRUDDataRowAdded::class);
        $this->seed(GrafikKorupsiCRUDDataTypeAdded::class);
        $this->seed(GrafikKorupsiCRUDDataRowAdded::class);
        $this->seed(GrafikNarkotikaCRUDDataTypeAdded::class);
        $this->seed(GrafikNarkotikaCRUDDataRowAdded::class);
        $this->seed(GrafikTerorisCRUDDataTypeAdded::class);
        $this->seed(GrafikTerorisCRUDDataRowAdded::class);
        $this->seed(GrafikPerhatianMasyarakatCRUDDataTypeAdded::class);
        $this->seed(GrafikPerhatianMasyarakatCRUDDataRowAdded::class);
        $this->seed(GrafikDaerahPenyuluhanCRUDDataTypeAdded::class);
        $this->seed(GrafikDaerahPenyuluhanCRUDDataRowAdded::class);
    }
}
