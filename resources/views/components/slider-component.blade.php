<div class="owl-carousel owl-theme">
    @foreach ($sliders as $key => $item)
        <div class="item">
            <img src="{{ $item->responsive_file_url }}"
                alt="{{ $item->title }}">
            <div class="cover">
                <div class="header-content">
                    @if ($item->title == 'FALAK')
                        <img class="mb-3 falak-logo-banner" src="{{ asset('frontend-assets/img/falak_logo.png') }}" style="max-width:200px;" alt="falak logo">
                    @else
                        <h2 class="mb-0">{{ $item->title ?? '' }}</h2>
                    @endif
                    @if($item->link)
                    <div class="mt-3">
                        <x-read-more button_link="{{ $item->link }}" button_name="{{ $item->link_text }}">
                        </x-read-more>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>
