@extends('layouts.app')

@section('title')
    Store Homepage
@endsection

@section('content')
    <div class="page-content page-home">
      <section class="store-carousel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
              <div
                id="storeCarousel"
                class="carousel slide"
                data-ride="carousel"
              >
                <ol class="carousel-indicators">
                  <li
                    data-target="#storeCarousel"
                    data-slide-to="0"
                    class="active"
                  ></li>
                  <li data-target="#storeCarousel" data-slide-to="1"></li>
                  <li data-target="#storeCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="/images/banner.png"
                      class="d-block w-100"
                      alt="Carousel Image"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="/images/banner.png"
                      class="d-block w-100"
                      alt="Carousel Image"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="/images/banner.png"
                      class="d-block w-100"
                      alt="Carousel Image"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="store-trend-categories mt-4">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Kategori</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="/images/chicken.svg" alt="" class="w-100">
                </div>
                <p class="categories-text">
                  Daging Ayam
                </p>
              </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="/images/beef.svg" alt="" class="w-100">
                </div>
                <p class="categories-text">
                  Daging Sapi
                </p>
              </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="/images/water.svg" alt="" class="w-100">
                </div>
                <p class="categories-text">
                  Air Mineral
                </p>
              </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="/images/dates.svg" alt="" class="w-100">
                </div>
                <p class="categories-text">
                  Kurma
                </p>
              </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="/images/burger.svg" alt="" class="w-100">
                </div>
                <p class="categories-text">
                  Burger
                </p>
              </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="/images/etc.svg" alt="" class="w-100">
                </div>
                <p class="categories-text">
                  Lain - lain
                </p>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="store-new-products">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Produk Baru</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div class="products-image" style="background-image:url('/images/ayamutuh700.jpg');"></div>
                  
                </div>
                <div class="products-text">
                    Ayam Utuh 0.7 gram
                  </div>
                  <div class="products-price">
                    Rp.27.000
                  </div>
              </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div class="products-image" style="background-image:url('/images/ayamutuh800.jpg');"></div>
                  
                </div>
                <div class="products-text">
                    Ayam Utuh 0.7 gram
                  </div>
                  <div class="products-price">
                    Rp.27.000
                  </div>
              </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div class="products-image" style="background-image:url('/images/ayamutuh900.jpg');"></div>
                  
                </div>
                <div class="products-text">
                    Ayam Utuh 0.7 gram
                  </div>
                  <div class="products-price">
                    Rp.27.000
                  </div>
              </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div class="products-image" style="background-image:url('/images/ayamutuh900.jpg');"></div>
                  
                </div>
                <div class="products-text">
                    Ayam Utuh 0.7 gram
                  </div>
                  <div class="products-price">
                    Rp.27.000
                  </div>
              </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div class="products-image" style="background-image:url('/images/ayamutuh900.jpg');"></div>
                  
                </div>
                <div class="products-text">
                    Ayam Utuh 0.7 gram
                  </div>
                  <div class="products-price">
                    Rp.27.000
                  </div>
              </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div class="products-image" style="background-image:url('/images/ayamutuh900.jpg');"></div>
                  
                </div>
                <div class="products-text">
                    Ayam Utuh 0.7 gram
                  </div>
                  <div class="products-price">
                    Rp.27.000
                  </div>
              </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div class="products-image" style="background-image:url('/images/ayamutuh900.jpg');"></div>
                  
                </div>
                <div class="products-text">
                    Ayam Utuh 0.7 gram
                  </div>
                  <div class="products-price">
                    Rp.27.000
                  </div>
              </a>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
              <a href="/details.html" class="component-products d-block">
                <div class="products-thumbnail">
                  <div class="products-image" style="background-image:url('/images/ayamutuh900.jpg');"></div>
                  
                </div>
                <div class="products-text">
                    Ayam Utuh 0.7 gram
                  </div>
                  <div class="products-price">
                    Rp.27.000
                  </div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection