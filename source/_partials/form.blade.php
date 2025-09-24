<div 
    x-show="openModal" 
    x-cloak
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm"
    x-transition.opacity
    @click.self="openModal = false"
    @keydown.escape.window="openModal = false"
>
    <div 
        class="bg-white rounded-lg shadow-xl max-w-xl w-full p-6 relative space-y-5"
        x-transition.scale
    >
        <div class="text-center">
            <h5 class="text-2xl md:text-3xl font-bold">Clase Gratuita en Linea</h5>
            <sub>Miércoles 01 de Octubre | 7:00 pm (CDMX)</sub>
            <div class="uppercase mt-2">Registra aquí tus datos para obtener el acceso</div>
        </div>
        <div id="mc_embed_shell" class="w-full max-w-lg mx-auto">
            <div id="mc_embed_signup" class="">
                <form 
                action="https://mqpatrimonial.us20.list-manage.com/subscribe/post?u=37dd53ccb64559aac075bd3a9&amp;id=473179b51e&amp;f_id=00cf3be0f0" 
                method="post" 
                id="mc-embedded-subscribe-form" 
                name="mc-embedded-subscribe-form" 
                class="validate space-y-5"
                target="_self" 
                novalidate
                >
                <div id="mc_embed_signup_scroll">
                    
                    <!-- Email -->
                    <div class="mc-field-group">
                    <label for="mce-EMAIL" class="block text-sm font-medium text-gray-700 mb-1">
                        Correo Electrónico <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="email" 
                        name="EMAIL" 
                        id="mce-EMAIL" 
                        required 
                        class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-amber-500 focus:border-amber-500 text-gray-800 px-3 py-2 border"
                    >
                    </div>

                    <!-- Nombre -->
                    <div class="mc-field-group">
                    <label for="mce-FNAME" class="block text-sm font-medium text-gray-700 mb-1">
                        Nombre
                    </label>
                    <input 
                        type="text" 
                        name="FNAME" 
                        id="mce-FNAME" 
                        class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-amber-500 focus:border-amber-500 text-gray-800 px-3 py-2 border"
                    >
                    </div>

                    <!-- Teléfono -->
                    <div class="mc-field-group">
                    <label for="mce-PHONE" class="block text-sm font-medium text-gray-700 mb-1">
                        Teléfono
                    </label>
                    <input 
                        type="text" 
                        name="PHONE" 
                        id="mce-PHONE" 
                        class="w-full rounded-lg border-gray-300 shadow-sm focus:ring-amber-500 focus:border-amber-500 text-gray-800 px-3 py-2 border"
                    >
                    </div>

                    <!-- Respuestas -->
                    <div id="mce-responses" class="hidden">
                    <div class="response text-red-600 text-sm" id="mce-error-response"></div>
                    <div class="response text-green-600 text-sm" id="mce-success-response"></div>
                    </div>

                    <!-- Anti-spam -->
                    <div aria-hidden="true" class="hidden">
                    <input 
                        type="text" 
                        name="b_37dd53ccb64559aac075bd3a9_473179b51e" 
                        tabindex="-1" 
                        value=""
                    >
                    </div>

                    <!-- Botón -->
                    <div class="pt-3">
                    <input 
                        type="submit" 
                        name="subscribe" 
                        id="mc-embedded-subscribe" 
                        value="Suscribirme" 
                        class="w-full bg-amber-400 hover:bg-amber-700 text-gray-800 hover:text-white font-semibold py-3 px-6 rounded-lg shadow-md transition transform hover:scale-[1.02] cursor-pointer border-0"
                    >
                    </div>
                </div>
                </form>
            </div>
        </div>

        <p class="text-sm text-gray-600">Una vez completado el registro, te haremos llegar toda la información de la clase a tu correo electrónico y te enviaremos una invitación por medio de Whatsapp para unirte a mi grupo privado donde podrás enterarte de noticias y fechas de clases futuras.</p>
        <button 
            @click="openModal = false" 
            class="absolute top-3 right-3 text-gray-600 hover:text-gray-900 text-2xl leading-none cursor-pointer"
        >
            &times;
        </button>


    </div>
</div>
