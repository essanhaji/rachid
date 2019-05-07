@extends('layouts.layoute')

@section('content')

        <!--  PAGE HEADING -->

        <section class="page-header">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">

                        <h3>
                            À propos
                        </h3>

                        <p class="page-breadcrumb">
                            <a href="{{ url('/') }}">Accueil</a> / À propos
                        </p>

                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section> <!-- end .page-header  -->
		
		<!--  ABOUT SECTION 2 -->

        <section class="section-content-block about-section2">

            <div class="container wow fadeInUp">

                <div class="row section-heading-wrapper">
                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">À propos de Restore</h2>
                        <p class="section-subheading">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam
                        </p>
                    </div> <!-- end .col-sm-10  -->
                </div> <!--  end .row  -->
				
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 wow fadeInUp" >
                        <div class="about-image2 text-center">
                        <img class="img-responsive" src="images/about21.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-12 wow fadeInUp margin-top-40">
                        <div class="row">
                            <div class="col-md-6 text-right">
                                <h3 class="sub-heading">QUI NOUS SOMMES</h3>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id pellentesque quam, at gravida neque. Duis dignissim, lacus ac porttitor varius, dolor lorem dictum urna, neque ligula sed nunc. Duis dignissim, lacus ac porttitor varius, dolor lorem dictum urna, neque ligula sed nunc.
                            </div>
                            <div class="col-md-6 text-left">
                                <h3 class="sub-heading">Pourquoi nous choisir</h3>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id pellentesque quam, at gravida neque. Duis dignissim, lacus ac porttitor varius, dolor lorem dictum urna, neque ligula sed nunc. Duis dignissim, lacus ac porttitor varius, dolor lorem dictum urna, neque ligula sed nunc.
                            </div>
                        </div>
                    </div>
                </div> <!--  end .row  -->


            </div> <!--  end .container  -->

        </section> <!--  end .about-section -->

        <!-- TEAM SECTION 2 -->

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
        


<section class="cta-section-3">

    <div class="container">

        <div class="row">

            <br>

        </div>  

    </div>

</section> <!-- end .cta-section-3  -->


@endsection