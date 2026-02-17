@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="hero min-h-[60vh] bg-gradient-to-r from-primary to-secondary rounded-lg shadow-2xl">
    <div class="hero-content text-center text-white">
        <div class="max-w-md">
            <h1 class="text-5xl font-bold mb-5 fade-in">Jadwal Dosen</h1>
            <p class="text-lg mb-8 fade-in">
                Sistem Manajemen Jadwal Dosen Lab WICIDA
            </p>
            <div class="flex gap-4 justify-center fade-in">
                <a href="{{ route('schedule.index') }}" class="btn btn-primary btn-lg">
                    Lihat Jadwal
                </a>
                <a href="{{ route('dosen.index') }}" class="btn btn-ghost btn-lg text-white hover:bg-white/20">
                    Data Dosen
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="grid md:grid-cols-3 gap-6 mt-12">
    <div class="card bg-base-100 shadow-xl slide-in">
        <div class="card-body items-center text-center">
            <svg class="w-16 h-16 text-primary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <h2 class="card-title">Jadwal Terorganisir</h2>
            <p>Kelola jadwal dosen dengan mudah dan efisien</p>
        </div>
    </div>

    <div class="card bg-base-100 shadow-xl slide-in" style="animation-delay: 0.1s">
        <div class="card-body items-center text-center">
            <svg class="w-16 h-16 text-secondary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <h2 class="card-title">Manajemen Dosen</h2>
            <p>Database lengkap informasi dosen</p>
        </div>
    </div>

    <div class="card bg-base-100 shadow-xl slide-in" style="animation-delay: 0.2s">
        <div class="card-body items-center text-center">
            <svg class="w-16 h-16 text-accent mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 00-2-2m0 0h2a2 2 0 012-2v-2a2 2 0 00-2-2h-2a2 2 0 00-2 2z" />
            </svg>
            <h2 class="card-title">Laporan & Statistik</h2>
            <p>Analisis data jadwal secara real-time</p>
        </div>
    </div>
</div>
@endsection
