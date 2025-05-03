<script setup>
import { ref } from 'vue'
</script>

<template>
  <div class="min-h-screen grid grid-cols-1 md:grid-cols-2 bg-white">
    <!-- Left Image Section -->
    <div class="flex items-center justify-center bg-[#1E4CFF] p-6">
      <img src="/public/images/Login.png" alt="Signup Visual" class="rounded-xl max-h-[90%] object-contain" />
    </div>

    <!-- Right Form Section -->
    <div class="flex flex-col justify-center px-8 py-12">
      <div class="max-w-md w-full mx-auto">
        <h2 class="text-blue-700 font-bold text-lg">LOGOS</h2>
        <h1 class="text-xl font-semibold mt-2">Sign Up For Free Tho!</h1>

        <!-- Form -->
        <form class="mt-6 space-y-4">
          <div>
            <label class="block text-gray-400 text-sm mb-1">Username</label>
            <input type="text" placeholder="Enter your username"
              class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" />
          </div>
          <div>
            <label class="block text-gray-400 text-sm mb-1">Email</label>
            <input type="email" placeholder="Enter your email"
              class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" />
          </div>
          <div>
            <label class="block text-gray-400 text-sm mb-1">Password</label>
            <input type="password" placeholder="Enter your password"
              class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" />
          </div>
          <div>
            <label class="block text-gray-400 text-sm mb-1">Retype Password</label>
            <input type="password" placeholder="Retype your password"
              class="w-full px-4 py-3 bg-gray-100 rounded-md focus:outline-none" />
          </div>

          <div class="text-right">
            <a href="#" class="text-sm text-gray-600 underline decoration-black hover:text-gray-800">Forget Password</a>
          </div>

          <!-- Buttons -->
          <div class="flex gap-4">
            <button type="submit"
              class="flex-1 bg-[#1E4CFF] text-white py-3 rounded-md font-semibold hover:bg-blue-800 transition">
              Sign Up
            </button>
            <button
              class="flex-1 border border-[#1E4CFF] text-[#1E4CFF] bg-white py-3 rounded-md font-semibold shadow hover:shadow-md transition">
              Sign Up
            </button>
          </div>
        </form>

        <!-- OR Divider -->
        <div class="flex items-center gap-4 my-6">
          <hr class="flex-grow border-t border-gray-300" />
          <span class="text-sm text-gray-500">Or</span>
          <hr class="flex-grow border-t border-gray-300" />
        </div>

        <!-- Google Sign Up -->
        <button class="w-full flex items-center justify-center gap-3 border rounded-full py-2 shadow-sm hover:shadow-md transition">
          <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-5 h-5" />
          <span class="text-sm text-gray-700">Sign Up With Google</span>
        </button>
      </div>
    </div>
  </div>
</template>
