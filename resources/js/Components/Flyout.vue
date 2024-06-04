<template>
  <Popover class="relative">
    <PopoverButton class="inline-flex items-center gap-x-1 leading-6 text-xl">
      <span>Servizi</span>
      <ChevronDownIcon class="h-5 w-5" aria-hidden="true" />
    </PopoverButton>

    <transition enter-active-class="transition ease-out duration-200" enter-from-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150" leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1">
      <PopoverPanel class="absolute left-1/2 z-10 mt-5 flex w-screen max-w-max -translate-x-1/2 px-4">
        <div class="w-screen max-w-md flex-auto overflow-hidden rounded-3xl bg-neutral text-sm leading-6 shadow-lg ring-1 ring-gray-900/5 lg:max-w-3xl">
          <div class="grid grid-cols-1 gap-x-6 gap-y-1 p-4 lg:grid-cols-2">
            <div v-for="item in $page.props.categories" :key="item.name" class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-base-100">
              <div>
                <a :href="item.href" class="font-semibold text-info">
                  {{ item.name }}
                  <span class="absolute inset-0" />
                </a>
                <p class="mt-1">{{ item.meta_description }}</p>
              </div>
            </div>
          </div>
          <!--<div class="bg-gray-50 px-8 py-6">
            <div class="flex items-center gap-x-3">
              <h3 class="text-sm font-semibold leading-6 text-gray-900">Enterprise</h3>
              <p class="rounded-full bg-indigo-600/10 px-2.5 py-1.5 text-xs font-semibold text-indigo-600">New</p>
            </div>
            <p class="mt-2 text-sm leading-6 text-gray-600">Empower your entire team with even more advanced tools.</p>
          </div>-->
        </div>
      </PopoverPanel>
    </transition>
  </Popover>
</template>

<script setup>
import { Popover, PopoverButton, PopoverPanel } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/20/solid'

</script>