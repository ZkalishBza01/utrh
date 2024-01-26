<template>
    <div>
        <div class="d-flex justify-content-center">
            <div id="servicios" class="col-md-4 text-center mb-5 pl-0 pr-0"> <h1 class="mt-0 mb-0 pt-0 pb-0 font-weight-bold Montserrat_Bold">Servicios</h1> </div>
        </div>
        
        <div class="mb-5">
            <h5 class="text-center">Si está buscando personal calificado para su empresa, nosotros le ayudamos.</h5>
        </div>
        
        <div class="row">

            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="card gris_cards">
                    <div class="text-center font-weight-bold pt-1 pb-1">Reclutamiento y selección</div>
                    <div class="unit-8">
                        <a @click="desplazar('rec_sec')" class="img-a"><img src="images/01ImagenV2.webp" class="card-img-bottom pl-2 pr-2 pb-2 zoom_in rec_sec" alt="Reclutamiento y selección"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="fade-right">
                <div class="card gris_cards">
                    <div class="text-center font-weight-bold mt-1 mb-1">Head Hunting</div>
                    <div class="unit-8">
                        <a @click="desplazar('headHunting')" class="img-a"><img src="images/02ImagenV2.webp" class="card-img-bottom pl-2 pr-2 pb-2 zoom_in headHunting" alt="Head Hunting"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="zoom-in-up">
                <div class="card gris_cards">
                    <div class="text-center font-weight-bold mt-1 mb-1">Outsourcing</div>
                    <div class="unit-8">
                        <a @click="desplazar('outsourcing')" class="img-a"><img src="images/03ImagenV2.webp" class="card-img-bottom pl-2 pr-2 pb-2 zoom_in outsourcing" alt="Outsourcing"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 mb-md-5" data-aos="fade-up">
                <div class="card gris_cards">
                    <div class="text-center font-weight-bold mt-1 mb-1">Pruebas psicométricas</div>
                    <div class="unit-8">
                        <a @click="desplazar('psicometrias')" class="img-a"><img src="images/04ImagenV2.webp" class="card-img-bottom pl-2 pr-2 pb-2 zoom_in psicometrias" alt="Pruebas psicométricas"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 mb-md-5" data-aos="fade-up-right">
                <div class="card gris_cards">
                    <div class="text-center font-weight-bold mt-1 mb-1">Estudios socioeconómicos</div>
                    <div class="unit-8">
                        <a @click="desplazar('psicometrias')" class="img-a"><img src="images/05ImagenV2.webp" class="card-img-bottom pl-2 pr-2 pb-2 zoom_in psicometrias" alt="Estudios socioeconómicos"></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 mb-md-5" data-aos="fade-down-right">
                <div class="card gris_cards">
                    <div class="text-center font-weight-bold mt-1 mb-1">Transporte de personal</div>
                    <div class="unit-8">
                        <a href="https://www.busmen.com/"  target="_blank" class="img-a"><img src="images/06ImagenV2.webp" class="card-img-bottom pl-2 pr-2 pb-2 zoom_in" alt="Transporte de personal"></a>
                    </div>
                </div>
            </div>

        </div>

        
        <div class="container">
            <div class="row">

                <div ref="rec_sec" id="rec_sec" class="col-md-12 mb-4 sub_encabezado text-white pl-5"><h4 class="pt-1 pb-0 font-weight-bold">Reclutamiento y selección</h4></div>
                <div class="col-md-6 pr-0 pl-0 gris_cards" data-aos="fade-right">
                    <div class="unit-8">
                        <span class="img-a"><img src="images/Imagen002v2.webp" class="card-img-bottom" alt="Reclutamiento y selección"></span>
                    </div>
                </div> 
                <div class="col-md-6 pl-5 gris_cards text-justify Montserrat_Light">
                    <p class="mt-2">- Asignación de un especialista en entrevistas por competencia.</p>
                    <p>- Envío de candidatos perfectamente filtrados al perfil solicitado.</p>
                    <p>- Respuesta inmediata (72 horas).</p>
                    <p>- Pruebas psicométricas.</p>
                    <p>- Verificación de referencias laborales.</p>
                    <p>- Póliza de garantía de hasta 90 días.</p>
                </div>
                

                <div ref="headHunting" id="headHunting" class="col-md-12  mt-4 mb-4 sub_encabezado text-white pl-5"><h4 class="pt-1 pb-0 font-weight-bold">Head Hunting</h4></div>
                <div class="col-md-6 pl-5 gris_cards text-justify Montserrat_Light">
                    <p class="mt-2">- Si está buscando personal calificado para su empresa, nosotros le ayudamos.</p>
                    <p>- Profesionistas expertos en la búsqueda y selección de talento especializado.</p>
                    <p>- Asesoría en alcances de la vacante y su ubicación en mercado según esquema de ingresos, complejidad y giro.</p>
                    <p>- Discreción al abordar al candidato.</p>
                    <p>- Póliza de garantía de hasta 180 días.</p>
                </div>
                <div class="col-md-6 pr-0 pl-0 gris_cards" data-aos="fade-right">
                    <div class="unit-8">
                        <span class="img-a"><img src="images/Imagen01v2.webp" class="card-img-bottom" alt="Head Hunting"></span>
                    </div>
                </div>  
            

                <div class="col-md-12 mt-4 mb-4 sub_encabezado text-white text-right pr-5"><h4 class="pt-1 pb-0 font-weight-bold">¿Cómo funciona?</h4></div>
                <div class="col-md-6 pr-0 pl-0 gris_cards" data-aos="fade-right">
                    <div class="unit-8">
                        <span class="img-a"><img src="images/Imagen02v2.webp" class="card-img-bottom " alt="¿Cómo funciona?"></span>
                    </div>
                </div>  
                <div class="col-md-6 pr-0 pl-0 pb-0 gris_cards">
                    
                    <div class="slideshow">
                        <ul class="slider pr-0 pl-0 mb-0">
                            <li>
                                <section class="caption Montserrat_Light">
                                    <span class="font-weight-bold">- Definición de perfil.<br></span>
                                    <span>Asesoría en el mercado de cada vacante.<br></span>
                                    <span class="font-weight-bold">- Conformación de cartera.<br></span>
                                    <span>Búsqueda de talento y entrevista profesional acorde al puesto.</span>
                                </section>
                            </li>
                            <li>
                                <section class="caption Montserrat_Light">
                                    <span class="font-weight-bold">- Depuración y filtro.<br></span>
                                    <span>Envío de candidatos perfectamente seleccionados.<br></span>
                                    <span class="font-weight-bold">- Pruebas psicométricas.<br></span>
                                    <span class="slider_Desaparece_900">Nos permite identificar personalidades, hábitos, estilo, aptitudes y actitudes.<br></span>
                                    <span class="slider_Desaparece_900">Verificamos referencias laborales y averiguamos profundamente el desempeño en sus últimas empresas.<br></span>
                                    <span class="slider_Desaparece_1200">Estudio socioeconómico, analizamos sus estatus y aplicamos examen médico (costo adicional).</span>
                                </section>
                            </li>
                        </ul>
                        
                        <ol class="pagination_slider pr-0 pl-0"> 
                            <li v-on:click="pagination(1)"><span class="fa fa-circle"></span></li>    
                            <li v-on:click="pagination(2)"><span class="fa fa-circle"></span></li>
                        </ol>
                        <div class="left_slider"> <span class="fa fa-chevron-left"></span> </div>
                        <div class="right_slider"> <span class="fa fa-chevron-right"></span> </div>
                    </div>
                    
                </div>


                <div ref="outsourcing" id="outsourcing" class="col-md-12 mt-4 mb-4 sub_encabezado text-white pl-5"><h4 class="pt-1 pb-0 font-weight-bold">Outsourcing</h4></div>
                <div class="col-md-6 pl-5 gris_cards text-justify Montserrat_Light">
                    <p class="mt-3">- El outsourcing ha demostrado su eficiencia al reducir costos, hoy en día puede encomendarse tareas tan delicadas, como la administración del capital humano.</p>
                    <p>- UTRH, a través de sus empresas filiales y especializadas por actividad; recluta, selecciona, contrata y vigila la relación laboral de los empleados trabajando bajo sus normas y políticas..</p>
                </div>
                <div class="col-md-6 pr-0 pl-0 gris_cards" data-aos="fade-right">
                    <div class="unit-8">
                        <span class="img-a"><img src="images/Imagen03v2.webp" class="card-img-bottom " alt="Outsourcing"></span>
                    </div>
                </div> 


                <div ref="psicometrias" id="psicometrias" class="col-md-12 mt-4 mb-4 sub_encabezado text-white text-right pr-5"><h4 class="pt-1 pb-0 font-weight-bold">Psicometrías | Estudios socioeconómicos</h4></div>
                <div class="col-md-6 pr-0 pl-0 gris_cards" data-aos="fade-right">
                    <div class="unit-8">
                        <span class="img-a"><img src="images/Imagen04v2.webp" class="card-img-bottom " alt="Psicometrías | Estudios socioeconómicos"></span>
                    </div>
                </div>  
                <div class="col-md-6 pr-5 gris_cards text-justify Montserrat_Light">
                    <p class="font-weight-bold">- Psicometrías.</p>
                    <p class="mt-3">- Son exámenes que evalúan las aptitudes de los candidatos, es decir sus razgos innatos que, de ser descubiertos, pueden ser transformados en habilidades. 
                       Su finalidad es medir la conducta, la personalidad, la actitud, el coeficiente intelectual y las habilidades entre otras aptitudes y sirven para elegir al candidato más 
                       apto para ocupar la vacante.</p>
                    <p class="font-weight-bold">- Estudios socioeconómicos.</p>
                    <p>- Investigación domiciliaria, social, económica y laboral en donde se verifican y evalúan los datos que nos permiten tener un profundo conocimiento del candidato a contratar.</p>
                    
                </div>

            </div>
        </div>

    </div>
</template>

<script>
var imgItems = 0; // Numero de Slides
var	imgPos = 0;
var timer;

export default {
    methods: {
        desplazar(refName) {
            var element = this.$refs[refName];
            var topp = element.offsetTop - 64;
            $('html, body').animate({
                    scrollTop: topp
            }, 1000, "easeInOutExpo");
        },

        slider(){
            imgItems = $('.slider li').length; // Numero de Slides
            imgPos = 1;

            $('.slider li').hide(); // Ocultanos todos los slides
            $('.slider li:first').show(); // Mostramos el primer slide
            $('.pagination_slider li:first').css({'color': '#0c1873'}); // Damos estilos al primer item de la paginacion

            // Ejecutamos todas las funciones
            $('.right_slider').click(this.nextSlider);
            $('.left_slider').click(this.prevSlider);

            this.myTimer(6);
        },

        myTimer(sec) {
            if (timer) clearInterval(timer);
            timer = setInterval(()=> { 
                sec--;
                if (sec == -1) {
                    clearInterval(timer);
                    this.nextSlider();
                } 
            }, 1000);
        },

        pagination(index){
            this.myTimer(6);
            var paginationPos = index; // Posicion de la paginacion seleccionada

            $('.slider li').hide(); // Ocultamos todos los slides
            $('.slider li:nth-child('+ paginationPos +')').fadeIn(); // Mostramos el Slide seleccionado
            

            // Dandole estilos a la paginacion seleccionada
            $('.pagination_slider li').css({'color': '#858585'});
            // $(this).css({'color': '#0c1873'});
            $('.pagination_slider li:nth-child(' + paginationPos +')').css({'color': '#0c1873'});

            imgPos = paginationPos;
        },

        nextSlider(){
            this.myTimer(6);
            if( imgPos >= imgItems){imgPos = 1;} 
            else {imgPos++;}

            $('.pagination_slider li').css({'color': '#858585'});
            $('.pagination_slider li:nth-child(' + imgPos +')').css({'color': '#0c1873'});

            $('.slider li').hide(); // Ocultamos todos los slides
            $('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado
        },

        prevSlider(){
            this.myTimer(6);
            if( imgPos <= 1){imgPos = imgItems;} 
            else {imgPos--;}

            $('.pagination_slider li').css({'color': '#858585'});
            $('.pagination_slider li:nth-child(' + imgPos +')').css({'color': '#0c1873'});

            $('.slider li').hide(); // Ocultamos todos los slides
            $('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado
        }
    },

    mounted() {
        this.slider();
    },
}
</script>