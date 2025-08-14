@extends('layouts.app')

@section('content')
<section id="sejarah" 
    class="relative bg-cover bg-center bg-fixed text-[#5c3b2e] py-20" 
    style="background-image: url('{{ asset('img/sejarah.jpeg') }}');">
    
  <div class="bg-black bg-opacity-60 absolute inset-0"></div>
  
  <div class="relative container mx-auto px-6 z-10">
    <h2 class="text-4xl font-bold mb-6 text-center text-[#5c3b2e]">
      Sejarah Desa Muara Pantuan
    </h2>
    <div class="max-w-4xl mx-auto text-lg leading-relaxed space-y-4 text-[#5c3b2e] bg-white bg-opacity-80 p-6 rounded-lg">
      <p><strong>Asal Usul:</strong> Desa Muara Pantuan berasal dari pertemuan dua aliran sungai...</p>
      <!-- dst. isi sejarah -->
    </div>

    <!-- Tombol admin (opsional nanti di-backend) -->
    <div class="text-end mt-4">
        <a href="/admin/sejarah" class="btn btn-sm btn-outline-primary">Kelola Konten (Admin)</a>
    </div>
  </div>
</section>
@endsection
