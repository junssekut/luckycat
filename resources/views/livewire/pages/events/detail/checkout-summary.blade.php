<x-layouts.app>
    <div class="w-full min-h-screen grid grid-cols-1 grid-rows-2 md:grid-cols-2 md:grid-rows-1 font-Geomisans"
        x-data="{
            basePrice: {{ $checkout['total_price'] }},
            benefits: {{ $benefits->map->only(['id', 'price'])->toJson() }},
            selectedBenefits: [],
            get totalPrice() {
                return parseInt(this.basePrice) + this.selectedBenefits.reduce((total, benefitId) => {
                    let benefit = this.benefits.find(b => b.id == benefitId);
                    return total + (benefit ? parseInt(benefit.price) : 0);
                }, 0);
            },
            get addonCount() {
                return this.selectedBenefits.length;
            }
        }">
        <img src="{{ asset($checkout['event']->thumbnail) }}" alt="{{ $checkout['event']->title }}"
            class="w-full object-cover h-full border-r-1 border-r-black">

        <div class="p-12 text-black font-Geomisans flex flex-col gap-6">
            <div class="hidden md:block breadcrumbs text-sm text-gray-500">
                <ul>
                    <li><a href='/'>Home</a></li>
                    <li><a href='{{ route('events') }}'>Events</a></li>
                    <li><a href='{{ route('events.show', $checkout['event']->id) }}'>{{ $checkout['event']->title }}</a>
                    </li>
                    <li>Checkout Summary</li>
                </ul>
            </div>

            <div class="gap-4">
                <h1 class="text-5xl font-TGS tracking-widest uppercase">CHECKOUT {{ $checkout['event']->title }}</h1>
                <h2 class="text-lg uppercase text-gray-500">@ {{ $checkout['event']->vendor?->name }}
                </h2>
            </div>

            <div class="grid grid-cols-2 gap-0 w-fit">
                <h2 class="text-lg uppercase text-black bg-white pt-2 px-4 w-fit border border-black">
                    TICKET PRICE <span class="text-luckycat-500 text-sm">(x{{ $checkout['quantity'] }}<span
                            x-show="addonCount > 0"> + <span x-text="addonCount"></span> ADDON</span>)</span></h2>
                <h2 class="text-lg uppercase text-white bg-black pt-2 px-4 w-fit"
                    x-text="'RP' + new Intl.NumberFormat('id-ID').format(totalPrice)"></h2>
            </div>

            <div>
                <form action="{{ route('payment.process') }}" method="POST" class="flex flex-col gap-8">
                    @csrf
                    <input type="hidden" name="checkout" value="{{ json_encode($checkout) }}">

                    <div class="grid w-fit">
                        <h2 class="text-2xl font-semibold uppercase">AVAILABLE ADDONS</h2>
                        <div class="grid border border-black">
                            @foreach ($benefits as $benefit)
                                <label
                                    class="relative cursor-pointer {{ !$loop->last ? 'border-b-1' : '' }} border-b-black grid grid-cols-2 gap-0">
                                    <input type="checkbox" name="benefit_ids[]" value="{{ $benefit->id }}"
                                        class="sr-only peer"
                                        @change="if ($event.target.checked) { selectedBenefits.push({{ $benefit->id }}); } else { selectedBenefits = selectedBenefits.filter(id => id !== {{ $benefit->id }}); }">
                                    <div
                                        class="peer-checked:bg-luckycat-300 peer-checked:text-white duration-300 ease-linear pt-2 px-4 border-r-1 border-r-black uppercase">
                                        {{ $benefit->benefit }}
                                    </div>
                                    <div
                                        class="bg-black {{ !$loop->last ? 'border-b-1' : '' }} border-b-white text-white pt-2 px-4">
                                        RP{{ number_format($benefit->price, 0, ',', '.') }}
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="grid w-full">
                        <h2 class="text-2xl font-semibold uppercase">PAYMENT METHOD</h2>
                        <div class="grid border border-black">
                            @php
                                $paymentMethods = [
                                    ['name' => 'GoPay', 'image' => asset('assets/images/gopay.jpeg')],
                                    ['name' => 'ShopeePay', 'image' => asset('assets/images/shopee.jpeg')],
                                    ['name' => 'DANA', 'image' => asset('assets/images/dana.png')],
                                    ['name' => 'BCA Virtual Account', 'image' => asset('assets/images/bca.jpeg')],
                                    ['name' => 'Credit Card', 'image' => asset('assets/images/mastercard.jpeg')],
                                ];
                            @endphp
                            @foreach ($paymentMethods as $paymentMethod)
                                <label
                                    class="cursor-pointer {{ !$loop->last ? 'border-b-1' : '' }} border-b-black grid grid-cols-1 gap-0">
                                    <input type="radio" name="payment_method" value="{{ $paymentMethod['name'] }}"
                                        class="sr-only peer">
                                    <div
                                        class="peer-checked:bg-luckycat-300 peer-checked:text-white duration-300 ease-linear pt-2 px-4 py-2 uppercase flex items-center gap-2 w-full">
                                        <img src="{{ asset($paymentMethod['image']) }}"
                                            alt="{{ $paymentMethod['name'] }} logo" class="w-8 h-8">
                                        <p class="p-0 pt-2 text-lg">{{ $paymentMethod['name'] }}</p>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <button type="submit"
                        class="bg-luckycat-300 border border-black text-black pt-4 py-2 px-4 hover:bg-luckycat-500 hover:text-white text-bold tracking-widest text-lg duration-300 ease-linear cursor-pointer">PROCEED
                        PAYMENT</button>
                </form>
            </div>

        </div>
    </div>
</x-layouts.app>
