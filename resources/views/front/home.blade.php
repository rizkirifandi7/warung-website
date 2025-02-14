<x-front-layout>
    <div class="">
        <!-- Hero -->
        <!-- Hero -->
        <div class="border-b-2 border-[#FF8F00] ">
            <section id="hero" class="max-w-7xl mx-auto">
                <div class="flex flex-col justify-center items-center gap-4 lg:min-h-screen p-2 md:p-4">
                    <div class="flex justify-center items-center text-center flex-col gap-4">
                        <h1 class="text-7xl font-extrabold text-[#FF8F00]  font-lilita">{{ $content['hero']['title'] }}
                        </h1>
                        <p class="py-6 text-lg font-medium text-[#FF8F00]  w-[750px]">{{ $content['hero']['text'] }}</p>
                        <x-primary-button-link href="{{ $content['hero']['cta-link'] }}"
                            class="bg-[#2E7D32] px-4 py-4 rounded-md">{{ $content['hero']['cta-text'] }}</x-primary-button-link>
                    </div>

                    <div class="flex justify-center items-center gap-2 mt-10">
                        @for ($i = 0; $i < 3; $i++)
                            @if(isset($content['hero']['images'][$i]) && $content['hero']['images'][$i])
                                <img src="{{ asset('storage/' . $content['hero']['images'][$i]) }}"
                                    class="rounded-lg shadow-xl w-[240px] h-[320px] object-cover
                                                @if($i == 0) -rotate-12 @elseif($i == 1) z-10 mb-20 @elseif($i == 2) rotate-12 ml-9 @endif" />
                            @else
                                <div
                                    class="rounded-lg shadow-xl w-[240px] h-[320px] bg-gray-200 flex items-center justify-center
                                                @if($i == 0) -rotate-12 @elseif($i == 1) z-10 mb-20 @elseif($i == 2) rotate-12 ml-9 @endif">
                                    <span class="text-gray-500">No Image</span>
                                </div>
                            @endif
                        @endfor
                    </div>
                </div>
            </section>
        </div>

        <!-- About -->
        <div class=" border-b-2 border-[#FF8F00]">
            <section id="about" class="py-20 max-w-7xl mx-auto">
                <div class="text-center">
                    <div class="divider divider-center text-[#2E7D32] font-bold text-lg text-center">
                        {{ $content['about']['small-title'] }}
                    </div>
                    <h2 class="text-5xl font-extrabold text-[#FF8F00] font-lilita mb-8">
                        {{ $content['about']['title'] }}
                    </h2>
                    <p class="text-[#FF8F00] font-medium mb-10 mx-auto w-[750px] text-center">
                        {{ $content['about']['text'] }}
                    </p>
                </div>

                <div class="flex justify-center items-center gap-4 mt-10">
                    @for ($i = 0; $i < 3; $i++)
                            @if(isset($content['hero']['images'][$i]) && $content['hero']['images'][$i])
                                    <img src="{{ asset('storage/' . $content['hero']['images'][$i]) }}" class="rounded-lg shadow-xl w-[240px] h-[320px] object-cover
                                @if($i == 0) rotate-0 @elseif($i == 1) z-10 mb-20 @elseif($i == 2) rotate-0 ml-9 @endif" />
                            @else
                                    <div class="rounded-lg shadow-xl w-[240px] h-[320px] bg-gray-200 flex items-center justify-center
                                @if($i == 0) rotate-0 @elseif($i == 1) z-10 mb-20 @elseif($i == 2) rotate-0 ml-9 @endif">
                                        <span class="text-gray-500">No Image</span>
                                    </div>
                            @endif
                    @endfor
                </div>

                <div class="flex justify-center items-center gap-8 mt-10">
                    <div class="space-y-2">
                        <h3 class="font-bold text-xl font-lilita text-[#FF8F00]">Visi Kami</h3>
                        <p class="text-[#FF8F00] font-medium w-full text-justify">
                            Menjadi warung makan favorit yang menyajikan hidangan nasi dan mie berkualitas dengan cita
                            rasa autentik, harga terjangkau, serta pelayanan terbaik bagi semua pelanggan.</p>
                    </div>

                    <div class="space-y-2">
                        <h3 class="font-bold font-lilita text-xl text-[#FF8F00]">Tujuan Kami</h3>
                        <p class="text-[#FF8F00] font-medium w-full text-justify">Di Warung Nasi & Mie, kami
                            berkomitmen
                            menyajikan
                            hidangan lezat, higienis, dan berkualitas dengan harga terjangkau. Kami menciptakan suasana
                            makan yang nyaman serta terus berinovasi dalam menu agar pelanggan selalu memiliki pilihan
                            terbaik. Dengan pelayanan ramah dan bahan-bahan segar, kami berharap menjadi tempat makan
                            favorit bagi semua orang. </p>
                    </div>
                </div>
                <div class="mt-10 flex justify-center items-center">
                    <x-primary-button-link href="{{ $content['about']['cta-link'] }}"
                        class="btn bg-[#2E7D32]">{{ $content['about']['cta-text'] }}</x-primary-button-link>
                </div>
            </section>
        </div>

        <!-- Menu -->
        <div class="border-b-2 border-[#FF8F00] ">
            <section id="menu" class="py-20 max-w-7xl mx-auto">
                <div class="divider divider-center text-[#2E7D32] font-bold text-lg text-center">
                    {{ $content['product']['small-title'] }}
                </div>
                <h2 class="text-5xl font-extrabold text-[#FF8F00]  font-lilita text-center">
                    {{ $content['product']['title'] }}
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10 mb-16">
                    @foreach($menus as $menu)
                        <div class="card bg-white border">
                            <figure>
                                @if($menu->image)
                                    <img class="w-full object-cover h-[250px]" src="{{ asset('storage/' . $menu->image) }}" />
                                @else
                                    <img class="w-full object-cover h-[250px]"
                                        src="{{ asset('storage/' . 'menu-images/default.png') }}" />
                                @endif
                            </figure>
                            <div class="flex flex-col gap-1.5 p-5 text-green-700">
                                <h2 class="text-lg font-medium text-green-700">
                                    {{ $menu->name }}
                                </h2>
                                <div class="card-actions">
                                    <div class="px-2 py-0.5 border border-gretext-green-700 rounded-full text-sm">
                                        {{ $menu->category->name }}
                                    </div>
                                </div>
                                <p class="text-xl font-bold text-green-700">Rp{{ number_format($menu->price, 0) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="flex justify-center">
                    <x-primary-button-link href="{{ $content['product']['cta-link'] }}"
                        class="px-4 py-4 bg-[#2E7D32] rounded-md">{{ $content['product']['cta-text'] }}</x-primary-button-link>
                </div>
            </section>
        </div>


        <!-- Contact -->
        <section id="contact" class="py-20 max-w-7xl mx-auto">
            <div class="divider divider-center text-[#2E7D32] font-bold text-lg text-center">
                {{ $content['contact']['small-title'] }}
            </div>
            <h2 class="text-5xl font-extrabold mb-4 text-center text-[#FF8F00]  font-lilita">
                {{ $content['contact']['title'] }}
            </h2>
            <p class="font-medium mb-8 w-full md:w-2/3 text-center mx-auto text-[#FF8F00] ">
                {{ $content['contact']['text'] }}
            </p>

            <div class="md:w-2/3 mx-auto">
                <form method="POST" action="{{ route('messages.store') }}" class="w-full">
                    @csrf
                    <div class="mb-4">
                        <x-input-label for="name" :value="__('Nama')" />
                        <x-text-input name="name" placeholder="{{ __('Masukan nama anda...') }}"
                            class="text-black block mt-1 w-full border border-gray-300  focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            :value="old('name')"></x-text-input>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input name="email" placeholder="{{ __('Masukan email anda...') }}"
                            class="text-black block mt-1 w-full border border-gray-300  focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            :value="old('email')"></x-text-input>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="phone" :value="__('Nomor Telepon (Optional)')" />
                        <x-text-input name="phone" placeholder="{{ __('Masukan nomor telepon anda... (Optional)') }}"
                            class="text-black block mt-1 w-full border border-gray-300  focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            :value="old('phone')"></x-text-input>
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="message" :value="__('Saran')" />
                        <textarea name="message"
                            class="text-black block w-full mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                            placeholder="Masukan saran anda...">{{ old('message', '') }}</textarea>
                        <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    </div>

                    <div class="mt-8 flex justify-center items-center gap-4 w-full text-center mx-auto">
                        <x-primary-button
                            class="flex justify-center items-center btn w-full rounded-md bg-[#FF8F00]  text-white text-center mx-auto">{{ __('Submit') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </section>
    </div>

    @if ($errors->any())
        <script>
            window.location.hash = '#contact';
        </script>
    @endif

    <!-- Sweet Alert - Start -->
    @if(session()->has('success'))
        <script>
            Swal.fire({
                title: "Thank You!",
                text: "{{ session()->get('success') }}",
                icon: "success"
            });
        </script>
    @endif
    <!-- Sweet Alert - End -->
</x-front-layout>