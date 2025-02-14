<x-front-layout>
    <!-- Hero -->
    <div class="pt-10">
        <div class="hero min-h-[40vh] max-w-7xl mx-auto rounded-md"
            style="background-image: url({{ asset('storage/' . $content['hero']['image']) }});">
            <div class="hero-overlay bg-opacity-60 rounded-md"></div>
            <div class="max-w-7xl mx-auto hero-content text-[#FF8F00]  text-center rounded-md">
                <div class="max-w-lg">
                    <h1 class="mb-5 text-5xl font-bold font-lilita">{{ $content['hero']['title'] }}</h1>
                    <p class="mb-5 font-medium ">
                        {{$content['hero']['text']}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto pt-6 pb-10">
        <!-- Categories -->
        <div
            class="flex flex-row sticky md:static top-0 left-0 right-0  py-6 gap-4 z-40 overflow-x-auto no-scrollbar">
            <span class="badge cursor-pointer p-4 badge-lg active bg-[#FF8F00]  text-white" data-category-id="all">All
                Category</span>
            @foreach ($categories as $category)
                <span class="badge cursor-pointer p-4 badge-lg bg-orange-100"
                    data-category-id="{{ $category->id }}">{{ $category->name }}</span>
            @endforeach
        </div>

        <!-- Menu List -->
        <section id="menu_list">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4" id="menu-list">
                @forelse($menus as $menu)
                    <div class="card bg-white border border-[#FF8F00]  rounded-md">
                        <figure>
                            @if($menu->image)
                                <img class="w-full object-cover h-[250px]" src="{{ asset('storage/' . $menu->image) }}" />
                            @else
                                <img class="w-full object-cover h-[250px]"
                                    src="{{ asset('storage/' . 'menu-images/default.png') }}" />
                            @endif
                        </figure>
                        <div class="flex flex-col gap-1.5 p-5 text-[#2E7D32] border-t border-[#FF8F00] ">
                                <h2 class="text-lg font-medium text-[#2E7D32]">
                                    {{ $menu->name }}
                                </h2>
                                <div class="card-actions">
                                    <div class="px-2 py-0.5 border text-[#2E7D32] border-[#2E7D32] rounded-full text-sm">
                                        {{ $menu->category->name }}</div>
                                </div>
                                <p class="text-xl font-bold text-[#2E7D32]">Rp{{ number_format($menu->price, 0) }}</p>
                            </div>
                    </div>
                @empty
                    <p>We're sorry... We can't find the menu you want...</p>
                @endforelse
            </div>
        </section>
    </div>

    <script>
        document.querySelectorAll('.badge').forEach(badge => {
            badge.addEventListener('click', function () {
                let categoryId = this.getAttribute('data-category-id');
                let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                // Remove Selected Category Class
                document.querySelectorAll('.badge').forEach(badge => {
                    badge.classList.remove('bg-[#FF8F00] ', 'text-white');
                    badge.classList.add('bg-indigo-100');
                });

                // Set Selected Category Class
                this.classList.remove('bg-orange-100');
                this.classList.add('bg-[#FF8F00] ', 'text-white');

                fetch('/menu/filter', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        category_id: categoryId
                    })
                })
                    .then(response => response.json())
                    .then(data => {
                        let menuList = document.getElementById('menu-list');
                        menuList.innerHTML = '';

                        // Render card menu yang difilter
                        data.menus.forEach(menu => {
                            menuList.innerHTML += `
                        <div class="card bg-white border border-[#FF8F00]  rounded-md">
                            <figure>
                                ${menu.image ?
                                    `<img class="w-full object-cover h-[250px]" src="/storage/${menu.image}" />`
                                    :
                                    `<img class="w-full object-cover h-[250px]" src="/storage/menu-images/default.png" />`
                                }
                            </figure>
                            <div class="flex flex-col gap-1.5 p-5 text-greern-700 border-t border-[#FF8F00] ">
                                <h2 class="text-lg font-medium text-[#2E7D32]">
                                    ${menu.name}
                                </h2>
                                <div class="card-actions">
                                    <div class="px-2 py-0.5 border border-[#2E7D32] text-[#2E7D32] rounded-full text-sm">
                                        ${menu.category.name}</div>
                                </div>
                                <p class="text-xl font-extrabold text-[#2E7D32]">Rp${parseFloat(menu.price).toFixed(0)}</p>
                            </div>
                        </div>
                    `;
                        });
                    });
            });
        });
    </script>
</x-front-layout>