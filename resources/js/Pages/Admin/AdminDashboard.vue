<template>
<AppLayout title="Admin dashboard">
<div class="min-h-full">  
    <Sidebar/>
    <div class="flex flex-1 flex-col lg:pl-64">
    <main class="flex-1 pb-8">
        <!-- Page header -->
        <div class="bg-gray-800 shadow">
        <div class="px-4 sm:px-6 lg:mx-auto lg:max-w-6xl lg:px-8">
            <div class="py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
            <div class="min-w-0 flex-1">
                <!-- Profile -->
                <div class="flex items-center">
                <img class="hidden h-16 w-16 rounded-full sm:block" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.6&w=256&h=256&q=80" alt="" />
                <div>
                    <div class="flex items-center">
                    <img class="h-16 w-16 rounded-full sm:hidden" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.6&w=256&h=256&q=80" alt="" />
                    <h1 class="ml-3 text-2xl font-bold leading-7 sm:truncate sm:leading-9">Buongiorno, avvocato!</h1>
                    </div>
                    <dl class="mt-6 flex flex-col sm:ml-3 sm:mt-1 sm:flex-row sm:flex-wrap">
                    <dt class="sr-only">Company</dt>
                    <dd class="flex items-center text-sm font-medium capitalize sm:mr-6">
                        <BuildingOfficeIcon class="mr-1.5 h-5 w-5 flex-shrink-0" aria-hidden="true" />
                        Duke street studio
                    </dd>
                    <dt class="sr-only">Account status</dt>
                    <dd class="mt-3 flex items-center text-sm font-medium capitalize sm:mr-6 sm:mt-0">
                        <CheckCircleIcon class="mr-1.5 h-5 w-5 flex-shrink-0 text-green-400" aria-hidden="true" />
                        Verified account
                    </dd>
                    </dl>
                </div>
                </div>
            </div>
            <div class="mt-6 flex space-x-3 md:ml-4 md:mt-0">
                <button type="button" class="btn btn-primary">Crea nuovo articolo</button>
                <button type="button" class="btn btn-secondary">Send money</button>
            </div>
            </div>
        </div>
        </div>

        <div class="mt-8">
        <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-lg font-medium leading-6">Overview</h2>
            <div class="mt-2 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Card -->
            <div v-for="card in cards" :key="card.name" class="overflow-hidden rounded-lg bg-base shadow">
                <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                    <component :is="card.icon" class="h-6 w-6" aria-hidden="true" />
                    </div>
                    <div class="ml-5 w-0 flex-1">
                    <dl>
                        <dt class="truncate text-sm font-medium">{{ card.name }}</dt>
                        <dd>
                        <div class="text-lg font-medium">{{ card.category }}</div>
                        </dd>
                    </dl>
                    </div>
                </div>
                </div>
                <div class="bg-gray-50 px-5 py-3">
                <div class="text-sm">
                    <a :href="card.href" class="font-medium text-cyan-700 hover:text-cyan-900">View all</a>
                </div>
                </div>
            </div>
            </div>
        </div>

        <h2 class="mx-auto mt-8 max-w-6xl px-4 text-lg font-medium leading-6 sm:px-6 lg:px-8">Ultime attività</h2>

        <!-- Activity list (smallest breakpoint only) -->
        <div class="shadow sm:hidden">
            <ul role="list" class="mt-2 divide-y divide-gray-200 overflow-hidden shadow sm:hidden">
            <li v-for="article in articles" :key="article.id">
                <a :href="article.href" class="block bg-white px-4 py-4 hover:bg-gray-50">
                <span class="flex items-center space-x-4">
                    <span class="flex flex-1 space-x-2 truncate">
                    <BanknotesIcon class="h-5 w-5 flex-shrink-0" aria-hidden="true" />
                    <span class="flex flex-col truncate text-sm">
                        <span class="truncate">{{ article.name }}</span>
                        <span
                        ><span class="font-medium">{{ article.category }}</span></span
                        >
                        <time :datetime="article.datetime">{{ article.date }}</time>
                    </span>
                    </span>
                    <ChevronRightIcon class="h-5 w-5 flex-shrink-0" aria-hidden="true" />
                </span>
                </a>
            </li>
            </ul>

            <nav class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3" aria-label="Pagination">
            <div class="flex flex-1 justify-between">
                <a href="#" class="relative inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Previous</a>
                <a href="#" class="relative ml-3 inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Next</a>
            </div>
            </nav>
        </div>

        <!-- Activity table (small breakpoint and up) -->
        <div class="hidden sm:block">
            <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            <div class="mt-2 flex flex-col">
                <div class="min-w-full overflow-hidden overflow-x-auto align-middle shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 bg-base-200">
                    <thead>
                    <tr>
                        <th class="bg-gray-50 px-6 py-3 text-left text-sm font-semibold" scope="col">Articoli</th>
                        <th class="bg-gray-50 px-6 py-3 text-right text-sm font-semibold" scope="col">Categoria</th>
                        <th class="hidden bg-gray-50 px-6 py-3 text-left text-sm font-semibold md:block" scope="col">Autore</th>
                        <th class="bg-gray-50 px-6 py-3 text-right text-sm font-semibold" scope="col">Data</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    <tr v-for="article in articles" :key="article.id" class="">
                        <td class="w-full max-w-0 whitespace-nowrap px-6 py-4 text-sm">
                        <div class="flex">
                            <a :href="article.href" class="group inline-flex space-x-2 truncate text-sm">
                            <BanknotesIcon class="h-5 w-5 flex-shrink-0 group-hover" aria-hidden="true" />
                            <p class="truncate group-hover">{{ article.name }}</p>
                            </a>
                        </div>
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 text-right text-sm">
                        <span class="font-medium">{{ article.category }}</span>
                        </td>
                        <td class="hidden whitespace-nowrap px-6 py-4 text-sm md:block">
                        <span :class="[statusStyles[article.status], 'inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium capitalize']">{{ article.status }}</span>
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 text-right text-sm">
                        <time :datetime="article.datetime">{{ article.date }}</time>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <!-- Pagination -->
                <nav class="flex items-center justify-between border-t border-gray-200 bg-base px-4 py-3 sm:px-6" aria-label="Pagination">
                    <div class="hidden sm:block">
                    <p class="text-sm">
                        Showing
                        {{ ' ' }}
                        <span class="font-medium">1</span>
                        {{ ' ' }}
                        to
                        {{ ' ' }}
                        <span class="font-medium">10</span>
                        {{ ' ' }}
                        of
                        {{ ' ' }}
                        <span class="font-medium">20</span>
                        {{ ' ' }}
                        results
                    </p>
                    </div>
                    <div class="flex flex-1 justify-between gap-x-3 sm:justify-end">
                    <a href="#" class="relative inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold ring-1 ring-inset ring-gray-300 hover:ring-gray-400">Previous</a>
                    <a href="#" class="relative inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold ring-1 ring-inset ring-gray-300 hover:ring-gray-400">Next</a>
                    </div>
                </nav>
                </div>
            </div>
            </div>
        </div>
        </div>
    </main>
    </div>
</div>
</AppLayout>
</template>
  
  <script setup>
  import { ref } from 'vue'
  import AppLayout from '@/Layouts/AppLayout.vue';
  import Sidebar from '@/Components/Sidebar.vue';
  import {
    BanknotesIcon,
    BuildingOfficeIcon,
    CheckCircleIcon,
    ChevronRightIcon,
    MagnifyingGlassIcon,
    ScaleIcon
  } from '@heroicons/vue/20/solid'
  

const cards = [
{ name: 'Account balance', href: '#', icon: ScaleIcon, category: '$30,659.45' },
]

const articles = [
{
    id: 1,
    name: 'Giustizia penale',
    href: '#',
    category: '$20,000',
    status: 'success',
    date: 'July 11, 2020',
    datetime: '2020-07-11',
},
// More articles...
]

const statusStyles = {
success: 'bg-green-100 text-green-800',
processing: 'bg-yellow-100 text-yellow-800',
failed: 'bg-gray-100',
}
  
  const sidebarOpen = ref(false)
  </script>