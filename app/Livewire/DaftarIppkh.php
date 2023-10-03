<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\DataIppkh;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;

class DaftarIppkh extends Component
{
    use WithPagination;

    #[Url] 
    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.daftar-ippkh', [
            'dataIppkhs' => DataIppkh::where('pt', 'like', '%' . $this->search . '%')->orWhere('nomor_sk', 'like', '%' . $this->search . '%')->paginate(6)
            // 'dataIppkh' => DataIppkh::all()
        ]);
    }
}