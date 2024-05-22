<x-guest-layout>
    <section class="search">
        <img src="{{ asset('frontend-assets/img/banner1.png') }}" alt="banner" />
        <h1 class="text-center my-5">search</h1>
        @foreach ($data as $item)
            <p class="p-5">{{ $item->title }}</p>
        @endforeach
    </section>
</x-guest-layout>
