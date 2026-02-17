@extends('layouts.app')

@section('title', 'Jadwal Dosen')

@section('content')
<div class="card bg-base-100 shadow-xl">
    <div class="card-body">
        <div class="flex justify-between items-center mb-6">
            <h2 class="card-title text-3xl">Jadwal Dosen</h2>
            @auth
                <a href="{{ route('schedule.create') }}" class="btn btn-primary">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Jadwal
                </a>
            @endauth
        </div>

        <!-- Search & Filter -->
        <div class="flex flex-col md:flex-row gap-4 mb-6">
            <div class="form-control flex-1">
                <input type="text" placeholder="Cari dosen atau mata kuliah..." class="input input-bordered w-full" />
            </div>
            <select class="select select-bordered w-full md:w-48">
                <option>Semua Hari</option>
                <option>Senin</option>
                <option>Selasa</option>
                <option>Rabu</option>
                <option>Kamis</option>
                <option>Jumat</option>
                <option>Sabtu</option>
            </select>
        </div>

        <!-- Schedule Table -->
        <div class="overflow-x-auto">
            <table class="table table-zebra w-full">
                <thead>
                    <tr>
                        <th>Hari</th>
                        <th>Waktu</th>
                        <th>Mata Kuliah</th>
                        <th>Dosen</th>
                        <th>Ruangan</th>
                        @auth
                            <th>Aksi</th>
                        @endauth
                    </tr>
                </thead>
                <tbody>
                    @forelse($schedules ?? [] as $schedule)
                        <tr class="hover">
                            <td>{{ $schedule->day }}</td>
                            <td>{{ $schedule->time_start }} - {{ $schedule->time_end }}</td>
                            <td>{{ $schedule->course }}</td>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div class="avatar placeholder">
                                        <div class="bg-neutral-focus text-neutral-content rounded-full w-12">
                                            <span class="text-xl">{{ substr($schedule->dosen_name, 0, 1) }}</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">{{ $schedule->dosen_name }}</div>
                                        <div class="text-sm opacity-50">{{ $schedule->dosen_nip }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $schedule->room }}</td>
                            @auth
                                <td>
                                    <div class="flex gap-2">
                                        <a href="{{ route('schedule.edit', $schedule->id) }}" class="btn btn-sm btn-ghost">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <form action="{{ route('schedule.destroy', $schedule->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-ghost text-error" onclick="return confirm('Yakin hapus jadwal ini?')">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            @endauth
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-8">
                                <div class="text-base-content/50">
                                    <svg class="w-16 h-16 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <p>Belum ada jadwal</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if(isset($schedules) && $schedules->hasPages())
            <div class="flex justify-center mt-6">
                {{ $schedules->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
