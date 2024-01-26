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
    
    props:{
       
        estados: Array,        
        municipios: Array,
        user: Object,

      
    },
    data(){
        return{
       form:{
            nombre: '',
            observaciones: '',
            sueldo: '',
            estado_id:'',           
            municipio_id:'',
            reclutador_id:'',
            municipiosFiltrados: [],
            cliente_id:'',
            
            
           
            
      }
     }
    },/*,watch:{
        estados2: function(estados2){
     this.$inertia.get(this.route('vacante.create', {q: estados2}), {}, {preserveState: true})
    }
    },*/
    methods: {
        submit() {

            this.$inertia.post(
                this.route('candidato.store'), {
                    nombre: this.form.nombre,
                    observaciones: this.form.observaciones,
                    sueldo: this.form.sueldo,                    
                    municipio_id: this.form.municipio_id,   
                    reclutador_id: this.user.id,  
                    cliente_id: this.form.cliente_id,
                      
                    
                    
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
                              <h3>Crear de una vacante</h3>
                              <p class="text-sm text-gray-600">Luego de crearla podras editar</p>

                          </div>
                      </div>
                      <div class="md:col-span-2 mt-5 md:mt-0">
                          <div class="shadow bg-white md:rounded-md p-4">
                             <form  @submit.prevent="submit">
                                <label class="block font-medium text-sm text-gray-700">Titulo </label>
                                <textarea class="form-input w-full rounded-md shadow-sm"
                                   v-model="form.nombre"
                                ></textarea>
                                 <label class="block font-medium text-sm text-gray-700">Observaciones </label>
                                <textarea class="form-input w-full rounded-md shadow-sm"
                                   v-model="form.observaciones"
                                   rows="8"
                                ></textarea>
                                 <label class="block font-medium text-sm text-gray-700">sueldo </label>
                                <textarea class="form-input w-full rounded-md shadow-sm"
                                   v-model="form.sueldo"  
                                ></textarea>
                                 <label for="estados" class="block font-medium text-sm text-gray-700">Estado</label>
                               <select v-model="form.estado_id"  class="form-control text-gray  px-4 rounded-md" @change="switchView(form.estado_id)" >
                               <option  v-for="(estado, i) in estados" :key="i" v-bind:value="estado.id"  >
                                     {{estado.nombre}}
                               </option>
                               </select>
                              
                              
                               
                                   <label for="municipiosFiltrados" class="block font-medium text-sm text-gray-700">Municipio</label>
                                 <select v-model="form.municipio_id"  class="form-control text-gray  px-4 rounded-md"   >
                                       
                                <option id="optionMunicipio" v-for="(municipiosFiltrado, i) in municipiosFiltrados" :key="i" v-bind:value="municipiosFiltrado.id"  > 
                                     {{municipiosFiltrado.nombre}}
                                    
                               </option>
                               </select>
                                  <label for="municipiosFiltrados" class="block font-medium text-sm text-gray-700">Cliente</label>
                                 <select v-model="form.cliente_id"  class="form-control text-gray  px-4 rounded-md"   >
                                       
                                <option id="optionMunicipio" v-for="(cliente, i) in clientes" :key="i" v-bind:value="cliente.id"  > 
                                     {{cliente.giro}}
                                    
                               </option>
                               </select>
                               
                               
                               
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
