<?php

namespace App\Filament\Resources\DosenResource\Pages;

use App\Models\Dosen;
use App\Filament\Resources\DosenResource;
use Filament\Resources\Pages\Page;
use Illuminate\Contracts\View\View; 

class LaporanDosen extends Page
{
    protected static string $resource = DosenResource::class;

    protected static string $view = 'filament.resources.dosen-resource.pages.laporan-dosen';

    public function render(): View
    {
        $dosens = Dosen::all();
        return view('filament.pages.laporan-dosen', compact('dosens'));
    }
}
