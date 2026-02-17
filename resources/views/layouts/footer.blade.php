<footer class="footer footer-center p-10 bg-base-100 text-base-content mt-20">
    <div>
        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        <p class="font-bold">
            {{ config('app.name') }}
            <br/>
            Lab WICIDA - Sistem Manajemen Jadwal Dosen
        </p>
        <p>Copyright © {{ date('Y') }} - All rights reserved</p>
    </div>
    <div>
        <div class="grid grid-flow-col gap-4">
            <a class="link link-hover">About</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Privacy Policy</a>
        </div>
    </div>
</footer>
