
@extends('layouts.layoute')

@section('content')


        <!--  PAGE HEADING -->

        <section class="page-header" data-stellar-background-ratio="0.1">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12 text-center">
                        <h3>
                            CONTACTEZ NOUS
                        </h3>

                        <p class="page-breadcrumb">
                            <a href="{{ url('/') }}">Accueil</a> / Contactez Nous
                        </p>


                    </div>

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section> <!-- end .page-header  -->



        <section class="section-content-block section-contact-block">

            <div class="container">

                <div class="row">

                    <div class="col-sm-6 wow fadeInLeft">

                        <div class="contact-form-block">

                            <h2 class="contact-title">Nous dire quelque chose</h2>

                            <form action="#" method="post" id="contact-form">
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Nom & Prénome" data-msg="S'il vous plaît écrivez votre Nom & Prénome" />
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email" data-msg="S'il vous plaît écrivez votre Email" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email_subject" name="email_subject" placeholder="Objet" data-msg="S'il vous plaît écrivez l'objet de votre message" />
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" rows="4" name="email_message" id="email_message" placeholder="Message" data-msg="S'il vous plaît écrivez votre Message" ></textarea>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-custom">Envoyer</button>
                                </div>

                            </form>

                        </div> <!-- end .contact-form-block  -->

                    </div> <!--  end col-sm-6  -->

                    <div class="col-sm-6 wow fadeInRight">

                        <div class="content-block">

                            <h2 class="contact-title">Contactez Nous</h2>

                            <ul class="contact-info">
                                <li>
                                    <span class="icon-container"><i class="fa fa-home"></i></span>
                                    <address>3100 C/A Mouchak,Sylhet,Bangladesh</address>
                                </li>
                                <li>
                                    <span class="icon-container"><i class="fa fa-phone"></i></span>
                                    <address><a href="#">+212 641966888</a></address>
                                </li>
                                <li>
                                    <span class="icon-container"><i class="fa fa-envelope"></i></span>
                                    <address><a href="mailto:">rachid@gmail.com</a></address>
                                </li>
                            </ul>

                            <h2 class="contact-title">Nous sommes social</h2>

                            <div class="social-icons margin-top-11 clearfix">
                                <a title="Tweet It" href="#" class="btn btn-social-icon btn-twitter petition_share">
                                    <i class="fa fa-twitter"></i>
                                </a>

                                <a title="Share at Facebook" href="#" class="btn btn-social-icon btn-facebook petition_share">
                                    <i class="fa fa-facebook"></i>
                                </a>

                                <a title="Share at Google+" href="#" class="btn btn-social-icon btn-goggle-plus petition_share">
                                    <i class="fa fa-google-plus"></i>
                                </a>

                                <a title="Share at instagram" href="#" class="btn btn-social-icon btn-instagram petition_share">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>

                        </div> <!-- end .content-block  -->

                    </div> <!--  end col-sm-6  -->

                </div> <!-- end row  -->

            </div> <!--  end .container -->

        </section> <!-- end .section-content-block  -->


        <!--  CTA SECTION  -->

        <section class="cta-section-3">

            <div class="container">

                <div class="row">

                    <br>

                </div>  

            </div>

        </section> <!-- end .cta-section-3  -->


    
@endsection