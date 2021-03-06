<div class="modal" role="dialog" id="login_modal">
    <div class="sign-in-page">
        <div class="signin-popup">
            <div class="signin-pop">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="bakd-info cmp-info text-center">
                            <div class="cm-logo text-center">
                                <a href="{{ route('frontend.home') }}">
                                    <img class="bakd-logo" style="max-width: 260px; margin: 0 auto; text-align: center;" src="{{ asset('images/branding/logo.jpg') }}" alt="{{ config('bakd.logo.alt', 'BAKD | ICO Management & Networking Platform') }}" title="{{ config('bakd.logo.alt', 'BAKD') }}" />
                                </a>
                                <p class="title">
                                    {{ config('bakd.seo.description', 'ICO Management & Networking Platform') }}
                                </p>
                                <p class="text-center" style="font-weight: normal; line-height: 1.75; padding: 10px 0px;">
                                    BAKD is a revolutionary new way to fund your next cryptocurrency project. BAKD not only helps entrepreneurs crowdsource the funding needed to build their dream project, but it's also a place where entrepreneurs can connect with mentors.
                                </p>
                            </div>
                            {{--  TODO: Add misc illustrated crowdfund type logo/icon/image here  --}}
                            {{--  <img src="{{ asset('images/cm-main-img.png') }}" alt="" />  --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login-sec">
                            <ul class="sign-control">
                                <li data-tab="tab-1" class="current">
                                    <a href="#" title="Sign in to your BAKD Account">
                                        {{ __('Sign In') }}
                                    </a>
                                </li>
                                <li data-tab="tab-2">
                                    <a href="#" title="Register for a free BAKD Account">
                                        {{ __('Register') }}
                                    </a>
                                </li>
                            </ul>
                            <div class="sign_in_sec current" id="tab-1">
                                @include('auth.partials.login-form')
                            </div>

                            <div class="sign_in_sec" id="tab-2">
                                @include('auth.partials.registration-form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
