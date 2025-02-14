<x-front-layout>
    <!-- Hero -->
    <div class="pt-10">
        <div class="hero min-h-[40vh] max-w-7xl mx-auto rounded-md"
            style="background-image: url({{ asset('storage/' . $content['hero']['image']) }});">
            <div class="hero-overlay bg-opacity-60 rounded-md"></div>
            <div class="max-w-7xl mx-auto hero-content text-[#FF8F00] text-center rounded-md">
                <div class="max-w-lg">
                    <h1 class="mb-5 text-5xl font-bold font-lilita">{{ $content['hero']['title'] }}</h1>
                    <p class="mb-5 font-medium">
                        {{$content['hero']['text']}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
        <!-- Mission & Vision -->
        <section id="mission_vision" class="pb-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="mission">
                    <div class="divider text-[#2E7D32]">{{ $content['mission']['small-title'] }}</div>
                    <h2 class="font-lilita text-2xl font-bold text-center mb-4 text-[#FF8F00]">
                        {{ $content['mission']['title'] }}</h2>
                    <p class="font-medium text-center text-[#FF8F00]">{{ $content['mission']['text'] }}</p>
                </div>
                <div class="vision">
                    <div class="divider text-[#2E7D32]">{{ $content['vision']['small-title'] }}</div>
                    <h2 class="font-lilita text-2xl font-bold text-center mb-4 text-[#FF8F00]">
                        {{ $content['vision']['title'] }}</h2>
                    <p class="font-medium text-center text-[#FF8F00]">{{ $content['vision']['text'] }}</p>
                </div>
            </div>
        </section>


        <!-- Team -->
        <section id="team" class="pb-20">
            <div class="divider text-[#2E7D32]">{{ $content['teams']['small-title'] }}</div>
            <h2 class="font-lilita text-2xl font-bold text-center mb-4 text-[#FF8F00]">{{ $content['teams']['title'] }}
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4 sm:p-6 lg:p-8 md:px-4">
                @foreach($teams as $team)
                    <div class="rounded-md shadow-md flex flex-col bg-white p-4">
                        <div class="avatar mx-auto mb-4">
                            <div class="w-32 rounded-full">
                                <img src="{{ asset('storage/' . $team->image) }}" />
                            </div>
                        </div>
                        <h3 class="text-lg font-medium text-center">{{ $team->name }}</h3>
                        <p class="font-medium text-center text-sm mb-2">{{ $team->title }}</p>
                        <p class="font-medium text-center italic">{{ $team->desc }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="pb-20">
            <div class="divider divider-center text-[#2E7D32] font-bold text-lg text-center">
                {{ $content['contact']['small-title'] }}</div>
            <h2 class="text-5xl font-extrabold mb-4 text-center text-[#FF8F00] font-lilita">
                {{ $content['contact']['title'] }}</h2>
            <p class="font-medium mb-8 w-full md:w-2/3 text-center mx-auto text-[#FF8F00]">
                {{ $content['contact']['text'] }}</p>

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
                            class="flex justify-center items-center btn w-full rounded-md bg-[#FF8F00] text-white text-center mx-auto">{{ __('Submit') }}</x-primary-button>
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