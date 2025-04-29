<script setup>
import { Head } from '@inertiajs/vue3'
import { Button } from '@/components/ui/button'
import { Card, CardContent } from '@/components/ui/card'
import { ArrowRight, Download, MessageCircle } from 'lucide-vue-next'

import { ref, onMounted } from 'vue'

// Typing-deleting animation setup
const journeyText = '#Journey'
const displayedText = ref('')
let index = 0
let isDeleting = false

onMounted(() => {
  const typingInterval = setInterval(() => {
    if (!isDeleting) {
      if (index < journeyText.length) {
        displayedText.value += journeyText[index]
        index++
      } else {
        isDeleting = true
        setTimeout(() => { }, 1000)
      }
    } else {
      if (index > 0) {
        displayedText.value = journeyText.substring(0, index - 1)
        index--
      } else {
        isDeleting = false
      }
    }
  }, 150)
})
</script>

<style scoped>
@keyframes bubbleMovement {
  0% {
    transform: translateY(0);
  }

  50% {
    transform: translateY(-10px);
  }

  100% {
    transform: translateY(0);
  }
}

.animate-bubble {
  animation: bubbleMovement 2s infinite ease-in-out;
}
@keyframes float {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
}

.animate-float {
  animation: float 3s ease-in-out infinite;
}
</style>

<template>

  <Head title="Home" />

  <!-- Header -->
  <header class="bg-white shadow-sm">
    <div class="container mx-auto flex items-center justify-between py-4 px-4">
      <div class="text-2xl font-bold text-blue-900">UPA</div>
      <nav class="hidden md:flex gap-8 text-blue-900 font-semibold">
        <a href="#" class="hover:text-blue-600">Home</a>
        <a href="#" class="hover:text-blue-600">About</a>
        <a href="#" class="hover:text-blue-600">Faq</a>
      </nav>
      <div class="flex gap-2">
        <Button variant="outline" class="text-blue-900 border-blue-900 hover:bg-blue-50">
          Sign Up
        </Button>
        <Button class="bg-blue-700 hover:bg-blue-800 text-white">
          Login
        </Button>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-white min-h-screen flex items-center">
    <div class="container mx-auto grid md:grid-cols-2 gap-12 items-center px-4">
      <!-- Left Text Content -->
      <div class="space-y-6">
        <h1 class="text-5xl font-bold leading-tight text-blue-900">
          Rise Your <span class="text-blue-600">{{ displayedText }}</span> And Unlock<br />
          Global Opportunities with Proven<br />
          Business English-language <span class="text-blue-600">Proficiency</span>.
        </h1>

        <p class="text-gray-600">
          Through Technology and Collaboration, We Deliver a Seamless Experience.
        </p>
        <Button class="bg-blue-700 hover:bg-blue-800 text-white text-2xl px-30 py-6 rounded-xl">
          Register
        </Button>
      </div>

      <!-- Right Image Content -->
      <div class="relative flex justify-center">
        <img src="/public/images/tataletak1.png" alt="Tataletak" class="rounded-3xl shadow-lg max-w-full h-auto" />

        <!-- Bubble 1 -->
        <div class="absolute top-4 right-0 bg-white rounded-2xl shadow-md p-4 flex items-center gap-2 animate-bubble">
          <svg class="text-blue-600 w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20M4 4h16v13H6.5A2.5 2.5 0 0 1 4 14.5V4z" />
          </svg>
          <p class="text-sm font-semibold text-gray-700">
            Improve Your Future Journey
          </p>
        </div>

        <!-- Bubble 2 -->
        <div class="absolute bottom-0 left-0 bg-white rounded-2xl shadow-md p-4 flex items-center gap-2 animate-bubble">
          <svg class="text-blue-600 w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20M4 4h16v13H6.5A2.5 2.5 0 0 1 4 14.5V4z" />
          </svg>
          <p class="text-sm font-semibold text-gray-700">
            Help You To Rise Your Successful<br />Around The World
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- What is PolinemaTOEIC Section -->
  <section class="container mx-auto px-4 py-16 grid md:grid-cols-2 gap-12 items-center">
    <!-- Left image with small bubble button -->
    <!-- Left image with small bubble button -->
    <div class="relative flex justify-center items-center w-full max-w-md mx-auto">
      <img src="/public/images/tataletak2.png" alt="What is PolinemaTOEIC" class="rounded-3xl shadow-lg w-full" />

      <!-- Tanda tanya (?) diletakkan lebih presisi -->
      <div class="absolute top-10 left-[43%] text-blue-600 text-8xl font-bold animate-float">?</div>
<div class="absolute top-24 left-[78%] text-blue-600 text-7xl font-bold animate-float">?</div>
<div class="absolute top-36 left-[58%] text-blue-600 text-6xl font-bold animate-float">?</div>



      <!-- Tombol About di tengah bawah -->
      <div
        class="absolute bottom-4 right-6 bg-blue-700 text-white rounded-full shadow-md px-6 py-2 flex items-center gap-2 hover:bg-blue-800 cursor-pointer">
        <span class="font-semibold">About</span>
        <ArrowRight class="w-4 h-4" />
      </div>



    </div>




    <!-- Right text -->
    <div class="space-y-6">
      <h2 class="text-5xl font-bold text-black">
        What Is <br />
        <span class="text-black font-bold">Polinema<span class="text-blue-600">TOEIC</span> ?</span>
      </h2>

      <p class="text-gray-700 text-lg leading-relaxed">
        TOEIC exam easier with Polinema Integrated System – quick register, Instant Pay, Real-Time results!
      </p>

      <hr class="my-6 border-black" />

      <div class="flex items-center space-x-4">
        <div class="flex items-center justify-center bg-black text-white w-10 h-10 rounded-full">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 8h18a2 2 0 002-2V8a2 2 0 00-2-2H3a2 2 0 00-2 2v6a2 2 0 002 2z" />
    </svg>
  </div>

        <p class="text-gray-700 font-semibold">
          Start your journey to Global success with TOEIC - all in one easy and reliable Platform.
        </p>
      </div>



    </div>

    <!--
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8">
        <div class="flex items-center space-x-4">
          <Download class="text-blue-600" size="32" />
          <p class="text-gray-700 font-semibold">Simple Apps</p>
        </div>
        <div class="flex items-center space-x-4">
          <ArrowRight class="text-blue-600" size="32" />
          <p class="text-gray-700 font-semibold">Fastest Registration</p>
        </div>
        <div class="flex items-center space-x-4">
          <MessageCircle class="text-blue-600" size="32" />
          <p class="text-gray-700 font-semibold">Realtime Score</p>
        </div>
      </div> -->
    <!-- </div> -->
  </section>


  <!-- Features Section -->
  <section class="container mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
      <!-- Simple Apps -->
      <div class="flex flex-col items-center space-y-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-[#266CFF]" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4" />
        </svg>
        <p class="text-blue-900 font-bold text-xl">Simple Apps</p>
        <p class="text-gray-600 text-sm">User friendly application for easy exam management.</p>
      </div>

      <!-- Fastest Registration -->
      <div class="flex flex-col items-center space-y-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-[#266CFF]" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
        <p class="text-blue-900 font-bold text-xl">Fastest Registration</p>
        <p class="text-gray-600 text-sm">Quick registration process to get you started faster.</p>
      </div>

      <!-- Realtime Score -->
      <div class="flex flex-col items-center space-y-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-[#266CFF]" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M7 8h10M7 12h4m1 8a9 9 0 110-18 9 9 0 010 18z" />
        </svg>
        <p class="text-blue-900 font-bold text-xl">Realtime Score</p>
        <p class="text-gray-600 text-sm">Get your test results immediately after completing the test.</p>
      </div>
    </div>
  </section>



  <!-- FAQ Section -->
  <section class="flex flex-col md:flex-row items-center justify-between bg-[#0629F6] rounded-3xl mx-8 my-16 overflow-hidden relative">

<!-- KIRI - Text -->
<div class="flex-1 p-8 md:p-16 text-white space-y-6 z-10">
  <h2 class="text-5xl font-bold">FAQ</h2>
  <p class="text-xl leading-relaxed max-w-md">
    Flexible and planned TOEIC exam schedule – and customize by campus
  </p>
  <button class="bg-white text-[#0024F6] text-lg font-semibold py-3 px-10 rounded-xl hover:bg-gray-100 transition">
    FAQ
  </button>
</div>

<!-- KANAN - FAQ Cards -->
<div class="flex-1 hidden md:block relative h-[550px] p-8 overflow-visible">

  <!-- Card 1 -->
  <div class="absolute top-0 left-10 rotate-[-8deg] bg-white rounded-3xl shadow-xl shadow-blue-200 w-[750px] p-6">
    <div class="flex items-center gap-4 mb-4">
      <div class="w-8 h-8 rounded-full bg-[#265DF2]"></div>
      <span class="font-bold text-lg">ILHAM</span>
    </div>
    <p class="text-gray-900 text-lg">Is this a reliable website?</p>
  </div>

  <!-- Card 2 -->
  <div class="absolute top-28 left-14 rotate-[-3deg] bg-white rounded-3xl shadow-xl shadow-blue-200 w-[750px] p-6">
    <div class="flex items-center gap-4 mb-4">
      <div class="w-8 h-8 rounded-full bg-[#2F4F99]"></div>
      <span class="font-bold text-lg">SAFRIZAL</span>
    </div>
    <p class="text-gray-900 text-lg">How to register?, is it trusted yet?</p>
  </div>

  <!-- Card 3 -->
  <div class="absolute top-[260px] left-10 rotate-[1deg] bg-white rounded-3xl shadow-xl shadow-blue-200 w-[750px] p-6">
    <div class="flex items-center gap-4 mb-4">
      <div class="w-8 h-8 rounded-full bg-[#AAAAAA]"></div>
      <span class="font-bold text-lg">ILHAM</span>
    </div>
    <p class="text-gray-900 text-lg">When is the test scheduled?</p>
  </div>

  <!-- Card 4 -->
  <div class="absolute top-[380px] left-14 rotate-[5deg] bg-white rounded-3xl shadow-xl shadow-blue-200 w-[750px] p-6">
    <div class="flex items-center gap-4 mb-4">
      <div class="w-8 h-8 rounded-full bg-[#2D1B59]"></div>
      <span class="font-bold text-lg">Ardhio Fatra</span>
    </div>
    <p class="text-gray-900 text-lg">Will the schedule collide with lectures?</p>
  </div>

</div>

</section>


<!-- Testimonials Section -->
<section class="flex items-center justify-center min-h-screen bg-gradient-to-r from-gray-100 via-white to-gray-100 p-8">
  <div class="bg-white rounded-3xl shadow-lg flex overflow-hidden max-w-5xl w-full">
    <!-- Left side: Image -->
    <div class="w-1/2 bg-gray-100 p-4 flex items-center justify-center">
      <img src="/public/images/avatar1.png" alt="Fitri Cahyaniati" class="rounded-2xl object-cover h-full w-full" />
    </div>

    <!-- Right side: Text & Stars -->
    <div class="w-1/2 p-8 flex flex-col justify-center">
      <p class="text-2xl font-semibold text-gray-900 mb-6">
        "The registration process is very easy and fast! I can focus on exam preparation without worry."
      </p>
      <div class="flex space-x-2">
        <svg class="w-8 h-8 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.955L10 0l2.95 5.955 6.562.955-4.756 4.635 1.122 6.545z"/>
        </svg>
        <svg class="w-8 h-8 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.955L10 0l2.95 5.955 6.562.955-4.756 4.635 1.122 6.545z"/>
        </svg>
        <svg class="w-8 h-8 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.955L10 0l2.95 5.955 6.562.955-4.756 4.635 1.122 6.545z"/>
        </svg>
        <svg class="w-8 h-8 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.955L10 0l2.95 5.955 6.562.955-4.756 4.635 1.122 6.545z"/>
        </svg>
        <svg class="w-8 h-8 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.955L10 0l2.95 5.955 6.562.955-4.756 4.635 1.122 6.545z"/>
        </svg>
      </div>
    </div>
  </div>
</section>



  <!-- Register Tutorial Section -->
  <section class="bg-blue-600 py-16 text-center text-white">
    <h2 class="text-3xl font-bold mb-4">Register Tutorial</h2>
    <Button class="bg-white text-blue-600 hover:bg-gray-100">
      Tutorial
    </Button>
  </section>

  <!-- Real Time Score Section -->
  <section class="container mx-auto px-4 py-16 text-center">
    <h2 class="text-3xl font-bold mb-6">Real Time Score</h2>
    <Button class="bg-blue-600 hover:bg-blue-700 text-white mb-4">
      Look
    </Button>
    <p class="text-gray-600">Look Your Result in here</p>
  </section>

  <!-- Footer -->
  <footer class="bg-blue-900 text-white py-10">
    <div class="container mx-auto px-4 grid md:grid-cols-3 gap-8 text-center md:text-left">
      <div>
        <h4 class="font-bold mb-2">Company</h4>
        <ul class="text-sm space-y-1">
          <li>Blog</li>
          <li>Careers</li>
          <li>Pricing</li>
        </ul>
      </div>
      <div>
        <h4 class="font-bold mb-2">Resources</h4>
        <ul class="text-sm space-y-1">
          <li>Documentation</li>
          <li>Paper</li>
          <li>Press Conferences</li>
        </ul>
      </div>
      <div>
        <h4 class="font-bold mb-2">Legal</h4>
        <ul class="text-sm space-y-1">
          <li>Terms of Service</li>
          <li>Privacy Policy</li>
          <li>Cookies Policy</li>
        </ul>
      </div>
    </div>
    <div class="text-center text-xs mt-8">
      © 2025 POLI TOEIC. All rights reserved.
    </div>
  </footer>
</template>
