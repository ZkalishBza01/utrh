<script>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Head, Link } from '@inertiajs/inertia-vue3'
import { Method } from '@inertiajs/inertia'

export default {
    components: {
        AppLayout,
        Head,
        Link,

    
    },
    

    data(){
        return{
       form:{
            name: '',
            email: '',
            password: '',
          
            
            
           
            
      }
     }
    },
    methods: {
        submit() {


            this.$inertia.post(
                this.route('reclutador.store'), {
                    name: this.form.name,
                    email: this.form.email,
                    password: this.form.password,
                      
                     onFinish: () => form.reset('password', 'password_confirmation'),

                    
                }
            )
            
        },
         
  
 
 switchView: function(estado_id) {
     this.municipiosFiltrados = [];
   for (let item of this.municipios) {
       
       if(item.estado_id==estado_id){
           this.municipiosFiltrados.push(item);
       }
       
       
       
      }
      
    },


    
  },
  
    }
    

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Vacantes
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                  <div class="md:grid md:grid-cols-3 md:gap-2">
                      <div class="md:col-span-1">
                          <div class="px-4 sm:px0">
                              <h3>Nuevo Admin</h3>
                              <p class="text-sm text-gray-600">Luego de crearla podras editar</p>

                          </div>
                      </div>
                      <div class="md:col-span-2 mt-5 md:mt-0">
                          <div class="shadow bg-white md:rounded-md p-4">
                             <form  @submit.prevent="submit">
                                <label class="block font-medium text-sm text-gray-700">Nombre </label>
                                <input class="form-input w-full rounded-md shadow-sm"
                                   v-model="form.name"
                                >
                                 <label class="block font-medium text-sm text-gray-700">Correo </label>
                                <input type="email" class="form-input w-full rounded-md shadow-sm"
                                   v-model="form.email"
                                >
                              <label class="block font-medium text-sm text-gray-700">Contraseña </label>
                              <input type="password" v-model="form.password"  class="form-input w-full rounded-md shadow-sm">

                               
                               
                               
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md"
                                >Crear</button>
                             </form>
                          </div>

                      </div>
                  </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
