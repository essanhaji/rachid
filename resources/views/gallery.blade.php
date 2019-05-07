@extends('layouts.layoute')

@section('content')
        
        <!--  PAGE HEADING -->

        <section class="page-header" data-stellar-background-ratio="0.1">

            <div class="container">

              <div class="row">

                  <div class="col-sm-12 text-center">

                      <h3>
                         Gallerie
                      </h3>

                      <p class="page-breadcrumb">
                          <a href="{{ url('/') }}">Accueil</a> / Gallerie
                      </p>

                  </div>

             </div> <!-- end .row  -->

         </div> <!-- end .container  -->

      </section> <!-- end .page-header  -->

      <!--  MAIN CONTENT  -->

      <!--  GALLERY CONTENT  -->

      <section class="section-content-block no-bottom-padding">

            <div class="container wow fadeInUp">
                
                <div class="row section-heading-wrapper">

                    <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                        <h2 class="section-heading"><span>Les photos </span>du galerie</h2>
                        <p class="section-subheading">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A atque dolorem natus praesentium labore quae? Quae eos qui adipisci architecto.
                        </p>
                    </div> <!-- end .col-sm-10  -->

                </div> <!-- end .row  -->

            </div> <!--  end .container -->
            
            <div class="container-fluid wow fadeInUp">

                <div class="row no-padding-gallery">

                    <div class="col-md-3 col-sm-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_1.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_1.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-4  -->

                    <div class="col-md-3 col-sm-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_2.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_10.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a>

                    </div><!-- end .col-sm-4  -->

                    <div class="col-md-3 col-sm-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_1.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_11.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->
                    
                     <div class="col-md-3 col-sm-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_2.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_12.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a>

                    </div><!-- end .col-sm-4  -->
                    
                </div> <!-- end .row  -->
                    
                 <div class="row no-padding-gallery">

                    <div class="col-md-3 col-sm-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_1.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_12.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-4  -->

                    <div class="col-md-3 col-sm-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_2.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_13.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a>

                    </div><!-- end .col-sm-4  -->

                    <div class="col-md-3 col-sm-12 gallery-container">

                        <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_1.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_14.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a> <!-- end .gallery-light-box  -->

                    </div><!-- end .col-sm-3  -->
                    
                     <div class="col-md-3 col-sm-12 gallery-container">

                        <a class="gallery-light-box"  data-gall="myGallery" href="images/gallery_2.jpg">

                            <figure class="gallery-img">

                                <img src="images/gallery_15.jpg" alt="gallery image" />

                            </figure> <!-- end .cause-img  -->

                        </a>

                    </div><!-- end .col-sm-4  -->
                    
                </div> <!-- end .row  -->
                
            </div><!-- end .container-fluid  -->

        </section> <!-- end .section-content-block  -->

       
<section class="cta-section-3">

    <div class="container">

        <div class="row">

            <br>

        </div>  

    </div>

</section> <!-- end .cta-section-3  -->

        
@endsection