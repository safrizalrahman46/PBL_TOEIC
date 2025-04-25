<script setup>
// import Layout from './Layout'
import { Head } from '@inertiajs/vue3'
import { Button } from '@/components/ui/button'


defineProps({
  user: Object,
//   Button: defineComponent

})
// defineExpose({
//   Button: defineComponent({})
// })
</script>

<template>
  <!-- <Layout> -->
  <Head title="Welcome" />
  <h1 class="text-blue-500 text-center p-5">Welcome</h1>
  <Button>Click Me</Button>
  <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
    <slot />
  </button>
  <!-- <p>Hello {{ user.name }}, welcome to your first Inertia app!</p> -->
  <!-- </Layout> -->
</template>
