<script setup>
const props = defineProps({
  beritas: {
    type: Array,
    default: () => []
  },
  createUrl: {
    type: String,
    required: true
  },
  csrf: {
    type: String,
    required: true
  },
  successMessage: {
    type: String,
    default: ''
  }
})

function deleteBerita(id) {
  if (!confirm('Yakin ingin menghapus berita ini?')) return

  const form = document.createElement('form')
  form.method = 'POST'
  form.action = `/admin/berita/${id}`
  form.innerHTML = `
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="${props.csrf}">
  `
  document.body.appendChild(form)
  form.submit()
}

console.log('🧪 Komponen BeritaList mounted')
console.log('📦 Props beritas:', props.beritas)
console.log('📌 createUrl:', props.createUrl)
console.log('🔑 csrf:', props.csrf)
console.log('✅ successMessage:', props.successMessage)

// Destructuring agar bisa langsung digunakan di template
const { beritas, createUrl, csrf, successMessage } = props
</script>

<template>
  <div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6">Daftar Berita</h1>

    <div v-if="successMessage" class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4 shadow">
      {{ successMessage }}
    </div>

    <div class="mb-6">
      <a :href="createUrl"
         class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded shadow">
        + Tambah Berita
      </a>
    </div>

    <div class="overflow-x-auto">
      <table class="w-full bg-white rounded-lg shadow text-sm">
        <thead class="bg-gray-100">
          <tr>
            <th class="text-left px-6 py-3">Judul</th>
            <th class="text-left px-6 py-3">Gambar</th>
            <th class="text-left px-6 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="berita in beritas" :key="berita.id" class="border-t hover:bg-gray-50">
            <td class="px-6 py-4">{{ berita.judul }}</td>
            <td class="px-6 py-4">
              <img v-if="berita.gambar"
                   :src="`/storage/${berita.gambar}`"
                   alt="Gambar Berita"
                   class="w-24 h-16 object-cover rounded border">
              <span v-else class="text-gray-500 italic">Tidak ada</span>
            </td>
            <td class="px-6 py-4 space-x-2">
              <a :href="`/admin/berita/${berita.id}/edit`"
                 class="inline-block text-sm bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">
                Edit
              </a>
              <form :action="`/admin/berita/${berita.id}`"
                    method="POST"
                    class="inline-block"
                    @submit.prevent="deleteBerita(berita.id)">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" :value="csrf">
                <button type="submit"
                        class="text-sm bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                  Hapus
                </button>
              </form>
            </td>
          </tr>
          <tr v-if="beritas.length === 0">
            <td colspan="3" class="text-center text-gray-500 py-6">Belum ada berita.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>