@extends('layouts.front.app')

@section('content')
<div class="main-container home-content-container">
  <div class="novaworks-main-content">
    <div class="main home-content container">
      <div class="row columns-layout">
        <div class="col-main col-md-12">
          <div class="page-title">
            <h1>Contact Us</h1>
          </div>
          <div class="block_contact">
            <div class="contact-map">

            </div>
            <div class="row contact-info">
              <div class="col-md-4">
                <div class="contact-left">
                  <div class="content-1">
<div class="block_contact_1">
<div class="nc">
<span class="nv_icon"><img src="{{ asset('img/icon-contact-mphone-38.png') }}" alt=""></span> <span class="nv">+966 11 419 4441</span>
</div>
<div class="nc">
<span class="nv_icon"><img src="{{ asset('img/icon-contact-email-38.png') }}" alt=""></span> <span class="nv">info@classic-veil.com.sa</span>
</div>
<div class="nc">
<span class="nv_icon"><img src="{{ asset('img/icon-contact-location-38_large.png') }}" alt=""></span> <span class="nv">P.O. Box 8533 Riyadh</span> <span class="nv">11492 Saudi Arabia</span>
</div>
<div class="nc">
<span class="nv_icon"><img src="{{ asset('img/icon-contact-hours-38.png') }}" alt=""></span> <span class="nv">From Sunday&nbsp;to&nbsp;Thursday</span> <span class="nv">9:00 a.m. to 5:00 p.m.</span>
</div>
</div>
</div>
<div class="content-2">
<div class="twelve columns">
<div class="contact-custom">
<!-- <p style="margin-bottom: 20px;">We want to improve your Chador online experience.</p> -->
<p style="margin-bottom: 15px;">In the last 19 year, Classic Veil has positioned itself as the premium
brand in quality and workmanship. The company has earnestly sought the
very best artisans, suppliers and experts , ensuring that the fabrics,
finish and embroidery result in truly superlative products that are
incomparable.
The brand has become highly popular and coveted by women who seek
subtle exclusivity and distinction in the way they carry themselves,
reinforcing the trust that Classic Veil has built among its customers.
It is also known for its Divine pieces and originality in design and
stitching, responding to the elite market and sophisticated women in
today's vibrant Middle East.</p>
<p><strong> <span lang="en" id="result_box" class="short_text"> <span class="hps">Customer Service</span> </span>: </strong> <br><span>info@classic-veil.com.sa</span></p>
<p><strong>Returns: </strong> <br>info@classic-veil.com.sa</p>
</div>
</div>
</div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="contact-right" id="contactForm">
                  <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form"><input type="hidden" name="form_type" value="contact"><input type="hidden" name="utf8" value="✓">



                  <div class="fieldset">
                    <h2 class="legend">Contact Information</h2>
                    <ul class="form-list">
                      <li class="fields">
                        <label for="name" class="required">Name</label>
                        <div class="input-box">
                          <input name="contact[name]" id="name" title="Name" value="" class="input-text" type="text">
                        </div>
                      </li>
                      <li class="fields">
                        <label for="email" class="required"><em>*</em>Email</label>
                        <div class="input-box">
                          <input name="contact[email]" id="email" title="Email" value="" class="input-text" type="text">
                        </div>
                      </li>
                      <li>
                        <label for="telephone">Telephone</label>
                        <div class="input-box">
                          <input name="contact[phone]" id="telephone" title="Telephone" value="" class="input-text" type="text">
                        </div>
                      </li>
                      <li class="wide">
                        <label for="comment" class="required">Comment</label>
                        <div class="input-box">
                          <textarea name="contact[body]" id="comment" title="Comment" class="input-text" cols="5" rows="3"></textarea>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="buttons-set">
                    <p class="required">* Required Fields</p>
                    <button type="submit" title="Submit" class="btn btn-default pull-right"><span><span>Submit</span></span></button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
