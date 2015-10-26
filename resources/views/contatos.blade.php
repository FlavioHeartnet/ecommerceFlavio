@extends('master')

@section('conteudo')

<ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li>Contacts</li>
    </ol>

    <div class="container"><h2>Contatos</h2></div>

    <section class="map container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11365119.183662498!2d26.671722792891288!3d45.93754926598604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1403521777633" width="800" height="400" style="border:0"></iframe>
        </section><!--Google Map Close-->

        <section class="container">
                <div class="row">
                    <!--Contact Info-->
                    <div class="col-lg-5 col-lg-offset-1 col-md-5 col-sm-5">
                        <h3>Informações de contato</h3>
                        <div class="cont-info-widget">
                            <ul>
                                <li><i class="fa fa-building"></i>São Paulo, São José dos Campos,<br/>10035 76 Rua.Francisco</li>
                                <li><a href="#"><i class="fa fa-envelope"></i>SuporteMinhaLoja</a></li>
                                <li><a href="#"><i class="fa fa-support"></i>Flavio@minhaLoja.com</a></li>
                                <li><i class="fa fa-phone"></i>+48 543765234</li>
                                <li><i class="fa fa-mobile"></i>+48 555 234 54 34</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-7">
                        <h3>Tire suas duvidas</h3>
                        <form class="contact-form ajax-form" method="post">
                            <div class="form-group">
                                <label class="sr-only" for="cf-name">Name</label>
                                <input type="text" class="form-control" name="name" id="cf-name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="cf-email">Email</label>
                                <input type="email" class="form-control" name="email" id="cf-email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="cf-message">Message</label>
                                <textarea class="form-control" name="message" id="cf-message" rows="5" placeholder="Your message"></textarea>
                            </div>
                            <!-- Validation Response -->
                            <div class="response-holder"></div>
                            <!-- Response End -->
                            <input class="btn btn-primary" type="submit" value="Send message">
                        </form>
                    </div>
                </div>
            </section>

@stop