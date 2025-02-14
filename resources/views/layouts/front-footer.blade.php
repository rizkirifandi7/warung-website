<div class="bg-[#FF8F00] border-t-2 border-[#FF8F00]">
    <footer class="footer max-w-7xl mx-auto p-10 md:justify-between">
        <aside>
            <a href="/">
                <img src="{{ asset('storage/' . $logo['content']['company']['logo']) }}" class="w-24">
            </a>
            <p class="text-2xl font-bold text-white">
                {{ $logo['content']['company']['name'] }}
            </p>
        </aside>
        <nav class="text-white">
            <h6 class="footer-title text-white opacity-100">Links</h6>
            <a class="link link-hover" href="{{ route('home') }}">Home</a>
            <a class="link link-hover" href="{{ route('menu') }}">Menu</a>
            <a class="link link-hover" href="{{ route('about') }}">About</a>
            <a class="link link-hover" href="{{ route('contact') }}">Contact</a>
        </nav>
        <nav class="text-white">
            <h6 class="footer-title text-white opacity-100">Social</h6>
            <div class="grid grid-flow-col gap-4">
                @foreach($socials as $social)
                <a href="{{ $social->url }}" class="tooltip" data-tip="{{ $social->username }}">
                    <img src="{{ asset('storage/' . $social->image) }}" alt="{{ $social->name }}">
                </a>
                @endforeach
            </div>
        </nav>
    </footer>
</div>