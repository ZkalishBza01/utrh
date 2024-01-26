<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';
import nosotros from '@/Pages/principal/Nosotros.vue';
import servicios from '@/Pages/principal/Servicios.vue';
import herramientas from '@/Pages/principal/Herramientas.vue';
import contacto from '@/Pages/principal/Contacto.vue';
import mapa2 from '@/Pages/principal/Mapa2.vue';
</script>

<template>
    <AppLayout title="Dashboard" >
        

          <div id="inicio" class="site-blocks-cover mb-5 d-flex justify-content-center flex-wrap mb-3" style="background-image: url(images/ImagenSlider1900x700.webp);" data-stellar-background-ratio="0.5">
          

            <div class="d-flex align-items-center justify-content-center">
                <div class="text-center">
                     <div class="conteiner_input"> <!--justify-content: center-->
                  <input class="input_left" placeholder="¿Que es lo que buscas?"> 
                   <input class="input_right" placeholder="¿En donde?">
                  </div>
                   
                    <h2 class="mb-2">
                        Deje que <span class="font-weight-bold Montserrat_Bold">UTRH</span> se encargue <br> del tesoro <span class="font-weight-bold Montserrat_Bold">más preciado</span> <br> de su empresa,
                        <span class="font-weight-bold Montserrat_Bold">su capital humano</span>
                    </h2>
                </div>
            </div>
            
        </div> 
            <nosotros></nosotros>
                <servicios></servicios>
                <herramientas></herramientas>  
                <!--  <contacto></contacto> 
                <mapa2></mapa2> -->
    </AppLayout>
    
</template>
