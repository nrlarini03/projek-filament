<x-filament::page>
    <h1>Laporan Dosen</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIDN</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $dosen)
                <tr>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->nidn }}</td>
                    <td>{{ $dosen->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-filament::page>

