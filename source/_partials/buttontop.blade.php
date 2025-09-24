<div x-data="scrollTop()" x-init="init()" class="relative">
    <button 
        x-show="visible"
        @click="scrollToTop()"
        class="fixed bottom-5 right-5 bg-gray-800 hover:bg-amber-700 text-white p-3 rounded-lg shadow-lg transition duration-300 cursor-pointer z-50"
        x-transition
        aria-label="Subir al inicio"
        >
        ↑
    </button>
</div>