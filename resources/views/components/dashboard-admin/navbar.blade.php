<div class="w-full box-border h-14  bg-primary-200 flex items-center justify-between shadow-lg">
    <div class="py-6 bg-primary-0 w-52 px-6 flex items-center">
        <div class="h-full w-1/2">
            <img src="{{ asset('img/aset/logo/2.png')}}" class="object-contain" alt="">
        </div>

        <h1 class="text-lg font-medium text-slate-100">smileCoffe</h1>
    </div>
    <div class="font-semibold flex justify-around flex-1 text-white">
        <div class="">
            home
        </div>
        <div class="">
            Dashboard
        </div>
    </div>
    <div
        class="border border-slate-200 mr-2 rounded-md group hover:border-slate-600 hover:bg-primary-100 transition-all flex items-center pl-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="#f7fafa"
            class="bi bi-box-arrow-right group-hover:text-gray-400 " viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
            <path fill-rule="evenodd"
                d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
        </svg>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="block pr-4 pl-1 py-2 text-sm text-gray-100 group-hover:text-primary-0 "
                role="menuitem" tabindex="-1" id="user-menu-item-2">Logout</button>
        </form>
    </div>
</div>