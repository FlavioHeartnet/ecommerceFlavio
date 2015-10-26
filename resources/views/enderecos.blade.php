@extends('master')

@section('conteudo')

<section class="container">
    <div class="row space-top">

        <!--Items List-->
        <div class="col-md-9 space-bottom">
            <h2 class="title">My addresses</h2>
            <h3>Addresses list</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt<br>ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            <table class="address-list">
                <tbody>
                <tr>
                    <th scope="col">Address</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">&nbsp;</th>
                </tr>
                <tr>
                    <td>4120 Lenox Avenue, New York, NY,<br>10035 76 Saint Nicholas Avenue</td>
                    <td>Johnathan Doe</td>
                    <td class="hidden-xs">+480023456789</td>
                    <td>
                        <a class="icon-pencil" href="#"></a>
                        <a class="icon-delete" href="#"></a>
                    </td>
                </tr>
                <tr>
                    <td>4120 Lenox Avenue, New York, NY,<br>10035 76 Saint Nicholas Avenue</td>
                    <td>Johnathan Doe</td>
                    <td class="hidden-xs">+480023456789</td>
                    <td>
                        <a class="icon-pencil" href="#"></a>
                        <a class="icon-delete" href="#"></a>
                    </td>
                </tr>
                <tr>
                    <td>4120 Lenox Avenue, New York, NY,<br>10035 76 Saint Nicholas Avenue</td>
                    <td>Johnathan Doe</td>
                    <td class="hidden-xs">+480023456789</td>
                    <td>
                        <a class="icon-pencil" href="#"></a>
                        <a class="icon-delete" href="#"></a>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="row space-top">
                <div class="col-lg-4 col-md-5 col-sm-6">
                    <a class="btn btn-primary btn-sm btn-block" href="#">Add new address</a><br>
                    <a class="btn btn-success btn-sm btn-block" href="/userInfo">Back to Account</a>
                </div>
            </div>
        </div>

        <!--Sidebar-->
        @include('compras')
    </div>
</section>

@include('catalogo')

@stop