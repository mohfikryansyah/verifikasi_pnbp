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

    public $filters = [
        'berlaku-min' => null,
        'berlaku-max' => null,
    ];



    public function updatedFilters()
    {
        $this->resetPage();
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.daftar-ippkh', [
            'dataIppkhs' => DataIppkh::query()
                ->when($this->filters['berlaku-min'], fn ($query, $berlaku) => $query->where('masa_berlaku', '>=', $berlaku))
                ->when($this->filters['berlaku-max'], fn ($query, $berlaku) => $query->where('masa_berlaku', '<=', $berlaku))
                ->search('pt', $this->search)
                ->paginate(6)
        ]);
    }
}