@extends('front.layout.master')

@section('title','Result')

@section('body')
    <!--Breadcrumb Begin-->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./index"><i class="fa fa-home">Home</i></a>
                        <a href="./checkout">Check out</a>
                        <span>Result</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb End-->


    <!--Section Begin-->
    <div class="checkout-section spad">
        <div class="container">
            <div class="col-lg-12">
              <h4>  {{$notification}} </h4>
                <a href="./" class="primary-btn mt-5"> Continue Shopping </a>
            </div>
        </div>
    </div>
    <!-- Section End-->
@endsection




