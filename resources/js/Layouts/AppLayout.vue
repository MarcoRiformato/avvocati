<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { defineComponent, h } from 'vue'

defineProps({
title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
event.preventDefault();
router.put(route('current-team.update'), {
team_id: team.id,
}, {
preserveState: false,
});
};

const logout = () => {
router.post(route('logout'));
};

const navigation = {
social: [
{
    name: 'Linkedin',
    href: '#',
    icon: defineComponent({
    render: () =>
        h('svg', { fill: 'blue', viewBox: '0 0 24 24' }, [
        h('path', {
            'fill-rule': 'evenodd',
            d: 'M21,21H17V14.25C17,13.19 15.81,12.31 14.75,12.31C13.69,12.31 13,13.19 13,14.25V21H9V9H13V11C13.66,9.93 15.36,9.24 16.5,9.24C19,9.24 21,11.28 21,13.75V21M7,21H3V9H7V21M5,3A2,2 0 0,1 7,5A2,2 0 0,1 5,7A2,2 0 0,1 3,5A2,2 0 0,1 5,3Z',
            'clip-rule': 'evenodd',
        }),
        ]),
    }),
},
],
}

/*function openCalendlyPopup(event) {
  event.preventDefault();
  Calendly.initPopupWidget({ url: 'https://calendly.com/marco-riformato/incontro-di-valutazione' });
}*/

</script>

<template>
    <div>
    <Head :title="title" />
    
    <Banner />
    
    <div>
        <nav class="sticky top-0 z-50 border-b border-gray-100 bg-secondary ">

        <div class="container mx-auto flex justify-between items-center hidden sm:flex text-white">
            <div class="flex-shrink-0 flex items-center" @click="$inertia.visit(route('/'))">
                <img src="inglese_logo.png" height="50" width="200" alt="Logo">
            </div>
        
            <NavLink class="text-xl" :href="route('services.index')">
                Aree di attività
            </NavLink>

            <NavLink class="text-xl" :href="route('about')">
                Lo studio
            </NavLink>

            <NavLink class="text-xl" :href="route('articles.index')">
                Notizie & aggiornamenti
            </NavLink>

            <NavLink class="text-xl" :href="route('contacts')">
                Contatti
            </NavLink>

            <div class="space-x-12 flex items-center">

            <!--<button href="#" class="btn btn-primary" @click.prevent="openCalendlyPopup">Contattaci</button>-->
            <div class="py-2 hidden lg:block">Chiamaci 📞<br /><b>010 541259</b></div>
            </div>
        </div>
    
      <div class="hidden sm:flex sm:items-center sm:ml-6">
    
        </div>
    
        <!-- Hamburger -->
        <div class="-mr-2 flex items-center sm:hidden">
        <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" @click="showingNavigationDropdown = ! showingNavigationDropdown">
            <svg
                class="h-6 w-6"
                stroke="currentColor"
                fill="none"
                viewBox="0 0 24 24"
            >
                <path
                    :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                />
                <path
                    :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                />
            </svg>
        </button>
    </div>
    
        <!-- Responsive Navigation Menu -->
        <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">
            <div class="pt-2 pb-3 space-y-1">

                <ResponsiveNavLink :href="route('/')">
                    Home
                </ResponsiveNavLink>

                <ResponsiveNavLink  :href="route('services.index')">
                    Aree di attività
                </ResponsiveNavLink>

                <ResponsiveNavLink >
                    Chi siamo
                </ResponsiveNavLink>

                <ResponsiveNavLink  :href="route('articles.index')">
                    Blog
                </ResponsiveNavLink>

                <ResponsiveNavLink  :href="route('contacts')">
                    Contatti
                </ResponsiveNavLink>

                <template v-if="$page.props.auth.user && $page.props.auth.user.is_admin !== 0">
                    <div class="border-t"></div>
                    <ResponsiveNavLink class="text-red-600" :href="route('admin.admindashboard')" :active="route().current('admin.admindashboard')">
                        Sezione admin
                    </ResponsiveNavLink>
                </template>
            </div>
    
            <!-- Responsive Settings Options -->
            <div v-if="$page.props.auth.user" class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <div v-if="$page.props.jetstream.managesProfilePhotos" class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">
                    </div>
    
                    <div>
                        <div class="font-medium text-base text-gray-800">
                            {{ $page.props.auth.user.name }}
                        </div>
                        <div class="font-medium text-sm text-gray-500">
                            {{ $page.props.auth.user.email }}
                        </div>
                    </div>
                </div>
    
                <div class="mt-3 space-y-1">
                    <ResponsiveNavLink :href="route('profile.show')" :active="route().current('profile.show')">
                        Profile
                    </ResponsiveNavLink>
    
                    <ResponsiveNavLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')" :active="route().current('api-tokens.index')">
                        API Tokens
                    </ResponsiveNavLink>
    
                    <!-- Authentication -->
                    <form method="POST" @submit.prevent="logout">
                        <ResponsiveNavLink as="button">
                            Log Out
                        </ResponsiveNavLink>
                    </form>
    
                    <!-- Team Management -->
                    <template v-if="$page.props.jetstream.hasTeamFeatures">
                        <div class="border-t border-gray-200" />
    
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            Manage Team
                        </div>
    
                        <!-- Team Settings -->
                        <ResponsiveNavLink :href="route('teams.show', $page.props.auth.user.current_team)" :active="route().current('teams.show')">
                            Team Settings
                        </ResponsiveNavLink>
    
                        <ResponsiveNavLink v-if="$page.props.jetstream.canCreateTeams" :href="route('teams.create')" :active="route().current('teams.create')">
                            Create New Team
                        </ResponsiveNavLink>
    
                        <!-- Team Switcher -->
                        <template v-if="$page.props.auth.user.all_teams.length > 1">
                            <div class="border-t border-gray-200" />
    
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                Switch Teams
                            </div>
    
                            <template v-for="team in $page.props.auth.user.all_teams" :key="team.id">
                                <form @submit.prevent="switchToTeam(team)">
                                    <ResponsiveNavLink as="button">
                                        <div class="flex items-center">
                                            <svg v-if="team.id == $page.props.auth.user.current_team_id" class="mr-2 h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <div>{{ team.name }}</div>
                                        </div>
                                    </ResponsiveNavLink>
                                </form>
                            </template>
                        </template>
                    </template>
                </div>
            </div>
            <!--<div v-else class="mt-3 space-y-1">
                <ResponsiveNavLink :href="route('login')">
                    Accedi
                </ResponsiveNavLink>
                <ResponsiveNavLink :href="route('register')">
                    Registrati
                </ResponsiveNavLink>
            </div>-->
        </div>
    </nav>
    
    <!-- Page Heading -->
    <header v-if="$slots.header" class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <slot name="header" />
        </div>
    </header>
    <!-- Page Content -->
    <main>
        <slot />
    </main>
    </div>
    
<footer class="bg-white" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 py-8 lg:px-8">
      <div class="xl:grid xl:grid-cols-3 xl:gap-8">
        <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-sm font-semibold leading-6 text-gray-900">Appalti pubblici e privati</h3>
              <ul role="list" class="mt-6 space-y-4">
                <li class="pt-2">
                  <a href="#" class="text-sm leading-6 text-blue-500 hover:text-blue-700">Consulenza alle stazioni appaltanti</a>
                </li>
                <li>
                    <a href="#" class="text-sm leading-6 text-blue-500 hover:text-blue-700">Consulenza alle imprese e operatori economici</a>
                </li>
                <li>
                    <a href="#" class="text-sm leading-6 text-blue-500 hover:text-blue-700">Consulenza ai professionisti tecnici</a>
                </li>
                <li>
                    <a href="#" class="text-sm leading-6 text-blue-500 hover:text-blue-700">Fase di esecuzione degli appalti</a>
                </li>
              </ul>
            </div>
            <div class="mt-10 md:mt-0">
              <h3 class="text-sm font-semibold leading-6 text-gray-900">Assistenza e difesa per enti pubblici, imprese e operatori economici</h3>
              <ul role="list" class="mt-6 space-y-4">
                <li class="pt-2">
                  <a href="#" class="text-sm leading-6 text-blue-500 hover:text-blue-700">Gestione di contenziosi presso TAR e Consiglio di Stato</a>
                </li>
                <li>
                    <a href="#" class="text-sm leading-6 text-blue-500 hover:text-blue-700">Assistenza legale in Contenziosi civili</a>
                </li>
                <li>
                    <a href="#" class="text-sm leading-6 text-blue-500 hover:text-blue-700">Servizi di arbitrato per appalti e lavori pubblici</a>
                </li>
                <li>
                    <a href="#" class="text-sm leading-6 text-blue-500 hover:text-blue-700">Assistenza legale nei procedimenti ANAC</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-sm font-semibold leading-6 text-gray-900">Soluzioni stragiudiziali per controversie negli appalti pubblici e Collegio Consultivo Tecnico</h3>
              <ul role="list" class="mt-6 space-y-4">
                <li class="pt-2">
                  <a href="#" class="text-sm leading-6 text-blue-500 hover:text-blue-700">Soluzioni stragiudiziali delle controversie negli appalti pubblici</a>
                </li>
                <li>
                    <a href="#" class="text-sm leading-6 text-blue-500 hover:text-blue-700">Collegio Consultivo Tecnico</a>
                </li>
              </ul>
            </div>
            <div>
              <h3 class="text-sm font-semibold leading-6 text-gray-900">Partenariato Pubblico-Privato e Project Financing</h3>
              <ul role="list" class="mt-6 space-y-4">
                <li class="pt-2">
                  <a href="#" class="text-sm leading-6 text-blue-500 hover:text-blue-700">Gestione di contenziosi presso TAR e Consiglio di Stato</a>
                </li>
                <li>
                    <a href="#" class="text-sm leading-6 text-blue-500 hover:text-blue-700">Assistenza legale in contenziosi civili</a>
                </li>
                <li>
                    <a href="#" class="text-sm leading-6 text-blue-500 hover:text-blue-700">Servizi di arbitrato per appalti e lavori pubblici</a>
                </li>
                <li>
                    <a href="#" class="text-sm leading-6 text-blue-500 hover:text-blue-700">Assistenza legale nei procedimenti ANAC</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
</footer>

</div>
</template>
