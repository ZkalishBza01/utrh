<template>
    <div>
        
        <vue-element-loading :active="cargando" spinner="ring" color="#3fb984" size="100" :is-full-screen="true"/>
        <div class="d-flex justify-content-center">
            <div id="contacto" class="col-md-4 text-center mt-5 mb-5 pl-0 pr-0"> <h1 class="mt-0 mb-0 pt-0 pb-0 font-weight-bold Montserrat_Bold">Contacto</h1> </div>
        </div>

        <form >
            <div class="row">
                
                <div class="col-md-6 mt-3">
                    <div class="col-md-12">
                        <label class="col-form-label">Nombre completo <span class="text-danger">*</span></label>
                        <input type="text" maxlength="120" class="form-control"/>
                        <has-error :form="datosAGuardarContacto" field="nombreCompleto"></has-error>
                     </div>

                    <div class="col-md-12">
                        <label class="col-form-label">Correo electrónico <span class="text-danger">*</span></label>
                      <input type="email" id="email" class="form-control" placeholder="Email Address">
                   </div>

                    <div class="col-md-12">
                        <label class="col-form-label">Teléfono <span class="text-danger">*</span></label>
                       
                    </div>

                    <div class="col-md-12">
                        <label class="col-form-label">Mensaje <span class="text-danger">*</span></label>
                       
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success mt-3">Enviar mensaje</button>
                    </div>
                </div>

                <div class="col-md-6 mt-3">
                    <div class="card text-center">
                        <div class="card-header font-weight-bold"><h5><b>Datos de contacto</b></h5></div>
                        <div class="card-body">
                            <div class="slideshow">
                                <ul class="slider2 pr-0 pl-0 mb-0">
                                    <li>
                                        <img src="images/CaminoC.webp"  class="card-img-bottom rounded" alt="Oficinas matriz">
                                        <section class="caption">
                                            <div class="text-center Montserrat_Light">
                                                <span class="font-weight-bold">Oficina matriz<br></span>
                                                <span class="">Camino al Cerrito Colorado #4.<br></span>
                                                <span class="">San Agustín, Tlajomulco de Zúñiga, Jalisco.<br></span>
                                                <span class="slider_Desaparece_900">C.P 45645.<br></span>
                                                <span>Tel. 52 (33) 3882 2000</span>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <img src="images/Federalismo.webp"  class="card-img-bottom rounded" alt="Oficina Guadalajara">
                                        <section class="caption">
                                            <div class="text-center Montserrat_Light">
                                                <span class="font-weight-bold">Oficina Guadalajara<br></span>
                                                <span class="">AV. Federalismo Sur #710.<br></span>
                                                <span class="">Niños Héroes.<br></span>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <img src="images/SantaFe.webp"  class="card-img-bottom rounded" alt="Oficina Santa F">
                                        <section class="caption">
                                            <div class="text-center Montserrat_Light">
                                                <span class="font-weight-bold">Oficina Santa Fe<br></span>
                                                <span class="">AV. Américas #155 local 5.<br></span>
                                                <span class="">BLV. Tegucigalpa y Colón.<br></span>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <img src="images/Oblatos.webp"  class="card-img-bottom rounded" alt="Oficina Oblatos">
                                        <section class="caption">
                                            <div class="text-center Montserrat_Light">
                                                <span class="font-weight-bold">Oficina Oblatos<br></span>
                                                <span class="">AV. Circunvalación Oblatos 2293 local 28-B.<br></span>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <img src="images/Zapopan.webp"  class="card-img-bottom rounded" alt="Oficina Zapopan">
                                        <section class="caption">
                                            <div class="text-center Montserrat_Light">
                                                <span class="font-weight-bold">Oficina Zapopan<br></span>
                                                <span class="">AV. Juan Pablo II #588 local C.<br></span>
                                                <span class="">Francisco Sarabia.<br></span>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <img src="images/Tala.webp"  class="card-img-bottom rounded" alt="Oficina Tala">
                                        <section class="caption">
                                            <div class="text-center Montserrat_Light">
                                                <span class="font-weight-bold">Oficina Tala<br></span>
                                                <span class="">Donato Guerra 97.<br></span>
                                                <span class="">Javier Mina.<br></span>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <img src="images/Ameca.webp"  class="card-img-bottom rounded" alt="Oficina Ameca">
                                        <section class="caption">
                                            <div class="text-center Montserrat_Light">
                                                <span class="font-weight-bold">Oficina Ameca<br></span>
                                                <span class="">20 de Noviembre 8 A.<br></span>
                                                <span class="">Juárez.<br></span>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <img src="images/Magdalena.webp"  class="card-img-bottom rounded" alt="Oficina Magdalena">
                                        <section class="caption">
                                            <div class="text-center Montserrat_Light">
                                                <span class="font-weight-bold">Oficina Magdalena<br></span>
                                                <span class="">Calle Iturbide 116.<br></span>
                                                <span class="">Calle Xochiltepec.<br></span>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <img src="images/Acatlan.webp"  class="card-img-bottom rounded" alt="Oficina Acatlán">
                                        <section class="caption">
                                            <div class="text-center Montserrat_Light">
                                                <span class="font-weight-bold">Oficina Acatlán<br></span>
                                                <span class="">Núñez Morquecho 91 A.<br></span>
                                                <span class="">Cuauhtémoc.<br></span>
                                            </div>
                                        </section>
                                    </li>
                                    <li>
                                        <img src="images/Mty.webp"  class="card-img-bottom rounded" alt="Oficina Monterrey">
                                        <section class="caption">
                                            <div class="text-center Montserrat_Light">
                                                <span class="font-weight-bold">Oficina Monterrey<br></span>
                                                <span class="">Pino Suárez 352, Centro, 64000 Monterrey N.L.<br></span>
                                                <span class="">Manuel María del Llano y Albino Espinosa.<br></span>
                                            </div>
                                        </section>
                                    </li>
                                </ul>

                                <ol class="pagination_slider2 pr-0 pl-0">
                                    <li v-on:click="pagination2(1)"><span class="fa fa-circle"></span></li>    
                                    <li v-on:click="pagination2(2)"><span class="fa fa-circle"></span></li> 
                                    <li v-on:click="pagination2(3)"><span class="fa fa-circle"></span></li> 
                                    <li v-on:click="pagination2(4)"><span class="fa fa-circle"></span></li> 
                                    <li v-on:click="pagination2(5)"><span class="fa fa-circle"></span></li> 
                                    <li v-on:click="pagination2(6)"><span class="fa fa-circle"></span></li> 
                                    <li v-on:click="pagination2(7)"><span class="fa fa-circle"></span></li> 
                                    <li v-on:click="pagination2(8)"><span class="fa fa-circle"></span></li> 
                                    <li v-on:click="pagination2(9)"><span class="fa fa-circle"></span></li> 
                                    <li v-on:click="pagination2(10)"><span class="fa fa-circle"></span></li> 
                                </ol>
                                <div class="left_slider2"> <span class="fa fa-chevron-left"></span> </div>
                                <div class="right_slider2"> <span class="fa fa-chevron-right"></span> </div>
                            </div>
                            
                            <!-- <hr class="mb-2 mt-sm-2 mt-0"> -->
                            
                        </div>
                        <div class="card-footer">
                            <span>Síguenos en nuestras redes sociales</span> 
                            <div class='mt-2 demopadding d-flex justify-content-center'>
                                <a href="https://www.facebook.com/escarhmx/" target="_blank">
                                    <div class='icon social social2 fb'> <i class='fab fa-facebook-f'></i> </div>
                                </a>
                                <a href="https://www.instagram.com/escarhmx/" target="_blank">
                                    <div class='icon social social2 ins'> <i class='fab fa-instagram'></i> </div>
                                </a>
                                <a href="https://twitter.com/escarhmx" target="_blank">
                                    <div class='icon social social2 tw'> <i class='fab fa-twitter'></i> </div>
                                </a>
                                <a href="https://mx.linkedin.com/company/escarh-s-c-" target="_blank">
                                    <div class='icon social social2 in'> <i class='fab fa-linkedin-in'></i> </div>
                                </a>
                            </div> 
                        </div>
                    </div>
                </div>
                
            </div>
        </form>

    </div>
</template>

<script>/*
var imgItems2 = 0; // Numero de Slides
var	imgPos2 = 0;
var timer2;

let mensajeEnPantalla = '';
import {mostrarMensajeErrorCatch, mostrarMensajeExitoso, mostrarMensajeError} from '../../mixins/mensajes'

export default {
    data() {
        return {
            datosAGuardarContacto: new Form({
                id: '',
                nombreCompleto:    '',
                correo:   '',
                numeroTelefono:   '',
                mensaje:   '',
            }),
        }
    },

    computed: {
        ...mapState([ 'cargando' ])
    },

    methods: {
        ...mapMutations([ 'setearCargando' ]),

        guardarDatos(){
            this.setearCargando(true);
            this.datosAGuardarContacto.post('/guardar/DatosContacto')
                .then(response => {
                    this.validarPeticion(response, mensajeEnPantalla = 'guardaron');
                    this.setearCargando(false);
                })
                .catch(error => {
                    mostrarMensajeErrorCatch(mensajeEnPantalla = 'Los datos no se guardaron');
                    this.setearCargando(false);
                });
        },

        validarPeticion(response, mensajeEnPantalla){
            if(response.data.success == true){
                mostrarMensajeExitoso(mensajeEnPantalla);
                this.datosAGuardarContacto.reset();
            }else{
                mostrarMensajeError(mensajeEnPantalla);
            }
        },

        slider2(){
            imgItems2 = $('.slider2 li').length; // Numero de Slides
            imgPos2 = 1;

            $('.slider2 li').hide(); // Ocultanos todos los slides
            $('.slider2 li:first').show(); // Mostramos el primer slide
            $('.pagination_slider2 li:first').css({'color': '#0c1873'}); // Damos estilos al primer item de la paginacion

            // Ejecutamos todas las funciones
            $('.right_slider2').click(this.nextSlider2);
            $('.left_slider2').click(this.prevSlider2);

            this.myTimer2(3);
        },

        myTimer2(sec) {
            if (timer2) clearInterval(timer2);
            timer2 = setInterval(()=> { 
                sec--;
                if (sec == -1) {
                    clearInterval(timer2);
                    this.nextSlider2();
                } 
            }, 1000);
        },

        pagination2(index){
            this.myTimer2(3);
            var paginationPos = index; // Posicion de la paginacion seleccionada

            $('.slider2 li').hide(); // Ocultamos todos los slides
            $('.slider2 li:nth-child('+ paginationPos +')').fadeIn(); // Mostramos el Slide seleccionado
            

            // Dandole estilos a la paginacion seleccionada
            $('.pagination_slider2 li').css({'color': '#858585'});
            // $(this).css({'color': '#0c1873'});
            $('.pagination_slider2 li:nth-child(' + paginationPos +')').css({'color': '#0c1873'});

            imgPos2 = paginationPos;
        },

        nextSlider2(){
            this.myTimer2(3);
            if( imgPos2 >= imgItems2){imgPos2 = 1;} 
            else {imgPos2++;}

            $('.pagination_slider2 li').css({'color': '#858585'});
            $('.pagination_slider2 li:nth-child(' + imgPos2 +')').css({'color': '#0c1873'});

            $('.slider2 li').hide(); // Ocultamos todos los slides
            $('.slider2 li:nth-child('+ imgPos2 +')').fadeIn(); // Mostramos el Slide seleccionado
        },

        prevSlider2(){
            this.myTimer2(3);
            if( imgPos2 <= 1){imgPos2 = imgItems2;} 
            else {imgPos2--;}

            $('.pagination_slider2 li').css({'color': '#858585'});
            $('.pagination_slider2 li:nth-child(' + imgPos2 +')').css({'color': '#0c1873'});

            $('.slider2 li').hide(); // Ocultamos todos los slides
            $('.slider2 li:nth-child('+ imgPos2 +')').fadeIn(); // Mostramos el Slide seleccionado
        }
    },

    mounted() {
        this.setearCargando(false);
        this.slider2();
    },
}*/
</script>