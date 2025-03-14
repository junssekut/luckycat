<footer class="hidden md:grid footer sm:footer-horizontal text-base-content p-0 border-1 border-black border-t-0">
    <div class="border-r-1 border-black h-full p-12">
        <aside class="flex flex-col gap-4">
            <img src="{{ asset('assets/images/luckycat-logo.png') }}" alt="LUCKYCAT">
            <p class="font-Geomisans text-lg">
                LUCKYCAT Platform Ltd.
                <br />
                The Best E-Ticketing Platform Since 2025.
            </p>
        </aside>
    </div>

    <nav class="p-12 font-Geomisans uppercase">
        <h6 class="footer-title">Services</h6>
        <a href="{{ route('events') }}" class="link link-hover" wire:navigate>EXPLORE TICKET</a>
        <a href="{{ route('contact') }}" class="link link-hover" wire:navigate>CONTACT US</a>
    </nav>
    <nav class="p-12 font-Geomisans uppercase">
        <h6 class="footer-title">Legal</h6>
        <a href="{{ route('home') }}" class="link link-hover" wire:navigate>WHAT TO WEAR?</a>
        <a href="{{ route('privacy-policy') }}" class="link link-hover" wire:navigate>PRIVACY POLICY</a>
        <a href="{{ route('terms-of-services') }}" class="link link-hover" wire:navigate>TERMS OF SERVICES</a>
    </nav>
</footer>
