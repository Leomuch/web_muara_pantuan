<!-- resources/views/partials/hero.blade.php -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<section 
    style="background: url('{{ asset('img/bgdesapantuan.jpg') }}') center center / cover no-repeat; min-height: 100vh; position: relative; width: 100%;">

    <!-- Overlay (opsional untuk efek gelap di background) -->
    <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.4); z-index: 0;"></div>

    <!-- Konten -->
    <div style="position: relative; z-index: 1; display: flex; justify-content: center; align-items: center; min-height: 100vh; text-align: center; color: white; padding: 0 1rem;">
        <div class="hero-text">
            <h1>Website Desa Muara Pantuan</h1>
            <p>
                Media informasi dan layanan digital untuk masyarakat desa, menyampaikan pengumuman, berita terkini, serta agenda kegiatan.
            </p>
        </div>
    </div>
</section>

<style>
/* Animasi fade + slide */
@keyframes fadeSlideUp {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

.hero-text h1, 
.hero-text p {
    opacity: 0; /* awalnya transparan */
    animation: fadeSlideUp 1s ease-out forwards;
}

.hero-text h1 {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 1rem;
    animation-delay: 0.2s; /* delay sedikit */
}

.hero-text p {
    font-size: 1.25rem;
    max-width: 700px;
    margin: 0 auto;
    animation-delay: 0.5s; /* delay lebih lama */
}
</style>
