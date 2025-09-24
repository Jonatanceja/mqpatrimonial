<section class="bg-amber-50/50 backdrop-blur-sm rounded-xl shadow-md max-w-6xl mx-auto my-5 md:my-10 grid grid-cols-1 md:grid-cols-2 gap-10 overflow-hidden items-center" data-aos="fade-in" data-aos-duration="1000">
    <div>
        <img src="assets/images/hombre-preocupado.webp" alt="Hombre preocupado por su pensión">
    </div>
    <div class="p-5 md:p-10 space-y-5">
        <h3 class="text-2xl md:text-4xl font-bold text-center">¿Piensas en ?</h3>
        <div>
            <ol class="list-disc list-outside marker:text-amber-500 marker:text-xl marker:font-bold space-y-3 ml-3">
                @foreach ($page->features as $feature)
                    <li class="text-gray-500 text-lg">{{ $feature->title }}</li>
                @endforeach
            </ol>
        </div>
        <x-button />
    </div>
</section>