

@extends('layout')

@section('content')

<section id="contacto">
  <div id="google-map" class="wow fadeIn" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
  <div id="contact-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Contactenos</h2>
          <p>{{ $client->identificacion }}</p>
        </div>
      </div>
      <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
          <div class="col-sm-6">
            <form id="main-contact-form" name="contact-form" method="post" action="{{ route('envEmail') }}">
              {{ csrf_field() }}
              <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
              </div>
              <div class="form-group">
                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
              </div>                        
              <div class="form-group">
                <button type="submit" class="btn-submit">Send Now</button>
              </div>
            </form>   
          </div>
          <div class="col-sm-6">
            <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
              <ul class="address">
                <li><i class="fa fa-map-marker"></i> <span> Address:</span> 2400 South Avenue A </li>
                <li><i class="fa fa-phone"></i> <span> Phone:</span> +928 336 2000  </li>
                <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:someone@yoursite.com"> support@oxygen.com</a></li>
                <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.sitename.com</a></li>
              </ul>
            </div>                            
          </div>
        </div>
      </div>
    </div>
  </div>        
</section><!--/#contact-->

@stop