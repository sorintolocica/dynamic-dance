<div class="topbar">
    <div class="topbar-inner">
        <div class="topbar-left">
            <a href="mailto:info@nume.com" class="topbar-link">info@nume.com</a>
            <span class="topbar-sep">|</span>
            <a href="tel:+123456789" class="topbar-link">+123456789</a>
        </div>

        <div class="topbar-right">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <a
                    class="lang {{ app()->getLocale() === $localeCode ? 'active' : '' }}"
                    rel="alternate"
                    hreflang="{{ $localeCode }}"
                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                >
                    {{ strtoupper($localeCode) }}
                </a>
                @if (!$loop->last)
                    <span class="topbar-sep">|</span>
                @endif
            @endforeach
        </div>

    </div>
</div>
<header class="site-header">
    <div class="container">
        <div class="logo">
            <a href="/">LOGO</a>
        </div>

        <div class="header_right">
        <nav class="main-nav">
            <ul>
                <li><a href="#">Concursuri</a></li>
                <li><a href="#">Despre noi</a></li>
                <li><a href="#">Contacte</a></li>
            </ul>
        </nav>

            <div class="d-flex gap-4 align-items-center">
                @guest
                    <a href="/register" class="btn-cta">Înregistrare</a>
                    <a href="/login" class="btn-cta">Autentificare</a>
                @endguest

                @auth
                    <a href="{{ route('dashboard') }}" class="btn-cta">Profilul meu</a>
                @endauth
            </div>
        </div>
    </div>
</header>
