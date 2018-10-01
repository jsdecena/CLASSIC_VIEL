<section class="subscribe-section">
    @if(session()->has('message'))
        <div class="box no-border">
            <div class="box-tools">
                <p class="alert alert-success alert-dismissible">
                    {{ session()->get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </p>
            </div>
        </div>
    @elseif(session()->has('error'))
        <div class="box no-border">
            <div class="box-tools">
                <p class="alert alert-danger alert-dismissible">
                    {{ session()->get('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </p>
            </div>
        </div>
    @endif
    <div class="parallax-box alt-bg" id="newsletter-block">
      <div class="parallax-content">
        <div class="form-subscribe">
          <form action="{{route('mailchimp.store')}}" name="mc-embedded-subscribe-form" target="_blank" method="post" id="newsletter-validate-detail">
            {{csrf_field()}}
            <div class="input-box">
              <input type="text" name="email" id="newsletter" placeholder="Email for newsletter..." title="EMAIL FOR NEWSLETTERS" class="input-text">
              <button type="submit" name="subscribe" title="Subscribe" class="button newsletter"><span><span>Send</span></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer-section footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

                <ul class="footer-menu">
                    <li> <a href="{{ route('accounts', ['tab' => 'profile']) }}">Your account</a>  </li>
                    <li> <a href="">Contact us</a>  </li>
                    <li> <a href="">Terms of service</a>  </li>
                </ul>

                <ul class="footer-social">
                    <li> <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i>  </a> </li>
                    <li> <a href=""> <i class="fa fa-twitter" aria-hidden="true"></i>   </a> </li>
                    <li> <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i>  </a> </li>
                    <li> <a href=""> <i class="fa fa-pinterest-p" aria-hidden="true"></i>  </a> </li>
                </ul>

                <p>&copy; <a href="{{ config('app.url') }}">{{ config('app.name') }}</a> | All Rights Reserved</p>

            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->

<!-- Back to top -->
<div id="back-to-top"></div>
<!-- /Back to top -->
