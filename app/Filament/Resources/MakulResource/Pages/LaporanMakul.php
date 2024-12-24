<?php

namespace App\Filament\Resources\MakulResource\Pages;

use App\Models\Makul;
use App\Filament\Resources\MakulResource;
use Filament\Resources\Pages\Page;
use Illuminate\Contracts\View\View; 

class LaporanMakul extends Page
{
    protected static string $resource = MakulResource::class;

    protected static string $view = 'filament.resources.makul-resource.pages.laporan-makul';

    public function render() : View
    {
        // Mengambil data makul dari database
        $makuls = Makul::all();

        // Mengirim data makul ke view
        return view('filament.resources.makul-resource.pages.laporan-makul', compact('makuls'));
    }
}
