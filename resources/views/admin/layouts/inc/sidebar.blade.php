<!-- Side Nav START -->
<div class="side-nav">
    <div class="side-nav-inner">
        <div class="side-nav-logo text-center">
            <a href="/admin/dashboard">
                <div class="logo logo-dark" style="background-image: url('/backend-assets/images/logo/logo.png')"></div>
                <div class="logo logo-white" style="background-image: url('/backend-assets/images/logo/logo-white.png')">
                </div>
            </a>
            <div class="mobile-toggle side-nav-toggle">
                <a href="">
                    <i class="ti-arrow-circle-left"></i>
                </a>
            </div>
        </div>
        <ul class="side-nav-menu scrollable">
            <li class="nav-item active">
                <a class="mrg-top-30" href="{{ route('admin.dashboard') }}">
                    <span class="icon-holder">
                        <i class="ti-home"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="ti-layers-alt"></i>
                    </span>
                    <span class="title">Sliders and Banners</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('admin.sliders.index') }}">ALl Silders and Banner</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.sliders.index', ['type' => mainSlider()]) }}">Home Page Slider</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.sliders.index', ['type' => productBanner()]) }}">Home Page Product
                            Banners</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.sliders.index', ['type' => ContactPageBanner()]) }}">Contact Page
                            Banner</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.sliders.index', ['type' => InvestorRelationsPageBanner()]) }}">Investor
                            Relations Page Banner</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.sliders.index', ['type' => AboutUsPageBanner()]) }}">About Us Page
                            Banner</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.sliders.index', ['type' => CareerPageBanner()]) }}">Career Page
                            Banner</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.sliders.index', ['type' => ProductPageBanner()]) }}">Product Page
                            Banner</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="" href=" {{ route('admin.news.index') }}">
                    <span class="icon-holder">
                        <i class="ti-receipt"></i>
                    </span>
                    <span class="title">News</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href=" {{ route('admin.categories.index') }}">
                    <span class="icon-holder">
                        <i class="ti-view-grid"></i>
                    </span>
                    <span class="title">Category</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href=" {{ route('admin.products.index') }}">
                    <span class="icon-holder">
                        <i class="ti-bag"></i>
                    </span>
                    <span class="title">Product</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href=" {{ route('admin.settings.index') }}">
                    <span class="icon-holder">
                        <i class="ti-settings"></i>
                    </span>
                    <span class="title">Setting</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href=" {{ route('admin.info.index') }}">
                    <span class="icon-holder">
                        <i class="ti-settings"></i>
                    </span>
                    <span class="title">Info</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Side Nav END -->
