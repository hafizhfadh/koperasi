@extends('layouts.app')

@section('content')
  {{-- Pricing Table --}}
  <section class="p-t-100 p-b-100">
    <div class="pricing-table">
      <div class="pricing-plan">
        <div class="plan-header">Starter</div>
        <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>20</span>/month</div>
        <div class="plan-items">
          <div class="plan-item">20GB Storage</div>
          <div class="plan-item">100 Domains</div>
          <div class="plan-item">-</div>
          <div class="plan-item">-</div>
        </div>
        <div class="plan-footer">
          <button class="button is-fullwidth" disabled="disabled">Current plan</button>
        </div>
      </div>

      <div class="pricing-plan is-warning">
        <div class="plan-header">Startups</div>
        <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>40</span>/month</div>
        <div class="plan-items">
          <div class="plan-item">20GB Storage</div>
          <div class="plan-item">25 Domains</div>
          <div class="plan-item">1TB Bandwidth</div>
          <div class="plan-item">-</div>
        </div>
        <div class="plan-footer">
          <button class="button is-fullwidth">Choose</button>
        </div>
      </div>

      <div class="pricing-plan is-active">
        <div class="plan-header">Growing Team</div>
        <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>60</span>/month</div>
        <div class="plan-items">
          <div class="plan-item">200GB Storage</div>
          <div class="plan-item">50 Domains</div>
          <div class="plan-item">1TB Bandwidth</div>
          <div class="plan-item">100 Email Boxes</div>
        </div>
        <div class="plan-footer">
          <button class="button is-fullwidth">Choose</button>
        </div>
      </div>

      <div class="pricing-plan is-danger">
        <div class="plan-header">Enterprise</div>
        <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>100</span>/month</div>
        <div class="plan-items">
          <div class="plan-item">2TB Storage</div>
          <div class="plan-item">100 Domains</div>
          <div class="plan-item">1TB Bandwidth</div>
          <div class="plan-item">1000 Email Boxes</div>
        </div>
        <div class="plan-footer">
          <button class="button is-fullwidth">Choose</button>
        </div>
      </div>
    </div>
  </section>
  {{-- End Pricing Table --}}

  {{-- Hero --}}
  <section class="hero is-light m-t-100 m-b-100">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title">
          Hero title
        </h1>
        <div class="is-divider"></div>
        <h2 class="subtitle">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </h2>
      </div>
    </div>
  </section>
  {{-- End Hero --}}

  {{-- Product --}}
  <section class="p-t-100 p-b-100 has-text-centered">
    <div class='carousel is-4 carousel-animated carousel-animate-slide' data-autoplay="true">
      <div class='carousel-container'>
        <div class='carousel-item is-active'>
          <figure class="image is-2by1">
            <img src="https://bulma.io/images/placeholders/640x320.png">
            <div class="title">Nama Product</div>
          </figure>
        </div>
        <div class='carousel-item'>
          <figure class="image is-2by1">
            <img src="https://bulma.io/images/placeholders/640x320.png">
            <div class="title">Nama Product</div>
          </figure>
        </div>
        <div class='carousel-item'>
          <figure class="image is-2by1">
            <img src="https://bulma.io/images/placeholders/640x320.png">
            <div class="title">Nama Product</div>
          </figure>
        </div>
        <div class='carousel-item'>
          <figure class="image is-2by1">
            <img src="https://bulma.io/images/placeholders/640x320.png">
            <div class="title">Nama Product</div>
          </figure>
        </div>
        <div class='carousel-item'>
          <figure class="image is-2by1">
            <img src="https://bulma.io/images/placeholders/640x320.png">
            <div class="title">Nama Product</div>
          </figure>
        </div>
      </div>
    </div>
  </section>
  {{-- End Product --}}
@endsection
