@extends('layouts.layoute')

@section('content')

<br>
<section class="section-quote-form">

    <div class="container">

        <div class="row">

            <div class="col-md-6">
                <div class="quote-form-block">

                    <div class="row">
                        <div class="col-md-11">
                            <h3 class="quote-title">Pour notre client</h3>
                            <p class="quote-sub">
                                Saisissez le numéro de reçu de votre commande de reparation pour voire plus d'information a propot de votre appareil :
                            </p>
                        </div>
                    </div>

                    <form action="#" method="post">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">Numéro de reçu :</div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control{{ $errors->has('num_recu') ? ' is-invalid' : '' }}" name="num_recu" placeholder="1234" required>

                                    @if ($errors->has('num_recu'))
                                    <span class="invalid-feedback" role="alert" style="color: red">
                                        <strong>{{ $errors->first('num_recu') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">*Date de dépot :</div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="date" class="form-control{{ $errors->has('date_depot') ? ' is-invalid' : '' }}" name="date_depot" placeholder="21/02-2019">
                                    @if ($errors->has('date_depot'))
                                    <span class="invalid-feedback" role="alert" style="color: red">
                                        <strong>{{ $errors->first('date_depot') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn quote-form-btn">Consultée</button>
                        </div>
                        <p class="form-group">
                            *&nbsp;:&nbsp;Optionnel
                        </p>
                    </form>

                </div> <!-- end .contact-form-block  -->
            </div>
            <div class="col-md-6">
                <div class="quote-form-block">


                    <div class="row">
                        <div class="col-md-11">
                            <h3 class="quote-title">Pour nous</h3>

                            <p class="quote-sub">
                                saisissez vos coordonnées d'authentification :
                            </p>

                        </div>
                    </div>

                    <br>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">Email :</div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="exemple@gmail.com" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert" style="color: red">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">Mot de passe :</div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="**************" name="password" value="{{ old('password') }}" required>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn quote-form-btn">S'identifier</button>
                        </div>

                    </form>

                </div> <!-- end .contact-form-block  -->
            </div> <!-- end .col-md-6 -->

        </div> <!-- end row  -->

    </div> <!-- end .container  -->

</section>



@endsection