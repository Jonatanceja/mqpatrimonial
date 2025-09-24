<section class="bg-amber-50/50 backdrop-blur-sm rounded-xl p-5 md:p-10 shadow-md max-w-4xl mx-auto space-y-3 md:space-y-5" data-aos="fade-in" data-aos-duration="1000">
    <h3 class="text-2xl md:text-4xl font-bold text-center">Temas de la clase</h3>
    <div>
        <ol class="list-decimal md:list-outside list-inside marker:text-amber-500 marker:text-xl marker:font-bold space-y-2 ml-3">
            @foreach ($page->topics as $topic)
                <li class="md:text-xl tracking-wide border-b border-b-amber-800/20 py-5 transition duration-300 md:transform hover:translate-x-2 font-bold last:border-0 text-gray-500 hover:text-gray-800">{{ $topic->title }}</li>
            @endforeach
        </ol>
    </div>
    <x-button />
</section>
