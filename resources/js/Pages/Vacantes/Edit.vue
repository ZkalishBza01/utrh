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
        vacantes: Object,
         estados: Array,        
        municipios: Array,
        clientes: Array,
        candidatos2: Array,
    },
    data(){
        return{
       form:{
           id:'',
            nombre: '',
            descripcion:'',
            observaciones: '',
            sueldo: '',
            municipiosFiltrados: [],
            candidatoFiltrados: [],
            municipio_id:'',
            cliente_id:'',
            estado_id:'',
            bolBoton:false,
            bolVacante:false,
            bolPostulados:false,
      }
     }
    },
    methods: {
        submit() {
            
            
            this.$inertia.put(
                this.route('vacante.update', this.form.id), {
                    nombre: this.form.nombre,
                    descripcion: this.form.descripcion,
                    observaciones: this.form.observaciones,
                    sueldo: this.form.sueldo,
                    municipio_id: this.form.municipio_id,  
                    cliente_id:this.form.cliente_id, 
                    estado_id: this.form.estado_id, 
                }
            )
        },

        hola(vacante){


             this.form.bolBoton=false;
             this.form.bolVacante=true;
              this.form.bolPostulados=false
            
            this.form.id=vacante.id;
            this.form.nombre=vacante.nombre;
            this.form.descripcion=vacante.descripcion;
            this.form.observaciones=vacante.observaciones;
            this.form.sueldo= vacante.sueldo;
            this.form.cliente_id=vacante.cliente_id;
            this.form.estado_id= vacante.municipio.estado_id;
            this.form.municipio_id= vacante.municipio_id;           
            
           

      
         

        },
        botonShow(){
           
         this.form.bolBoton=true;
        

        },
         
         postuladosShow(vacante){
             this.form.bolPostulados=false;
              this.candidatoFiltrados =[];
             this.form.bolBoton=false;
             this.form.bolVacante=false;
             this.form.bolPostulados=true;

              for (let item of this.candidatos2) {

                       
            if(item.vacante_id==vacante.id){
                this.candidatoFiltrados.push(item);
            }
         }
         

        },
        destroy(){
             if(confirm('Desea eliminar?')){
                    this.$inertia.delete(
                this.route('vacante.destroy', this.vacante.id)
            )
                 
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
                Vacantes
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                  <div class="md:grid md:grid-cols-5 md:gap-2">
                      <div class="md:col-span-2">
                          <div class="px-4 sm:px0">
                              <h3>Editar de una vacante</h3>
                               <table class="table w-full">  <!--  Tabla de la izquierda preview de la vacante  -->
                                 <td class="border px-4 py-2" style="background:black; color: white;">
                                     Nombre de la vacante
                                 </td>
                                       
                                 <tr v-for="(vacante, i) in vacantes.data" :key="i" >
                                    <td class="border px-4 py-2"  >
                                         <p style="white-space: pre-wrap"> {{vacante.nombre}} <br >  
                                          {{vacante.descripcion}} <br> 
                                          {{'Ubicacion '+vacante.municipio.nombre +' '+vacante.municipio.estado.nombre}} <br>
                                           {{'Sueldo: '+vacante.sueldo}}</p>
                                           <a v-on:click="hola(vacante) " align="center"> <!-- Metodo que manda la vacante actual  para mostrarla   -->
                                                Cargar para editar...
                                          </a> <br>
                                           <a v-on:click="postuladosShow(vacante)" align="center"> <!-- Metodo que manda la vacante actual  para mostrarla   -->
                                                Mostrar postulados...
                                          </a> 
                                           

                                          
                                    </td>
                                      
                                        <br>
                                       </tr>

                                          <br><br>

                               </table>

                          </div>
                      </div>
                      <div class="md:col-span-3 mt-5 md:mt-0">
                          <div v-show="this.form.bolVacante" class="shadow bg-white md:rounded-md p-4">
                              
                             <form  @submit.prevent="submit(form.id)">
                                <label class="block font-medium text-sm text-gray-700">Titulo </label>
                                <textarea class="form-input w-full rounded-md shadow-sm"
                                   v-model="form.nombre"
                                ></textarea>
                                <label class="block font-medium text-sm text-gray-700">Descripcion </label>
                                <textarea class="form-input w-full rounded-md shadow-sm"
                                   v-model="form.descripcion"
                                   rows="3"
                                ></textarea>
                                 <label class="block font-medium text-sm text-gray-700">Observaciones </label>
                                <textarea class="form-input w-full rounded-md shadow-sm"
                                   v-model="form.observaciones"
                                   rows="8"
                                ></textarea>
                                 <label class="block font-medium text-sm text-gray-700">Sueldo </label>
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
                                 <select v-model="form.municipio_id"  class="form-control text-gray  px-4 rounded-md"  @change="botonShow()"  >

                                      

                                <option v-for="(municipiosFiltrado, i) in municipiosFiltrados" :key="i" v-bind:value="municipiosFiltrado.id "  > 
                                     {{municipiosFiltrado.nombre}}
                                    
                               </option>
                               </select>

                               <label for="municipiosFiltrados" class="block font-medium text-sm text-gray-700">Cliente</label>
                                 <select v-model="form.cliente_id"  class="form-control text-gray  px-4 rounded-md"    >
                                       
                                <option  v-for="(cliente, i) in clientes" :key="i" v-bind:value="cliente.id"  > 
                                     {{cliente.giro}}
                                    
                               </option>
                               </select>
                              

                               
                                 <td class="border px-4 py-2">
                                     <div class="flex justify-between">
                                         <button v-show="this.form.bolBoton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md"
                                            >Editar</button> 
                                             <hr class="my-6"> 
                                        <a  v-show="!this.form.bolBoton" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-md" 
                                        >Llena todos los campos</a>     
                                            


                                     </div>
                                         

                                   </td>
                                  
                             </form>


                             <hr class="my-6">
                             <a href="#" @click.prevent="hola">
                                 Eliminar vacante
                             </a>
                             
                          </div>
                          <div > <!--Aqui tabla-->
                          <div v-show="this.form.bolPostulados" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                                <table class="table w-full">  <!--  Tabla postulados  -->
                                
                                       
                                    <tr v-for="(item, i) in this.candidatoFiltrados" :key="i" >
                                        <td class="border px-4 py-2"  >
                                            <p style="white-space: pre-wrap" >Nombre: {{item.candidato.user.name}}
                                                 <br >Pretenciones economicas: {{item.candidato.pretencionEconomica}}
                                                 <br >Telefono: {{item.candidato.telefono}}
                                                 <br>
                                                 <a v-bind:href="'../../../../cv/'+item.candidato.cv" target="_blank">Ver CV  </a>
                                                <!-- TODO faltaria agregar el boton de ver CV  -->
                                                </p >  
                                            
                                            
                                        </td>
                                        
                                        
                                    </tr>

                                          

                               </table>
                                </div>
                          </div>
                          </div>

                      </div>
                  </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
