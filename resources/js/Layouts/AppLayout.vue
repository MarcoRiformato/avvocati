<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import CustomHeader from '@/Components/CustomHeader.vue';
import { defineComponent, h } from 'vue'

import {
    MagnifyingGlassIcon
  } from '@heroicons/vue/24/outline'
import Flyout from '@/Components/Flyout.vue';

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
    name: 'Facebook',
    href: 'https://www.facebook.com/forumgiovaniArcipelago/',
    icon: defineComponent({
    render: () =>
        h('svg', { fill: 'currentColor', viewBox: '0 0 24 24' }, [
        h('path', {
            'fill-rule': 'evenodd',
            d: 'M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z',
            'clip-rule': 'evenodd',
        }),
        ]),
    }),
},
{
    name: 'Instagram',
    href: 'https://www.instagram.com/forum.giovani.elba/',
    icon: defineComponent({
    render: () =>
        h('svg', { fill: 'currentColor', viewBox: '0 0 24 24' }, [
        h('path', {
            'fill-rule': 'evenodd',
            d: 'M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z',
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
            <div class="flex-shrink-0 flex items-center" @click="$inertia.visit(route('dashboard'))">
                <img src="logomariorossi.png" height="50" width="200" alt="Logo">
            </div>
        
            <NavLink class="text-xl" :href="route('services.index')">
                Aree di attività
            </NavLink>

            <NavLink class="text-xl" :href="route('services.index')">
                Lo studio
            </NavLink>

            <NavLink class="text-xl" :href="route('articles.index')">
                Notizie & aggiornamenti
            </NavLink>

            <NavLink class="text-xl" >
                Contatti
            </NavLink>

            <div class="space-x-12 flex items-center">

            <!--<button href="#" class="btn btn-primary" @click.prevent="openCalendlyPopup">Contattaci</button>-->
            <div class="py-2">Chiamaci 📞<br /><b>010 541259</b></div>
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

                <ResponsiveNavLink :href="route('dashboard')">
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
    
    <footer class="bg-base-200 -mt-12">
    <div class="mx-auto max-w-7xl overflow-hidden px-6 py-8">
        <div class="flex justify-center space-x-10">
        <!-- Settings Dropdown -->
        <div v-if="$page.props.auth.user" class="ml-3 relative">
            <Dropdown align="right" width="48">
                <template #trigger>
                    <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">
                    </button>

                    <span v-else class="inline-flex rounded-md">
                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                            {{ $page.props.auth.user.name }}

                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>
                    </span>
                </template>

                <template #content>
                    <!-- Account Management -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        Manage Account
                    </div>

                    <DropdownLink :href="route('profile.show')">
                        Profile
                    </DropdownLink>

                    <DropdownLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">
                        API Tokens
                    </DropdownLink>

                    <div class="border-t border-gray-200" />

                    <!-- Authentication -->
                    <form @submit.prevent="logout">
                        <DropdownLink as="button">
                            Log Out
                        </DropdownLink>
                    </form>
                </template>
            </Dropdown>
        </div>
        <div v-else class="space-x-4">
            <Link :href="route('login')" class="">
                Accedi
            </Link>
            <Link :href="route('register')" class="">
                Registrati
            </Link>
        </div>
        <NavLink v-if="$page.props.auth.user && $page.props.auth.user.is_admin !== 0" :href="route('admin.admindashboard')" :active="route().current('admin.admindashboard')">
            Sezione admin
        </NavLink>
        <a v-for="item in navigation.social" :key="item.name" target="_blank" :href="item.href" class=" hover:text-gray-500">
            <span class="sr-only">{{ item.name }}</span>
            <component :is="item.icon" class="h-6 w-6" aria-hidden="true" />
        </a>
        </div>
        <p class="mt-10 text-center text-xs leading-5 ">&copy; 2023 - Riformato Marco</p>
    </div>
    </footer>
    </div>
</template>
