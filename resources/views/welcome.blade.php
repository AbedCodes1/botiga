@extends('layouts.layout')

@include('includes/header')

<div id="banner" class="banner relative">
    <img src="{{asset('images/home-banner.webp')}}" />
    <div class="absolute left-center">
        <div class="container">
            <h1 class="primary-title">Headline that grabs <br /> people’s attention</h1>
            <a href="#" class="shop-now-btn">Shop Now</a>
        </div>
    </div>
</div>

<div class="collection">
    <div class="container">
        <div class="text-center secondary-title">Featured Collection</div>
        <div class="subtitle text-center">A powerful headline about your product’s features to give focus to your chosen product collection</div>
        <div class="products flex flex-row flex-row-3 justify-between">
            <div class="product">
                <div class="product-image">
                    <img src="{{asset('/images/products/product-1.webp')}}" alt="">
                </div>
                <div class="product-name text-center">
                    Eternal Sunset Collection Lip and Cheek
                </div>
                <div class="product-price text-center">
                    <strong>
                        <span>$</span><span>12.00</span>
                    </strong>
                </div>
                <div class="shop-now text-center">
                    <a href="#" class="shop-now-btn">order now</a>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="{{asset('/images/products/product-1.webp')}}" alt="">
                </div>
                <div class="product-name text-center">
                    Eternal Sunset Collection Lip and Cheek
                </div>
                <div class="product-price text-center">
                    <strong>
                        <span>$</span><span>12.00</span>
                    </strong>
                </div>
                <div class="shop-now text-center">
                    <a href="#" class="shop-now-btn">order now</a>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="{{asset('/images/products/product-1.webp')}}" alt="">
                </div>
                <div class="product-name text-center">
                    Eternal Sunset Collection Lip and Cheek
                </div>
                <div class="product-price text-center">
                    <strong>
                        <span>$</span><span>12.00</span>
                    </strong>
                </div>
                <div class="shop-now text-center">
                    <a href="#" class="shop-now-btn">order now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="second-banner relative">
    <img src="{{asset('images/second-banner.webp')}}" alt="" width="100%">
    <div class="absolute center-center text-center">
        <div class="secondary-title">Highlighted Section</div>
        <p>What differentiates you from the competition? Use this section to talk about it. Don’t forget to talk about the benefits.        </p>
        <a href="#" class="shop-now-btn">shop now</a>
    </div>
</div>

@include('category.index')

@include('includes/footer')