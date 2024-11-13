<div class="s">
    <div class="w-52 bg-primary-200 h-screen py-4 px-6 border-r font-bold shadow-xl">
        <div class="dashboard text-lg mb-4 {{ request()->is('dashboard') ? 'text-primary-0' : ' '}} hover:text-blue-600 flex">
            
            <a href="{{ route('dashboard') }}">Your Profil</a>
        </div>
        <div class="dashboard text-lg mb-4 {{ request()->is('dashboard/posts') ? 'text-primary-0' : 'text-white '}} hover:text-blue-600">
            <a href="/dashboard/posts">Pesanan</a>
        </div>
    </div>
</div>