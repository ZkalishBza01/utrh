<script setup>
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { Head, Link } from '@inertiajs/inertia-vue3';
import JetApplicationMark from '@/Jetstream/ApplicationMark.vue';
import JetBanner from '@/Jetstream/Banner.vue';
import JetDropdown from '@/Jetstream/Dropdown.vue';
import JetDropdownLink from '@/Jetstream/DropdownLink.vue';
import JetNavLink from '@/Jetstream/NavLink.vue';
import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    Inertia.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    Inertia.post(route('logout'));
};
</script>

<template>
    <div  >
        <Head :title="title" />

      

        <div class="min-h-screen bg-gray-100" >
            <nav class="bg-white border-b border-red-100" >
                <!-- Primary Navigation Menu  style="background-color: #0c1873;"abajo-->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" >
                    <div class="flex justify-between h-16" >
                        <div class="flex">
                            <!--TODO Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('dashboard')">
                            
                                    <JetApplicationMark class="block h-9 w-auto" />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <JetNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                    Dashboard
                                </JetNavLink>
                                   <JetNavLink :href="route('vacante.index')" :active="route().current('vacante.*')">
                                    Vacantes
                                </JetNavLink>
                            </div>
                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                           

                            <!-- Settings Dropdown -->
                            <div  v-if="$page.props.user" class="ml-3 relative">
                                <JetDropdown align="right" width="48">
                                    <template #trigger >
                                        <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name">
                                        </button>

                                        <span v-else class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{ $page.props.user.name }}

                                                <svg
                                                    class="ml-2 -mr-0.5 h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            Manage Account
                                        </div>

                                        <JetDropdownLink v-if="$page.props.auth.user.candidato" :href="route('profile.show')">
                                            Profile
                                        </JetDropdownLink>
                                        <JetDropdownLink v-if="$page.props.auth.user.reclutador" :href="route('vacante.create',$page.props.auth.user.reclutador.id)">
                                            Nueva Vacante
                                        </JetDropdownLink>
                                         <JetDropdownLink  v-if="$page.props.auth.user.reclutador"  :href="route('reclutador.index')">
                                            Nuevo Admin
                                        </JetDropdownLink>
                                        
                                        
                                         
                                        <JetDropdownLink  v-if="$page.props.auth.user.candidato"  :href="route('candidato.edit',$page.props.auth.user.candidato.id)" :active="route().current('candidato.*')">
                                            Profile Professional
                                        </JetDropdownLink>

                                        <JetDropdownLink v-if="$page.props.auth.user.reclutador" :href="route('vacante.edit',$page.props.auth.user.reclutador.id)">
                                            Ver mis Vacantes
                                        </JetDropdownLink>

                                        

                                        <div class="border-t border-gray-100" />

                                        <!-- Authentication -->
                                        <form @submit.prevent="logout">
                                            <JetDropdownLink as="button">
                                                Log Out
                                            </JetDropdownLink>
                                        </form>
                                    </template>
                                </JetDropdown>
                            </div>
                            <div v-else>
                                  <JetDropdown align="right" width="48">
                                  <template #trigger >
                                        <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name">
                                        </button>

                                        <span v-else class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                Menu

                                                <svg
                                                    class="ml-2 -mr-0.5 h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                >
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>
                                    
                                  <template #content>
                                   
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            Manage Account
                                        </div>
                                       <JetDropdownLink :href="route('login')">
                                            Login
                                        </JetDropdownLink>
                                        <JetDropdownLink :href="route('register')">
                                            Register
                                        </JetDropdownLink>

                                       
                                        

                                       
                                    </template>
                                </JetDropdown>

                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition" @click="showingNavigationDropdown = ! showingNavigationDropdown">
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
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <JetResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Dashboard
                        </JetResponsiveNavLink>
                           <JetResponsiveNavLink :href="route('vacante.index' )" :active="route().current('vacante.*')">
                            Vacantes
                        </JetResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="flex items-center px-4">
                           

                            <div v-if="$page.props.user">
                                <div class="font-medium text-base text-gray-800">
                                    {{ $page.props.user.name }}
                                </div>
                                <div class="font-medium text-sm text-gray-500">
                                    {{ $page.props.user.email }}
                                </div>
                                        <JetDropdownLink :href="route('profile.show')">
                                            Profile
                                        </JetDropdownLink>
                                        <JetDropdownLink :href="route('candidato.edit',$page.props.user.id)" :active="route().current('candidato.*')">
                                            Profile Professional
                                        </JetDropdownLink>
                                
                            </div>
                            <div v-else>
                                 <JetDropdownLink :href="route('login')">
                                            Login
                                        </JetDropdownLink>
                                        <JetDropdownLink :href="route('register')">
                                            Register
                                        </JetDropdownLink>


                            </div>
                        </div>

                        
                    </div>
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
                <div v-if="$page.props.flash.status" class="bg-blue-500 text-white text-sm font-bold p-4">
                     <p>{{ $page.props.flash.status }}</p>
                  </div>
                <slot />
            </main>

            <footer class="site-footer mt-5 pt-5">
          <div class="container">
         <div class="row">
            <div class="col-12 col-md-3 mb-5 mb-lg-0">
                <ul class="list-unstyled">
                    <li>
                        <h3 class="footer-heading font-weight-bold"> <i class="fas fa-map-marker-alt fa-lg"></i> Corporativo </h3>
                    </li>
                    <li>
                        <a> <i class="fas fa-envelope-open-text fa-lg"></i> atencion@UTRH.com</a>
                    </li>
                    <li>
                        <a> <i class="fas fa-phone fa-lg"></i> +01 (33) 30630505</a>
                    </li>
                    <li>
                        <a> <i class="far fa-clock fa-lg"></i> L - V 8-18Hrs. S - 8-12Hrs.</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-3 mb-5 mb-lg-0">
                    <h3 class="footer-heading font-weight-bold pl-md-5"> Acerca de </h3>
                    <ul class="list-unstyled">
                        <li class="">
                            <JetDropdownLink to="/principal" class="pl-md-5 nosotros">Nosotros</JetDropdownLink>
                        </li>
                        <li class="">
                            <JetDropdownLink to="/principal" class="pl-md-5 contacto">Contacto</JetDropdownLink>
                        </li>
                    </ul>
                </div>
            <!--<div class="col-12 col-md-3 mb-lg-0">
                <h3 class="footer-heading font-weight-bold"> Newsletter </h3>
                <ul class="list-unstyled">
                    <li>
                        <a>Suscríbete gratis a nuestro Newsletter</a>
                    </li>
                    <li>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Correo electrónico" aria-label="Input group example" aria-describedby="btnGroupAddon">
                            <div class="input-group-prepend">
                                <div class="input-group-text" id="btnGroupAddon"> <i class="fab fa-telegram-plane fa-lg" style="color:blue"></i> </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>-->
        </div>
        <hr style="border-color:white">
        <div class="row text-center">
            <div class="col-md-12">
                <h3 class="footer-heading">Síguenos</h3>
                <div class='demopadding d-flex justify-content-center'>
                    <a href="https://www.facebook.com/escarhmx/" target="_blank">
                        <div class='icon social fb'> <i class='fab fa-facebook-f'></i> </div>
                    </a>
                    <a href="https://www.instagram.com/escarhmx/" target="_blank">
                        <div class='icon social ins'> <i class='fab fa-instagram'></i> </div>
                    </a>
                    <a href="https://twitter.com/escarhmx" target="_blank">
                        <div class='icon social tw'> <i class='fab fa-twitter'></i> </div>
                    </a>
                    <a href="https://mx.linkedin.com/company/escarh-s-c-" target="_blank">
                        <div class='icon social in'> <i class='fab fa-linkedin-in'></i> </div>
                    </a>
                </div>  
                <p>  UTRH de México S.C. 2019 Todos los derechos reservados  </p>
            </div>
        </div>
    </div>
</footer>
        </div>
    </div>
</template>
