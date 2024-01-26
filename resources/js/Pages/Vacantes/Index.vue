<script>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Head, Link } from '@inertiajs/inertia-vue3'
import show from '@/Pages/Vacantes/Show.vue';


export default {
    components: {
        AppLayout,
        Head,
        Link,

    },
    props:{
        vacantes: Object,
        municipios: Array,
       
       
    },
    data(){
       return {
           namae: '',
           idVacante: '',
           observaciones:'',
           sueldo:'',
           ubicacion:'',
       search: '',
        q:[] ,
        municipio_id: '',
        pagination:{
            page:1,
            per_page:3,
       
       
      }   
       
       
      }   
    },
    methods: {
        submit(dato) {
          this.idVacante=dato.id
        this.namae =dato.nombre;
        this.observaciones =dato.observaciones;
        this.sueldo =dato.sueldo;
        this.ubicacion =dato.municipio.nombre;
                    
                },
        postular(idVacante,idCandidato) {
          
            this.$inertia.post(
                this.route('candidatosvacantes.store'), {
                  //TODO aqui debo mandar el id del sesion storage del candidato
                  candidato_id: idCandidato,  
                  
                  vacante_id: idVacante,
                    
                    
                }
            )
            }        
                
            
            
            
        },
    watch:{
        q: function(value){
     this.$inertia.get(this.route('vacante.index', {q: value}), {}, {preserveState: true})
    }
    }
}
</script>

<template >
    <AppLayout title="Dashboard" >
        <template  #header    > <!-- Template para los filtros  -->
        <table class="default">

            <tr>
                <td>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight " >
                    Titlulo
                </h2>
                </td>   
                <td>
                    Ubicacion
                </td>  
                <td>
                    Tiempo
                </td> 
              
            </tr>
            <tr>  
                 <td>     
                    <input type="text" class="form-input rounded-md shadow-sm" placeholder="Buscar..." v-model="q">
                </td>
            <td>
                <select v-model="municipio_id"  class="form-control text-gray  px-2 rounded-md"   >
                                       
                 <option v-for="(municipio, i) in municipios" :key="i" v-bind:value="municipio.id"  > 
                   {{municipio.nombre}}
                   </option>
              
                </select>
            </td>
            <td>
                   <select v-model="municipio_id"  class="form-control text-gray  px-2 rounded-md"   >
                                       
                 <option  > 
                  Medio Turno            
                   </option>
                   <option  > 
                  Turno Completo                       
                   </option>
                   <option  > 
                  Home Office
                   </option>
              
                </select>
                </td> 
               
          </tr>
     </table>
        </template>
        
        

        <div class="py-12"> <!-- Todo le contenido de la tablas  -->
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                  <div class="md:grid md:grid-cols-5 md:gap-2">
                      <div class="md:col-span-2">
                          <div class="px-4 sm:px0">
                            
                              <table class="table w-full">  <!--  Tabla de la izquierda preview de la vacante  -->
                                 <td class="border px-4 py-2" style="background:black; color: white;">
                                     Nombre de la vacante
                                 </td>
                                       
                                 <tr v-for="(vacante, i) in vacantes.data" :key="i" >
                                    <td class="border px-4 py-2"  >
                                         <p style="white-space: pre-wrap" :href="route('vacante.show', vacante.id)"> {{vacante.nombre}} <br >  
                                          {{vacante.descripcion}} <br> 
                                          {{'Ubicacion '+vacante.municipio.nombre +' '+vacante.municipio.estado.nombre}} <br>
                                           {{'Sueldo: '+vacante.sueldo}}</p>
                                           <a v-on:click="submit(vacante) " align="center"> <!-- Metodo que manda la vacante actual  para mostrarla   -->
                                                Ver mas...
                                          </a> 
                                    </td>
                                      
                                        <br>
                                       </tr>

                                          <br><br>

                               </table>
                                     <div class="mt-6"> <!-- Aqui esta el paginate de la busqueda de vacantes  -->
                                        
                                        <Link v-for="(link, i) in vacantes.links" :key="i"
                                        :href="link.url"
                                        v-html="link.label" 
                                        class="px-1"
                                        :class="{ 'text-gray-500': ! link.url, 'font-bold' : link.active }"                            
                                        />


                            </div>
                          </div>
                      </div>
                      <div class="md:col-span-3 mt-5 md:mt-0">  <!-- Detalles de las vacantes   -->
                          <div v-show="observaciones==''" class="shadow bg-white md:rounded-md p-4">
                                
                             <h3>Listado de vacantes</h3>
                              <p class="text-sm text-gray-600">Mira esta nueva vacante</p>
                                   
                              </div>
                               <br>
                               <form @submit.prevent="postular(idVacante,$page.props.auth.user.candidato.id)"> <!-- Metodo para postularte  -->
                              <!-- TODO Tabla  -->
                                 <div  v-show="observaciones!=''" class="shadow bg-white md:rounded-md p-4 ">
                                
                              <h3>{{namae}}</h3>
                              <p  style="white-space: pre-wrap" class="text-sm text-gray-600">{{ observaciones
                                  
                                  }}</p>
                                  <p class="text-sm text-gray-600">{{ "Ubicacion: "+ubicacion
                                  
                                  }}</p>
                                  <p class="text-sm text-gray-600">{{ "Sueldo "+sueldo
                                  
                                  }}</p>

                                  <button v-if="$page.props.auth.user.candidato" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md"
                                >Postularme</button>

                              </div>
                                 
                         
                              </form> 


                              <!-- TODO Tabla  -->
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
