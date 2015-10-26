@extends('master')

@section('conteudo')

<ol class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li>Seus dados</li>
</ol>

<section>
    <div class="container">
        <div class="row space-top">

            <!--Items List-->
            <div class="col-sm-8 space-bottom">
                <h2 class="title">My account</h2>
                <ul class="list-unstyled space-bottom">
                    <li><a class="large" href="account-addresses.html">My addresses</a></li>
                    <li><a class="large" href="order-history.html">Order history</a></li>
                    <li><a class="large" href="wishlist.html">My wishlist</a></li>
                </ul>
                <h3>Personal information</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                <div class="row">
                    <form class="col-md-12 personal-info" method="post">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="api_first_name">First name</label>
                                <input type="text" class="form-control" name="api_first_name" id="api_first_name" placeholder="First name" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="api_last_name">Last name</label>
                                <input type="text" class="form-control" name="api_last_name" id="api_last_name" placeholder="Last name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="api_email">Email</label>
                                <input type="email" class="form-control" name="api_email" id="api_email" placeholder="Email" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="api_phone">Phone</label>
                                <input type="text" class="form-control" name="api_phone" id="api_phone" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="api_password">Password</label>
                                <input type="password" class="form-control" name="api_password" id="api_password" placeholder="Password" required>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="api_conf_password">Confirm password</label>
                                <input type="password" class="form-control" name="api_conf_password" id="api_conf_password" placeholder="Confirm password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox custom">
                                <label>
                                    <input type="checkbox">Sign up for our newsletter!
                                </label>
                            </div>
                            <div class="checkbox custom">
                                <label>
                                    <input type="checkbox">Receive special offers from our us.
                                </label>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-success" value="Save changes">
                    </form>
                </div>
            </div>

            <!--Sidebar-->
            @include('compras')
        </div>
    </div>
</section>

@include('catalogo')

@stop