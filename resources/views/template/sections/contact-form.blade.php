<!-- Contact Form -->
<section class="wt-section">
    <div class="container">
        @include('news.parts.alerts-sessions')
        <div class="row justify-content-center align-items-center text-center mb-lg-4 mb-4">
            <div class="col-md-6 mb-lg-5 mb-4">
                <h2 class="mb-4">{{ __('menu.let_know') }}</h2>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at enim excepturi facere in non reiciendis.</p>
            </div>
        </div>
        <form class="text-center" action="{{route('contacts')}}" method="POST">
            <div class="row text-center">
                <div class="col-lg-5">
                    <!--iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe-->
                </div>
        <div class="col-lg-7">
        <!-- Form itself -->
            <form 
                    name="sentMessage" class="well" id="contactForm"  novalidate >
                @csrf
                <div class="control-group">
                    <div class="form-group mb-4">
                        <input type="text" class="form-control form-control-lg"
                                name="name"
                                placeholder="{{ __('menu.full_name') }}" id="name" required
                                data-validation-required-message="{{ __('menu.enter_name') }}" />
                        <p class="help-block"></p>

                    </div>
                </div>
                <div class="form-group mb-4">
                    <div class="controls">
                        <input type="email" class="form-control form-control-lg" 
                                placeholder="{{ __('menu.email') }}"
                                id="email"  name="email" required
                                data-validation-required-message="{{ __('menu.enter_email') }}"/>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <div class="controls">
                        <textarea rows="10" cols="100" class="form-control form-control-lg"
                            placeholder="{{ __('menu.message') }}" id="message" required
                            data-validation-required-message="{{ __('menu.enter_message') }}" minlength="5"
                            data-validation-minlength-message="{{ __('menu.min5') }}"
                            maxlength="999" style="resize:none" name="message" ></textarea>
                    </div>
                </div>
                <div id="success"> </div> <!-- For success/fail messages -->
            <div class="text-center">
            <button class="btn btn-lg btn-primary py-3 mt-3 px-4 btn-pill" type="submit">{{ __('menu.send_mess') }}</button>
        </div>
            </form>
        </div>
        </div>

        </form>
    </div>
</section>
<!-- End Contact Form -->
