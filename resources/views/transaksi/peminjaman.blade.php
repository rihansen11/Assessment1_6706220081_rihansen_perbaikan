<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Peminjaman Kendaraan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-dark-100">
                    <h1>Data Tabel</h1>


                    <div class="form-group">
                        <label for="nama">Peminjam</label>
                        <br>
                        <select name="idPeminjam" id="idPeminjam" class="form-control" style="width: 1000px">
                            @foreach($user as $nama)
                                <option value="{{ $nama->name }}" @if(old('nama') == $nama) selected @endif>{{ $nama->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="nama">Kendaraan</label>
                        <br>
                        <select name="idPeminjam" id="idPeminjam" class="form-control" style="width: 1000px">
                            @foreach($kendaraan as $nama)
                                <option value="{{ $nama->name }}" @if(old('nama') == $nama) selected @endif>{{ $nama->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>

                    <div class="form-group" style="width: 1000px">
                        <label for="tanggal_peminjaman">Start</label>
                        <br>
                        <input style="width: 1000px" type="date" name="tanggal_peminjaman" id="tanggal_peminjaman" class="form-control" value="{{ old('tanggal_peminjaman') }} ">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="tanggal_peminjaman">End</label>
                        <br>
                        <input style="width: 1000px" type="date" name="tanggal_peminjaman" id="tanggal_peminjaman" class="form-control" value="{{ old('tanggal_peminjaman') }}">
                    </div>
                    <br>
                    <!-- Tombol Submit -->
                    <button style="width: 1000px; height: 40px; background-color :darkgreen; color : white" type="submit" class="btn btn-primary">OK</button>
                    <br>
                    <br>
                    <button style="width: 1000px; height: 40px; background-color : red; color : white" type="submit" class="btn btn-primary">Reset</button>





                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<!-- RIHANSEN ULIHDO PURBA - 6706220081 -->