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
        vacante: Object,
        candidato: Array,
      
    }, data(){
        return{
       form:{
            candidato_id: '',
            vacante_id: '',
           
            
            
           
            
      }
     }
    },
      methods: {
        submit(idVacante) {
          
            this.$inertia.post(
                this.route('candidatosvacantes.store'), {
                  //TODO aqui debo mandar el id del sesion storage del candidato
                  candidato_id: idCandidato,  
                  
                  vacante_id: idVacante,
                    
                    
                }
            )
            }
            
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
                              <h3>Detalle de una vacante</h3>
                              

                          </div>
                      </div>

                      <div class="md:col-span-2 mt-5 md:mt-0">
                           <form  @submit.prevent="submit(vacante.id)" >
                          <div class="shadow bg-white md:rounded-md p-4"  align="left"  >
                             
                              <p>Observaciones</p>
                              <pre class=" border px-2 py-2 " style="white-space: pre-wrap">  {{vacante.observaciones}}</pre>
                             
                                <p>Sueldo</p>
                              <p class="border px-2 py-2">{{vacante.sueldo}}</p>
                               <p>Municipio</p>
                              <p class="border px-2 py-2">{{vacante.municipio.nombre}}</p>
                                <p>Cliente</p>
                              <p class="border px-2 py-2">{{vacante.cliente.giro}}</p>

                              <hr class="my-6"> 
                              <Link :href="route('vacante.index')">
                              Volver
                              </Link>
                          </div>
                          
                         <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md"
                                >Postularme</button>
                             </form>

                      </div>
                      
                     
                  </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
