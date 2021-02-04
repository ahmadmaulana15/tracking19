<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;
use App\Models\Kasus2;

class Dropdowns extends Component
{
    public $provinsi;
    public $kota;
    public $kecamatan;
    public $kelurahan;
    public $rw;

    public $selectedProvinsi  = NULL;
    public $selectedKota = NULL;
    public $selectedKecamatan = NULL;
    public $selectedKelurahan = NULL;
    public $selectedRw = NULL;
    

    public function mount($selectedRw = null)
    {
        $this->provinsi  = Provinsi::all();
        $this->kota      = collect();
        $this->kecamatan = collect();
        $this->kelurahan = collect();
        $this->rw = collect();
        $this->selectedRw = $selectedRw;

        if (!is_null($selectedRw))
        {
            $rw = Rw::with('kelurahan.kecamatan.kota.provinsi')->find($selectedRw);
            if ($rw)
            {
                $this->rw = Rw::where('id_kelurahan', $rw->id_kelurahan)->get();
                $this->kelurahan = Kelurahan::where('id_kecamatan', $rw->kelurahan->id_kecamatan)->get();
                $this->kecamatan = Kecamatan::where('id_kota', $rw->kelurahan->kecamatan->id_kota)->get();
                $this->kota = Kota::where('id_provinsi', $rw->kelurahan->kecamatan->kota->id_provinsi)->get();
                $this->SelectedProvinsi = $rw->kelurahan->kecamatan->kota->id_provinsi;
                $this->SelectedKota = $rw->kelurahan->kecamatan->id_kota;
                $this->SelectedKecamatan = $rw->kelurahan->id_kecamatan;
                $this->SelectedKelurahan = $rw->id_kelurahan;
            }
        }
    }

    public function render()
    {
        return view('livewire.dropdowns');
    }

    public function updatedSelectedProvinsi($provinsi)
    {
        $this->kota = Kota::where('id_provinsi', $provinsi)->get();
    }

    public function updatedSelectedKota($kota)
    {
        $this->kecamatan = Kecamatan::where('id_kota', $kota)->get();
    }

    public function updatedSelectedKecamatan($kecamatan)
    {
        $this->kelurahan = Kelurahan::where('id_kecamatan', $kecamatan)->get();
    }
    
    public function updatedSelectedKelurahan($kelurahan)
    {
        $this->rw = Rw::where('id_kelurahan', $kelurahan)->get();
    }

    public function updatedSelectedRw($rw)
    {
        $this->kasus2 = Kasus2::where('id_rw', $rw)->get();
    }
    
}