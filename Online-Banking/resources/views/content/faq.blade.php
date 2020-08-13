<?php
?>

@extends('layouts.default')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/faq.css')}}" media="all">
@endsection
@section('main')
    <section class = "intro col-xs-12 col-md-12">
        <div class = "container">
            <div class = "row">
                <div class = "intro-content col-xs-8 col-md-8">
                    <h1>Frequently Asked Questions</h1>
                    <h2>New to OnlineBanking and got questions? Hopefully we can answer them below!<br>
                        If you already have a OnlineBanking card, the Help tab in your app is the
                        best place to find answers.</h2>
                </div>
                <div class = "col-xs-4 col-md-4">

                </div>
            </div>
        </div>
    </section>

{{--    Web content--}}
    <section class = "body col-xs-12 col-md-12">
        <div class = "container col-xs-12 col-md-12">
            <div class = "row">
                <div class = "body-content col-xs-3 col-md-3" onclick="toggle_visibilitys('desc1');">
                    <h3>Is OnlineBanking a bank?</h3>
                    <p>Yes, "OnlineBanking Bank Ltd" is fully authorised in the UK by the...</p>
                </div>
                <div class = "col-xs-1 col-md-1"></div>
                <div class = "body-content col-xs-4 col-md-4" onclick="toggle_visibilitys('desc2');">
                    <h3>How do I get a OnlineBanking account?</h3>
                    <p>It's really easy! Just download the OnlineBanking app on either iOS...</p>
                </div>
                <div class = "col-xs-1 col-md-1"></div>
                <div class = "body-content col-xs-3 col-md-3" onclick="toggle_visibilitys('desc3');">
                    <h3>Is my money safe with OnlineBanking?</h3>
                    <p>Your money is fully protected by the Financial Services...</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class = "body-content-hidden col-xs-12 col-md-12" id="desc1" style="display: none;">
                <h3>Is OnlineBanking a bank?</h3>
                <p>Yes, "OnlineBankking Bank Ltd" is fully authorised in the UK by the
                    Prudential Regulation Authority (PRA) and regulated by the Financial Conduct
                    Authority and the PRA. Our Financial Services Register number is 730427.</p>
            </div>
            <div class = "body-content-hidden col-xs-12 col-md-12" id="desc2" style="display: none;">
                <h3>How do I get a OnlineBanking account?</h3>
                <p>It's really easy! Just download the OnlineBanking app on either <a href="#">iOS</a> or
                    <a href="#">Android</a>, sign up in just a few minutes and you're done.</p>
            </div>
            <div class = "body-content-hidden col-xs-12 col-md-12" id="desc3" style="display: none;">
                <h3>Is my money safe with OnlineBanking?</h3>
                <p>Your money is fully protected by the Financial Services Compensation Scheme (FSCS),
                    meaning that all your money up to £85,000 is guaranteed by the British Government.</p>
            </div>
        </div>
        <div class = "container col-xs-12 col-md-12">
            <div class = "row">
                <div class = "body-content col-xs-3 col-md-3" onclick="toggle_visibilitys('desc4');">
                    <h3>Do I need to be a UK resident?</h3>
                    <p>Yes, you currently need to be resident in the UK to get a...</p>
                </div>
                <div class = "col-xs-1 col-md-1"></div>
                <div class = "body-content col-xs-4 col-md-4" onclick="toggle_visibilitys('desc5');">
                    <h3>What age do I need to be?</h3>
                    <p>Currently, you must be 16 or older to get a OnlineBanking card....</p>
                </div>
                <div class = "col-xs-1 col-md-1"></div>
                <div class = "body-content col-xs-3 col-md-3" onclick="toggle_visibilitys('desc6');">
                    <h3>What fees do you charge?</h3>
                    <p>We don't charge any fees for using OnlineBanking day-to-day....</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class = "body-content-hidden col-xs-12 col-md-12" id="desc4" style="display: none;">
                <h3>Do I need to be a UK resident?</h3>
                <p>Yes, you currently need to be resident in the UK to get a OnlineBanking card.
                    We hope to launch internationally in the future though!</p>
            </div>
            <div class = "body-content-hidden col-xs-12 col-md-12" id="desc5" style="display: none;">
                <h3>What age do I need to be?</h3>
                <p>Currently, you must be 16 or older to get a OnlineBanking card.
                    We're hoping to lower this in the future!</p>
            </div>
            <div class = "body-content-hidden col-xs-12 col-md-12" id="desc6" style="display: none;">
                <h3>What fees do you charge?</h3>
                <p>We don't charge any fees for using OnlineBanking day-to-day.
                    Payments in the UK, cash withdrawals in the UK and payments abroad are all free, with no added fees.
                    If you're withdrawing cash abroad, withdrawals from an ATM are fee-free in the European Economic
                    Area (EEA). For other countries, you can take out £200 for free every 30 days. After that, we’ll
                    charge you 3%. You can see a full list of EEA countries <a href="#">here</a>.</p>
            </div>
            <button href ="#">View more...</button>
        </div>
    </section>

    <section class="strip">
        <div class="container text-center">
            <div class="row">
                <div class = "col-xs-2 col-md-2"></div>
                <div class = "col-xs-8 col-md-8" style="margin-top: 5rem;">
                    <p>If you're looking for our PS17/26, a <a href="#">document</a> from the Financial Conduct Authority with
                        information about our current account, you can <a href="#">find it here</a>.</p>
                    <p>If you're looking for information about the Payment Services Directive,
                        you can <a href="#">find it here</a>.</p>
                </div>
                <div class = "col-xs-2 col-md-2"></div>
            </div>
        </div>
        <div class="container">
            <div class="grid-row">
                <div class="col-xs-12 col-md-12 text-center">
                    <a href="mailto:help@onlinebanking.com" class="o-button-text u-width-full u-width-auto-md" target="_blank" rel="noopener noreferrer">
                        <span class="fa fa-envelope"></span>&nbsp;&nbsp;&nbsp;help@onlinebanking.com
                    </a>
                </div>
            </div>
            <div class="grid-row col-xs-12 col-md-12">
                <div class = "col-xs-3 col-md-3"></div>
                <div class="c-contact-table col-xs-6 col-md-6">
                    <table>
                        <thead>
                        <tr>
                            <th>Account type</th>
                            <th>From the UK</th>
                            <th>From abroad</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Current account</td>
                            <td>
                                <a href="tel:+448008021281" target="_blank" rel="noopener noreferrer">
                                    <i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;0800&nbsp;802&nbsp;1281
                                </a>
                            </td>
                            <td>
                                <a href="tel:+442038720620" target="_blank" rel="noopener noreferrer">
                                    <i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;+44&nbsp;20&nbsp;3872&nbsp;0620
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class = "col-xs-3 col-md-3"></div>
            </div>
            <div class="row" style="margin-bottom: 10rem">
                <div class = "col-xs-2 col-md-2"></div>
                <div class = "col-xs-8 col-md-8" style="margin-top: 5rem;">
                    <p class="text-center">The number and email address above are only for customer support queries
                        and we won't be able to help with other questions.</p>
                </div>
                <div class = "col-xs-2 col-md-2"></div>
        </div>
        </div>
    </section>

    <script type="text/javascript">
        function toggle_visibilitys(id) {
            var e = document.getElementById(id);
            var a1 = document.getElementById('desc1');
            var a2 = document.getElementById('desc2');
            var a3 = document.getElementById('desc3');
            var a4 = document.getElementById('desc4');
            var a5 = document.getElementById('desc5');
            var a6 = document.getElementById('desc6');

            switch (id) {
                case 'desc1':{
                    if(e.style.display === 'none'){
                        a2.style.display = 'none';
                        a3.style.display = 'none';
                        a4.style.display = 'none';
                        a5.style.display = 'none';
                        a6.style.display = 'none';

                        e.style.display = 'block';}
                    else {
                        e.style.display = 'none';
                    }
                };
                    break;
                case 'desc2':{
                    if(e.style.display === 'none'){
                        a1.style.display = 'none';
                        a3.style.display = 'none';
                        a4.style.display = 'none';
                        a5.style.display = 'none';
                        a6.style.display = 'none';

                        e.style.display = 'block';}
                    else {
                        e.style.display = 'none';
                    }
                };
                    break;
                case 'desc3':{
                    if(a3.style.display === 'none'){
                        a2.style.display = 'none';
                        a1.style.display = 'none';
                        a4.style.display = 'none';
                        a5.style.display = 'none';
                        a6.style.display = 'none';

                        a3.style.display = 'block';}
                    else {
                        a3.style.display = 'none';
                    }
                };
                    break;
                case 'desc4':{
                    if(a4.style.display === 'none'){
                        a2.style.display = 'none';
                        a1.style.display = 'none';
                        a3.style.display = 'none';
                        a5.style.display = 'none';
                        a6.style.display = 'none';

                        a4.style.display = 'block';}
                    else {
                        a4.style.display = 'none';
                    }
                };
                    break;
                case 'desc5':{
                    if(a5.style.display === 'none'){
                        a2.style.display = 'none';
                        a1.style.display = 'none';
                        a4.style.display = 'none';
                        a3.style.display = 'none';
                        a6.style.display = 'none';

                        a5.style.display = 'block';}
                    else {
                        a5.style.display = 'none';
                    }
                };
                    break;
                case 'desc6':{
                    if(a6.style.display === 'none'){
                        a2.style.display = 'none';
                        a1.style.display = 'none';
                        a4.style.display = 'none';
                        a5.style.display = 'none';
                        a3.style.display = 'none';

                        a6.style.display = 'block';}
                    else {
                        a6.style.display = 'none';
                    }
                };
                    break;
            }
        }
    </script>
@endsection