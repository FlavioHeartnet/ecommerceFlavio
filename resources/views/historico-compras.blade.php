@extends('master')

@section('conteudo')

   <!--Breadcrumbs-->
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/dados">Account</a></li>
        <li>Orders History</li>
    </ol><!--Breadcrumbs Close-->

<section class="order-history extra-space-bottom">
        <div class="container">
            <h2 class="text-center-mobile">My orders history</h2>
            <div class="inner">
                <table>
                    <tbody>
                    <tr>
                        <th scope="col">Order ID <span class="toggles"><i class="fa fa-caret-up"></i><i class="fa fa-caret-down"></i></span></th>
                        <th scope="col">No. of items <span class="toggles"><i class="fa fa-caret-up"></i><i class="fa fa-caret-down"></i></span></th>
                        <th scope="col">Total price <span class="toggles"><i class="fa fa-caret-up"></i><i class="fa fa-caret-down"></i></span></th>
                        <th scope="col">Date <span class="toggles"><i class="fa fa-caret-up"></i><i class="fa fa-caret-down"></i></span></th>
                        <th scope="col">Payment method <span class="toggles"><i class="fa fa-caret-up"></i><i class="fa fa-caret-down"></i></span></th>
                        <th scope="col">Order status <span class="toggles"><i class="fa fa-caret-up"></i><i class="fa fa-caret-down"></i></span></th>
                    </tr>
                    <tr>
                        <td class="bold">#OH746</td>
                        <td>5</td>
                        <td class="bold">715,00 $</td>
                        <td>13 Jun 2013</td>
                        <td>PayPal</td>
                        <td class="status primary"><span>Done</span></td>
                    </tr>
                    <tr>
                        <td class="bold">#MS2853</td>
                        <td>5</td>
                        <td class="bold">920,00 $</td>
                        <td>08 Aug 2014</td>
                        <td>Payoneer</td>
                        <td class="status warning"><span>Processing</span></td>
                    </tr>
                    <tr>
                        <td class="bold">#LBN305</td>
                        <td>5</td>
                        <td class="bold">110,00 $</td>
                        <td>12 Sep 2014</td>
                        <td>Payoneer</td>
                        <td class="status danger"><span>Canceled</span></td>
                    </tr>
                    <tr>
                        <td class="bold">#BS910</td>
                        <td>5</td>
                        <td class="bold">245,00 $</td>
                        <td>28 Sep 2014</td>
                        <td>Wire Transfer</td>
                        <td class="status primary"><span>Done</span></td>
                    </tr>
                    <tr>
                        <td class="bold">#OH576</td>
                        <td>5</td>
                        <td class="bold">830,00 $</td>
                        <td>01 Oct 2014</td>
                        <td>PayPal</td>
                        <td class="status primary"><span>Done</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@stop