<script setup>
import { ref } from 'vue'
import { ChevronDown } from 'lucide-vue-next'

const faqs = ref([
  { question: 'Apa itu TOEIC?', answer: 'TOEIC adalah tes kemampuan berbahasa Inggris untuk komunikasi internasional.', open: false },
  { question: 'Bagaimana cara mendaftar?', answer: 'Anda bisa mendaftar melalui halaman pendaftaran di situs kami.', open: false },
  { question: 'Apakah ada batasan usia?', answer: 'TOEIC dapat diikuti oleh siapa saja tanpa batasan usia.', open: false },
  { question: 'Berapa biaya tes?', answer: 'Biaya tes bervariasi tergantung lokasi dan waktu pelaksanaan.', open: false },
  { question: 'Berapa lama hasil keluar?', answer: 'Hasil biasanya tersedia dalam 5–10 hari kerja.', open: false },
])

function toggle(index) {
  faqs.value[index].open = !faqs.value[index].open
}
</script>

<template>
  <div class="min-h-screen flex flex-col justify-between">
    <!-- Header -->
    <header class="bg-white py-6 shadow-sm">
      <div class="container mx-auto px-4 flex justify-between items-center">
        <div class="text-xl font-bold text-blue-900">UPA</div>
        <nav class="hidden md:flex gap-8 font-semibold text-blue-900">
          <a href="/" class="hover:text-blue-700">Home</a>
          <a href="/about" class="hover:text-blue-700">About</a>
          <a href="/faq" class="hover:text-blue-700">Faq</a>
        </nav>
        <div class="flex gap-2">
          <button class="border border-blue-700 text-blue-700 px-4 py-2 rounded hover:bg-blue-50">Sign Up</button>
          <button class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800">Login</button>
        </div>
      </div>
    </header>

    <!-- FAQ Section -->
    <main class="flex-1 py-16 bg-white px-4">
      <div class="max-w-3xl mx-auto text-center mb-12">
        <h1 class="text-2xl md:text-3xl font-bold mb-2">Frequently Asked Questions</h1>
        <p class="text-gray-500 text-sm">
          Stuck on something? We’re here to help with all your questions and answers in one place.
        </p>
      </div>

      <div class="max-w-4xl mx-auto space-y-6">
        <div
          v-for="(faq, index) in faqs"
          :key="index"
          class="border-b pb-4"
        >
          <div class="flex items-start justify-between gap-4 cursor-pointer" @click="toggle(index)">
            <div class="flex gap-4">
              <div class="w-12 h-12 bg-white shadow rounded-xl flex items-center justify-center">
                <img src="/public/images/shield.svg" alt="icon" class="w-6 h-6" />
              </div>
              <div>
                <h3 class="text-lg font-bold text-black">{{ faq.question }}</h3>
              </div>
            </div>
            <button
              class="p-2 transition-transform duration-300"
              :class="{ 'rotate-180': faq.open }"
            >
              <ChevronDown class="w-5 h-5 text-black" />
            </button>
          </div>

          <transition name="accordion">
            <div
              v-show="faq.open"
              class="ml-16 mt-2 text-sm text-gray-600 overflow-hidden"
            >
              <p class="pb-2">{{ faq.answer }}</p>
            </div>
          </transition>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer class="bg-[#0023E5] text-white py-12 px-4">
      <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between gap-8">
          <div class="space-y-2">
            <p>Toeic@course.com</p>
            <p>+1 (201) 897-12413</p>
          </div>

          <div class="grid grid-cols-3 gap-8 flex-1 max-w-2xl">
            <div>
              <h4 class="font-bold mb-3">Company</h4>
              <ul class="space-y-2 text-sm">
                <li>Blog</li>
                <li>Careers</li>
                <li>Pricing</li>
              </ul>
            </div>
            <div>
              <h4 class="font-bold mb-3">Resources</h4>
              <ul class="space-y-2 text-sm">
                <li>Documentation</li>
                <li>Papers</li>
                <li>Press Conferences</li>
              </ul>
            </div>
            <div>
              <h4 class="font-bold mb-3">Legal</h4>
              <ul class="space-y-2 text-sm">
                <li>Terms of Service</li>
                <li>Privacy Policy</li>
                <li>Cookies Policy</li>
              </ul>
            </div>
          </div>

          <div class="space-y-2">
            <p>Phone</p>
            <p class="text-sm">0851-xxx-xxx</p>
            <p>Username</p>
            <p class="text-sm">toeic@gmail.com</p>
          </div>
        </div>
        <div class="border-t border-white/20 mt-10 pt-6 text-center">
          <p class="text-sm">© 2025 PBL TOEIC.</p>
        </div>
      </div>
    </footer>
  </div>
</template>

<style scoped>
.accordion-enter-active,
.accordion-leave-active {
  transition: all 0.3s ease;
}
.accordion-enter-from,
.accordion-leave-to {
  max-height: 0;
  opacity: 0;
}
.accordion-enter-to,
.accordion-leave-from {
  max-height: 500px;
  opacity: 1;
}
</style>
