<div class="product_banner mb-1 mb-sm-1 mb-md-3 mb-lg-3" style="background-image: url({{ $bannerURL ?? '' }});">
    <div class="over-lay">
        <div class="content">
            @if ($bannerTitle == 'FALAK')
                <img class="mb-3 falak-logo" src="{{ asset('frontend-assets/img/falak_logo.png') }}" style="max-height: 45px; max-width:250px" alt="falak logo">
            @else
                <h3 class="mb-0">{{ $bannerTitle ?? '' }}</h3>
            @endif
            <h4 class="my-2 my-sm-2">{{ $bannerTagline ?? '' }}</h4>
            <p class="d-none d-sm-none d-md-block d-lg-block">{{ $bannerDescription ?? '' }}</p>
            <br class="d-none d-sm-none d-md-block d-lg-block">
            @if (!$bannerDescription)
                <br>
            @endif
            <x-read-more button_link="{{ $bannerButtonLink }}" button_name="{{ $bannerButtonName }}">
            </x-read-more>
        </div>
    </div>
</div>
