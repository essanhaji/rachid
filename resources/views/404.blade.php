@extends('layouts.layoute')

@section('content')

    <!--  PAGE HEADING -->

    <section class="page-header" data-stellar-background-ratio="0.1">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">


                    <h3>
                        404 Page
                    </h3>

                    <p class="page-breadcrumb">
                        <i class="fa fa-angle-double-left"></i> <a href="#">Back To Home</a>
                    </p>


                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

       <!--  MAIN CONTENT  -->
       
       <section class="section-content-block section-404">

           <div class="container">

               <div class="row">

                   <div class="col-sm-12 message-container-404">

                       <div class="text-404">
                           4<span class="light-color">0</span>4
                       </div> 
                       
                       <p class="message-text-404">
                           Sorry but we couldn't find the page you are looking for. Please check to make sure you've typed the URL correctly.
                       </p> <!-- end 404-message-text  -->

                       <div class="search-form-404">
                           <form action="https://templates.bwlthemes.com/restore/index.html" id="search-form" class="search-form" method="get">

                               <div class="input-group">
                                   <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                   <input type="text" class="form-control" placeholder="Search....">
                               </div>

                               <input type="hidden" value="submit" />

                           </form> <!-- end #search-form  -->
                       </div> <!-- end .search-form-404  -->

                       


                   </div> <!--  end col-sm-12  -->

               </div> <!-- end row  -->

           </div> <!--  end container -->

       </section> <!-- end .main-content  -->
       
        <!--  CTA SECTION  -->

        <section class="cta-section-3">

            <div class="container">

                <div class="row">

                    <div class="col-md-10 col-sm-12 wow fadeInLeft">
                        <h2>Do you have any question? Feel free to request for a quote</h2>
                    </div>
                    
                    <div class="col-md-2 col-sm-12 wow fadeInRight">
                        <a href="#" class="btn">REQUEST FOR QUOTE</a>
                    </div>

                </div>  

            </div>

        </section> <!-- end .cta-section-3  -->
        

@endsection