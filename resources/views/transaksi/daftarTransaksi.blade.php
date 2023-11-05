<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Daftar Transaksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Data Tabel</h1>
                    <table class="border-collapse w-full">
                        <thead>
                            <tr class="bg-gray-100 dark:bg-gray-700">
                                <th class="border border-gray-300 dark:border-gray-600">No</th>
                                <th class="border border-gray-300 dark:border-gray-600">Peminjam</th>
                                <th class="border border-gray-300 dark:border-gray-600">Kendaraan</th>
                                <th class="border border-gray-300 dark:border-gray-600">Tanggal Pinjam</th>
                                <th class="border border-gray-300 dark:border-gray-600">Tanggal Selesai</th>
                                <th class="border border-gray-300 dark:border-gray-600">Harga</th>
                                <th class="border border-gray-300 dark:border-gray-600">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transaksi as $row)
                            <tr class="text-center">
                                <td class="border border-gray-300 dark:border-gray-600">{{ $row->id }}</td>
                                <td class="border border-gray-300 dark:border-gray-600">{{ $row->userId }}</td>
                                <td class="border border-gray-300 dark:border-gray-600">{{ $row->vehicleId }}</td>
                                <td class="border border-gray-300 dark:border-gray-600">{{ $row->startDate }}</td>
                                <td class="border border-gray-300 dark:border-gray-600">{{ $row->endDate }}</td>
                                <td class="border border-gray-300 dark:border-gray-600">{{ $row->price }}</td>
                                <td class="border border-gray-300 dark:border-gray-600">{{ $row->status }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    




                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<!-- RIHANSEN ULIHDO PURBA - 6706220081 -->