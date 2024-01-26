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
         
        candidato: Object,
        estados: Array,        
        municipios: Array,
        escolaridads: Array,
        
       
    },
    data(){
        return{
       form:{
           
            sexo: this.candidato.sexo,
            pretencionEconomica: this.candidato.pretencionEconomica,
            telefono: this.candidato.telefono,
            domicilio: this.candidato.domicilio,
             descripcion: this.candidato.descripcion,
            municipiosFiltrados: [],
             municipio_id:'',
             escolaridad_id:'',
             cvfile:null,
             bolCv: false,
            
             
      }
     }
    },
    methods: {
        submit() {
            this.$inertia.post(
                this.route('candidato.update', this.candidato.id), {
                    _method:'put',
                    sexo: this.form.sexo,
                    pretencionEconomica: this.form.pretencionEconomica,
                    telefono: this.form.telefono,
                    domicilio: this.form.domicilio,
                    descripcion: this.form.descripcion,
                    municipio_id: this.form.municipio_id,  
                    escolaridad_id: this.form.escolaridad_id, 
                    cvfile: this.form.cvfile,
                   
                }
            )
        },

        select_file(event)
        {
            this.form.cvfile=event.target.files[0];
            
            if(this.form.cvfile){
                this.bolCv=true;
            }
            else{
                 this.bolCv=true;
            }

        },
        
        switchView: function(estado_id) {
     this.municipiosFiltrados = [];
   for (let item of this.municipios) {
       
       if(item.estado_id==estado_id){
           this.municipiosFiltrados.push(item);
       }
       
       
       
      }
      
    },
    }
}
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Editar tu perfil
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                  <div class="md:grid md:grid-cols-3 md:gap-2">
                      <div class="md:col-span-1">
                          <div class="px-4 sm:px0">
                              
                              <h3>Editar tu perfil</h3>
                              <p class="text-sm text-gray-600">Si editas no podras volver a recuperarlo</p>

                          </div>
                      </div>
                      <div class="md:col-span-2 mt-5 md:mt-0">
                          <div class="shadow bg-white md:rounded-md p-4">
                              <input type="file" @change="select_file">
                             <form  @submit.prevent="submit">
                                <label class="block font-medium text-sm text-gray-700">Sexo </label>
                                <select v-model="form.sexo"  class="form-control text-gray  px-2 rounded-md"   >
                                       
                                <option > 
                                     Hombre
                                    
                               </option>
                                  <option > 
                                    Mujer
                                    
                               </option>
                               </select>
                               
                                <label class="block font-medium text-sm text-gray-700">Pretencion economica </label>
                                <textarea class="form-input w-full rounded-md shadow-sm"
                                   v-model="form.pretencionEconomica"
                                ></textarea>
                                 <label class="block font-medium text-sm text-gray-700">Telefono </label>
                                <textarea class="form-input w-full rounded-md shadow-sm"
                                   v-model="form.telefono"
                                   
                                ></textarea>
                                 <label class="block font-medium text-sm text-gray-700">Domicilio </label>
                                <textarea class="form-input w-full rounded-md shadow-sm"
                                   v-model="form.domicilio"
                                ></textarea>
                                 <label class="block font-medium text-sm text-gray-700">Descripcion de carrera </label>
                                <textarea class="form-input w-full rounded-md shadow-sm"
                                   v-model="form.descripcion"
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

                               <label for="escolaridads" class="block font-medium text-sm text-gray-700">Escolaridad</label>
                               <select v-model="form.escolaridad_id"  class="form-control text-gray  px-4 rounded-md" >
                              <option selected="true">Seleccione su escolaridad</option>
                               <option  id="escolaridads" v-for="(escolaridad, i) in escolaridads" :key="i" v-bind:value="escolaridad.id"  >
                                     {{escolaridad.nombre}}
                               </option>
                               </select>
                               
                               
                              

                               
                                 <td class="border px-4 py-2">
                                     <div class="flex justify-between">
                                         <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md"
                                            >Editar</button> 
                                             <hr class="my-6"> 
                                             <Link :href="route('vacante.index')">
                                                 Volver
                                            </Link>


                                     </div>
                                         

                                   </td>
                                  
                             </form>


                            
                             
                          </div>

                      </div>
                  </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
