<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Daftar Kendaraan') }}
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
                                <th class="border border-gray-300 dark:border-gray-600">ID</th>
                                <th class="border border-gray-300 dark:border-gray-600">Kendaraan</th>
                                <th class="border border-gray-300 dark:border-gray-600">Tipe</th>
                                <th class="border border-gray-300 dark:border-gray-600">License</th>
                                <th class="border border-gray-300 dark:border-gray-600">Daily Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kendaraan as $row)
                            <tr class="text-center">
                                <td class="border border-gray-300 dark:border-gray-600">{{ $row->id }}</td>
                                <td class="border border-gray-300 dark:border-gray-600">{{ $row->name }}</td>
                                <td class="border border-gray-300 dark:border-gray-600">{{ $row->typeId }}</td>
                                <td class="border border-gray-300 dark:border-gray-600">{{ $row->license }}</td>
                                <td class="border border-gray-300 dark:border-gray-600">{{ $row->dailyPrice }}</td>
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