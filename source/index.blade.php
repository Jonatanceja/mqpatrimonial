@extends('_layouts.main')


@section('body')
@include('_partials.hero')
@include('_partials.counter')
@include('_partials.topics')
@include('_partials.features')
@include('_partials.footer')
@include('_partials.buttontop')
@include('_partials.banner')
@include('_partials.form')
<script>
function scrollTop() {
    return {
        visible: false,
        init() {
            window.addEventListener('scroll', () => {
                this.visible = window.scrollY > 200;
            });
        },
        scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    }
}
</script>

<script>
function scrollBanner() {
    return {
        visible: false,
        init() {
            const section = document.getElementById('counter');

            if (!section) {
                // Revisar si la sección se renderiza más tarde
                const interval = setInterval(() => {
                    const sec = document.getElementById('counter');
                    if (sec) {
                        clearInterval(interval);
                        this.addScrollListener(sec);
                    }
                }, 200);
            } else {
                this.addScrollListener(section);
            }
        },
        addScrollListener(section) {
            const checkVisibility = () => {
                const rect = section.getBoundingClientRect();
                // Mostrar banner solo después de que scrolleaste 150px dentro de la sección
                this.visible = rect.top < window.innerHeight - 750;
            };

            checkVisibility();
            window.addEventListener('scroll', checkVisibility);
            window.addEventListener('resize', checkVisibility);
        }
    }
}
</script>
<script>
    const video = document.getElementById('heroVideo');
    const btn = document.getElementById('unmuteBtn');

    function toggleSound() {
        if(video.muted) {
            video.muted = false;
            btn.textContent = '🔇 Silenciar';
        } else {
            video.muted = true;
            btn.textContent = '🔊 Activar sonido';
        }
    }
</script>
@endsection
