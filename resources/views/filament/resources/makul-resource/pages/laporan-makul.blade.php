<x-filament::page>
    <h1>Laporan Mata Kuliah</h1>
    <table>
        <thead>
            <tr>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($makuls as $makul)
                <tr>
                    <td>{{ $makul->kode }}</td>
                    <td>{{ $makul->nama_makul }}</td>
                    <td>{{ $makul->sks }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-filament::page>
