@extends('layouts.layoute')

@section('content')

        <!--  HOME SLIDER BLOCK  -->
        
        <!-- slider start -->
        <div class="slider-wrap">
            <div id="slider_1" class="owl-carousel owl-theme">
                
                <div class="item">
                    <img src="images/home_1_slider_1.jpg" alt="img">
                    <div class="slider-content">
                        <div class="container">
                            <h2>Réparation rapide</h2>
                            <p>Envoyez simplement votre précieux ordinateur portable, votre PC, votre mobile, votre appareil de jeu ou votre smartphone et nous nous en occupons</p>
                            <p>Nous serons heureux de vous servir au mieux, gardez simplement confiance en nous</p>
                            <a href="{{ url('/commencer') }}" class="btn btn-slider">COMMENCER</a>
                            <a href="{{ url('/about-us') }}" class="btn btn-slider-2">APPRENDRE ENCORE PLUS</a>
                        </div><!-- /.slider-content -->
                    </div>
                </div>
                
                <div class="item">
                    <img src="images/home_1_slider_2.jpg" alt="img">
                    <div class="slider-content">
                        <div class="container">
                            <h2>Réparation complet</h2>
                            <p>Envoyez simplement votre précieux ordinateur portable, votre PC, votre mobile, votre appareil de jeu ou votre smartphone et nous nous en occupons</p>
                            <p>Nous serons heureux de vous servir au mieux, gardez simplement confiance en nous</p>
                            <a href="{{ url('/commencer') }}" class="btn btn-slider">COMMENCER</a>
                            <a href="{{ url('/about-us') }}" class="btn btn-slider-2">APPRENDRE ENCORE PLUS</a>
                        </div><!-- /.slider-content -->
                    </div>
                </div>
                
                
            </div>
        </div>
        <!-- slider end -->
        
        <!--  HOME HIGHLIGHTS SECTION 1 -->

        <section class="section-content-block section-home-highlights">

            <div class="container wow fadeInUp">

                <div class="row section-heading-wrapper">
                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">Nos services de réparation</h2>
                        <p class="section-subheading">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur eu ante non ex lobortis posuere volutpat nec orci morbi facilisis massa lectus volutpat posuere volutpat
                        </p>
                    </div> <!-- end .col-sm-10  -->
                </div> <!--  end .row  -->
				
                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="highlight-block xs-margin margin-bottom-20">
                            <div class="highlight-block-inner">
                                <i class="fa fa-desktop" aria-hidden="true"></i>
                                <h5>réparation des Ordinateur</h5>
                                <p>Quisque imperdiet porta imperdiet. Nam venenatis pulvinar quam, et vulputate libero mattis.</p>
                                <a class="bg_1" href="{{ url('/service') }}"> <i class="fa fa-arrow-right"></i></a>
                            </div> <!--  end .main_highlights  -->
                        </div> <!--  end .main_highlights  -->
                    </div> <!--  end .col-md-3  -->

                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="highlight-block xs-margin margin-bottom-20">
                            <div class="highlight-block-inner">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                                <h5>Réparation des pc portable</h5>
                                <p>Quisque imperdiet porta imperdiet. Nam venenatis pulvinar quam, et vulputate libero mattis.</p>
                                <a class="bg_1" href="{{ url('/service') }}"> <i class="fa fa-arrow-right"></i></a>
                            </div> <!--  end .main_highlights  -->
                        </div> <!--  end .main_highlights  -->
                    </div> <!--  end .col-md-3  -->

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="highlight-block xs-margin">
                            <div class="highlight-block-inner">
                                <i class="fa fa-tablet" aria-hidden="true"></i>
                                <h5>Réparation des Tablets</h5>
                                <p>Quisque imperdiet porta imperdiet. Nam venenatis pulvinar quam, et vulputate libero mattis.</p>
                                <a class="bg_1" href="{{ url('/service') }}"> <i class="fa fa-arrow-right"></i></a>
                            </div> <!--  end .main_highlights  -->
                        </div> <!--  end .main_highlights  -->
                    </div> <!--  end .col-md-3  -->
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="highlight-block xs-margin margin-bottom-20">
                            <div class="highlight-block-inner">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                <h5>réparation des mobiles</h5>
                                <p>Quisque imperdiet porta imperdiet. Nam venenatis pulvinar quam, et vulputate libero mattis.</p>
                                <a class="bg_1" href="{{ url('/service') }}"> <i class="fa fa-arrow-right"></i></a>
                            </div> <!--  end .main_highlights  -->
                        </div> <!--  end .main_highlights  -->
                    </div> <!--  end .col-md-3  -->
                    
                </div> <!--  end .row  -->


            </div> <!--  end .container  -->

        </section> <!--  end our-services -->
        
        
        <!--  PROCESS SECTION  -->

        <section class="section-content-block section-process">

            <div class="container wow fadeInUp">
                
                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading section-heading-alt">Notre processus</h2>
                         <p class="section-subheading section-subheading-alt">
                            Un moyen simple et efficace de réparer votre appareil
                        </p>
                    </div> <!-- end .col-sm-10  -->

                </div> <!-- end .row  -->

                <div class="row">
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        
                        <div class="process-holder xs-margin" >
                            <h3>
                              <span class="heading-numbers">1</span>
                              DISPOSITIF DE<br>DOMMAGE
                            </h3>
                            <p>Juste détendu quand votre appareil a besoin d'être réparé et pas de panique</p>
                        </div>
                        
                    </div> <!--  end col-sm-3  -->
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        
                        <div class="process-holder xs-margin" >
                            <h3>
                              <span class="heading-numbers">2</span>
                              ENVOIE LES<br>À NOUS
                            </h3>
                            <p>Envoyez-nous l'appareil dont vous avez besoin d'être réparé et restez détendu</p>
                        </div>
                        
                    </div> <!--  end col-sm-3  -->
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        
                        <div class="process-holder xs-margin" >
                            <h3>
                              <span class="heading-numbers">3</span>
                              VITE de<br>RÉPARER
                            </h3>
                            <p>Nous allons nous en occuper et travailler avec elle pour la réparer avec précision</p>
                        </div>
                        
                    </div> <!--  end col-sm-3  -->
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        
                        <div class="process-holder xs-margin" >
                            <h3>
                              <span class="heading-numbers">4</span>
                              retour<br>rapide
                            </h3>
                            <p>Après une solution rapide, nous revenons à vous rapidement et en toute sécurité</p>
                        </div>
                        
                    </div> <!--  end col-sm-3  -->

                </div> <!-- end row  -->

            </div> <!--  end .container  -->

        </section> <!--  end .section-process -->
        
        <!-- QUOTE FORM SECTION  -->

        
       <!--  ABOUT SECTION 1 -->

        <section class="section-content-block about-section">

            <div class="container">
                
                <div class="row">
                    <div class="col-md-6" >
                        <div class="about-image">
                        <img class="img-responsive" src="images/about.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-details" >
                            <h3>
                            <span class="number-years">11</span>
                            ANS D'EXPÉRIENCE EN NUMÉRIQUE<br>SERVICES DE RÉPARATION DE DISPOSITIF
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel fringila. Cras vulputate orci in velit bibendum malesuada. Cras convallis, elit fermentum pellentesque, erat eros feugiat libero, accumsan vestibulum urna augue non purus sagittis ac tortor et nulla varius.</p>
                            <p>Maecenas at nisl egestas diam rhoncus sagittis ac sit amet elit. Aliquam velit sem, aliquet nec ante nec, sagittis posuere libero. Etiam molestie at nulla nec ultrices morbi metus ante auctor.</p>
                            <div class="quote-block">
                                <h5>Appelez nous</h5>
                                <div class="phone-number"><i class="fa fa-phone"></i> 0641966888</div>
                                <div class="available-time"><span>24/7</span> Lun - Sam</div>
                            </div>
                        </div>
                    </div>
                </div> <!--  end .row  -->


            </div> <!--  end .container  -->

        </section> <!--  end .about-section -->
        
        
        <!--  COUNTER SECTION  -->

        <section class="section-content-block section-counter">

            <div class="container">
                
                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading section-heading-alt">Nos statistiques</h2>
                         <p class="section-subheading section-subheading-alt">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit curabitur eu ante non ex lobortis posuere volutpat nec orci morbi facilisis massa lectus volutpat posuere volutpat 
                        </p>
                    </div> <!-- end .col-sm-10  -->

                </div> <!-- end .row  -->

                <div class="row">
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="counter-block-1 xs-margin">
                            <span class="counter">30</span>
                            <h4>Réparer <span>Actuellement</span></h4>     
                        </div>
                    </div> <!--  end col-md-3  -->
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="counter-block-1 xs-margin">
                            <span class="counter">325</span>
                            <h4>Clients <span>Satisfait</span></h4>     
                        </div>
                    </div> <!--  end col-md-3  -->
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="counter-block-1 xs-margin">
                            <span class="counter">11</span>
                            <h4>Années <span>D'expérience</span></h4>     
                        </div>
                    </div> <!--  end col-md-3  -->
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="counter-block-1 xs-margin">
                            <span class="counter">575</span>
                            <h4>Appareils <span>Réparés</span></h4>     
                        </div>
                    </div> <!--  end col-md-3  -->

                </div> <!-- end row  -->

            </div> <!--  end .container  -->

        </section> <!--  end .section-counter -->
		


        <section class="section-client-testimonial">

            <div class="container wow fadeInUp">

                <div class="row">
                    <div class="col-md-6">
                        <div class="row testimonial-text"> 
                            
                            <h3 class="text-center">L'avis de nos clients <br/>à propos de nous</h3>
                            <div class="testimonial-container text-center">   
                                
                                    <div class="col-md-12 col-sm-12">

                                        <div class="testimony-layout-1">

                                            <p>
                                                Lorem ipsum dolor sit amet diam brute integre eapri. Per fugitzril apeirian cumea eaap pareat euripidi utmel graeci doming. Duo dicat apeirian facilisi ne Per fugitzril apeirian cumea eaap pareat.
                                            </p>

                                            <h6>ESSANHAJI EL HOUCINE</h6>

                                        </div> <!-- end .testimony-layout-1  -->

                                    </div> <!--  end col-sm-12  -->

                                    <div class="col-md-12 col-sm-12">

                                        <div class="testimony-layout-1">

                                            <p>
                                                Lorem ipsum dolor sit amet diam brute integre eapri. Per fugitzril apeirian cumea eaap pareat euripidi utmel graeci doming. Duo dicat apeirian facilisi ne Per fugitzril apeirian cumea eaap pareat.
                                            </p>


                                            <h6>ESSANHAJI EL HOUCINE</h6>

                                        </div> <!-- end .testimony-layout-1  -->

                                    </div> <!--  end col-sm-12  -->

                                    <div class="col-md-12 col-sm-12">

                                        <div class="testimony-layout-1">

                                            <p>
                                                Lorem ipsum dolor sit amet diam brute integre eapri. Per fugitzril apeirian cumea eaap pareat euripidi utmel graeci doming. Duo dicat apeirian facilisi ne Per fugitzril apeirian cumea eaap pareat.
                                            </p>


                                            <h6>ESSANHAJI EL HOUCINE</h6>

                                        </div> <!-- end .testimony-layout-1  -->

                                    </div> <!--  end col-sm-12  -->


                            </div> <!-- end .testimonial-container  -->
                        </div>
                    </div> <!-- end .col-md-6 -->
                    
                    <div class="col-md-6">
                        <div class="testimonial-image">
                            <img src="images/client-image.jpg" alt="Client">
                        </div> 
                    </div>
                    
                </div> <!-- end row  -->

            </div> <!-- end .container  -->

        </section> <!--  end .section-client-testimonial -->


        <!--  CTA SECTION  -->

        <section class="cta-section-3">

            <div class="container">

                <div class="row">

                    <br>

                </div>  

            </div>

        </section> <!-- end .cta-section-3  -->

@endsection