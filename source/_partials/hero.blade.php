<section class="max-w-6xl mx-auto text-center grid grid-cols-1 md:grid-cols-3 shadow rounded-xl overflow-hidden" id="inicio">
    <div class="md:col-span-2 bg-amber-50/60 p-5 md:p-10 backdrop-blur-sm">
        <div class="text-xl font-bold md:leading-relaxed">Clase Gratuita en línea</div>
        <div class="text-xs md:text-sm leading-relaxed text-gray-600 tracking-wider">
            Miércoles <strong class="text-gray-800">01 de Octubre | 7:00 pm</strong> (CDMX)
        </div>
        <h1 class="leading-relaxed text-2xl md:text-4xl mx-auto font-extrabold mb-3">Estrategias inteligentes para tu pensión</h1>
        <div class="relative mt-5">
            <video 
                id="heroVideo" 
                class="rounded w-full" 
                src="/assets/images/video-mq.mp4" 
                poster="/assets/images/portada-video.jpg"
                autoplay 
                loop 
                muted
            ></video>

            <!-- Botón de activar sonido -->
            <button 
                id="unmuteBtn"
                class="absolute top-2 right-2 bg-amber-500 text-white px-4 py-2 rounded-full font-bold shadow-lg hover:bg-amber-600 transition duration-300 text-xs md:text-base cursor-pointer z-20"
                @click="toggleSound()"
            >
                🔊 Activar sonido
            </button>
        </div>
        <p class="text-gray-600 text-center tracking-wide leading-relaxed my-5">Toma el control de tu pensión. Aprende estrategias inteligentes para maximizar tu pensión del IMSS y asegura el bienestar de tu futuro.</p>
        <x-button />
    </div>
    <div class="bg-amber-400/60 p-5 md:p-8 backdrop-blur-sm flex items-center justify-center">
        <div class="space-y-3">
            <img src="/assets/images/principal.jpg" alt="Maribel" class="mx-auto w-32 h-32 rounded-full border-4 border-amber-50 shadow-md transform hover:scale-105 transition duration-300">
            <div>
                <h2 class="text-xl font-bold text-amber-950">Soy Maribel Quezada</h2>
                <sub class="font-bold text-sm text-amber-900">Abogada, asesora y mentora especializada en retiro y pensiones del IMSS, con más de 15 años de experiencia. </sub>
            </div>
            <p class=" text-gray-700 tracking-wider text-base/6">
                Fundadora de <strong>MQPatrimonial</strong> y creadora del podcast Blindaje Patrimonial.
                Mi labor se centra en guiar a las personas en el cálculo y trámite de su pensión, aprovechando al máximo herramientas como la <strong>Modalidad 10 y Modalidad 40</strong>, la correcta gestión del Afore y las estrategias de retiro, con el objetivo de garantizar su tranquilidad financiera.
                Mi propósito es acompañarte para que tome decisiones estratégicas en el momento más importante: <strong>tu retiro</strong>.
            </p>
        </div>
    </div>
</section>    
