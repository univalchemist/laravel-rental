@extends('template')

@section('main')

<main id="site-content" role="main">
      
 @include('common.subheader')  
      
<div id="notification-area"></div>
<div class="page-container-responsive space-top-4 space-4">
  <div class="row">
    <div class="col-md-3 lang-chang-label space-sm-4">
      <div class="sidenav">
      @include('common.sidenav')
      </div>
      <a href="{{ url('users/show/'.Auth::user()->id) }}" class="btn btn-block row-space-top-4">{{ trans('messages.dashboard.view_profile') }}</a>
    </div>
    <div class="col-md-9">
      
      <div id="dashboard-content">
@if(Auth::user()->users_verification->email != 'no' || Auth::user()->users_verification->facebook != 'no' || Auth::user()->users_verification->google != 'no' || Auth::user()->users_verification->linkedin != 'no')
<div class="panel verified-container">
  <div class="panel-header">
    {{ trans('messages.profile.current_verifications') }}
  </div>
  <div class="panel-body">
      <ul class="list-layout edit-verifications-list">
@if(Auth::user()->users_verification->email == 'yes')
        <li class="edit-verifications-list-item clearfix email verified">
          <h4>{{ trans('messages.dashboard.email_address') }}</h4>
          <p class="description">{{ trans('messages.profile.you_have_confirmed_email') }} <b>{{ Auth::user()->email }}</b>.  {{ trans('messages.profile.email_verified') }}
        </p></li>
        @endif

@if(Auth::user()->users_verification->phone_number == 'yes')
        <li class="edit-verifications-list-item clearfix email verified">
          <h4>{{ trans('messages.profile.phone_number') }}</h4>
          <p class="description">{{ trans('messages.profile.you_have_confirmed_phone') }} <b>{{ Auth::user()->primary_phone_number_protected }}</b>.
        </p></li>
        @endif

@if(Auth::user()->users_verification->facebook == 'yes')
        <li class="edit-verifications-list-item clearfix google verified">
          <h4>Facebook</h4>
          <div class="row">
  <div class="col-7 lang-chang-label">
    <p class="description verification-text-description">
      {{ trans('messages.profile.facebook_verification') }}
    </p>
  </div>
    <div class="col-5">
      <div class="disconnect-button-container">
        <a href="{{ url('facebookDisconnect') }}" class="btn gray btn-block" data-method="post" rel="nofollow">{{ trans('messages.profile.disconnect') }}</a>
      </div>
    </div>
</div>
        </li>
        @endif
@if(Auth::user()->users_verification->google == 'yes')
        <li class="edit-verifications-list-item clearfix google verified">
          <h4>Google</h4>
          <div class="row">
  <div class="col-7 lang-chang-label">
    <p class="description verification-text-description">
      {{ trans('messages.profile.google_verification', ['site_name'=>$site_name]) }}
    </p>
  </div>
    <div class="col-5">
      <div class="disconnect-button-container">
        <a href="{{ url('googleDisconnect') }}" class="btn gray btn-block" data-method="post" rel="nofollow">{{ trans('messages.profile.disconnect') }}</a>
      </div>
    </div>
</div>
        </li>
        @endif
@if(Auth::user()->users_verification->linkedin == 'yes')
        <li class="edit-verifications-list-item clearfix google verified">
          <h4>LinkedIn</h4>
          <div class="row">
  <div class="col-7 lang-chang-label">
    <p class="description verification-text-description">
      {{ trans('messages.profile.linkedin_verification', ['site_name'=>$site_name]) }}
    </p>
  </div>
    <div class="col-5">
      <div class="disconnect-button-container">
        <a href="{{ url('linkedinDisconnect') }}" class="btn gray btn-block" data-method="post" rel="nofollow">{{ trans('messages.profile.disconnect') }}</a>
      </div>
    </div>
</div>
        </li>
    @endif
      </ul>
  </div>
</div>
@endif

@if(Auth::user()->users_verification->email != 'yes' || Auth::user()->users_verification->facebook != 'yes' || Auth::user()->users_verification->google != 'yes' || Auth::user()->users_verification->linkedin != 'yes')
<div class="panel row-space-top-4 unverified-container">
  <div class="panel-header">
    {{ trans('messages.profile.add_more_verifications') }}
  </div>
  <div class="panel-body">
    <ul class="list-layout edit-verifications-list">
    @if(Auth::user()->users_verification->email == 'no')
        <li class="email unverified row-space-4 clearfix">
          <h4>
            {{ trans('messages.login.email') }}
          </h4>
          <div class="row">
  <div class="col-7 lang-chang-label">
    <p class="description verification-text-description">
      {{ trans('messages.profile.email_verification') }} <b>{{ Auth::user()->email }}</b>.
    </p>
  </div>

    <div class="col-5">
      <div class="connect-button">
        <a href="{{ url('users/request_new_confirm_email?redirect=verification') }}" class="btn btn-block large email-button">{{ trans('messages.profile.connect') }}</a>
      </div>
    </div>
</div>

        </li>
@endif

    @if(Auth::user()->users_verification->facebook == 'no')
        <li class="facebook unverified row-space-4 clearfix">
          <h4>
            Facebook
          </h4>
          <div class="row">
  <div class="col-7 lang-chang-label">
    <p class="description verification-text-description">
     {{ trans('messages.profile.facebook_verification') }}
    </p>
  </div>

    <div class="col-5">
      <div class="connect-button">

        <a href="{{ $fb_url }}" class="btn btn-block large facebook-button">{{ trans('messages.profile.connect') }}</a>
      </div>
    </div>
</div>

        </li>
@endif

    @if(Auth::user()->users_verification->google == 'no')
        <li class="google unverified row-space-4 clearfix">
          <h4>
            Google
          </h4>
          <div class="row">
  <div class="col-7 lang-chang-label">
    <p class="description verification-text-description">
      {{ trans('messages.profile.google_verification', ['site_name'=>$site_name]) }}
    </p>
  </div>
      <div class="col-5">
        <div class="connect-button">
          <a class="btn btn-block large" href="{{URL::to('googleLoginVerification')}}">
            {{ trans('messages.profile.connect') }}
          </a>
        </div>
      </div>
</div>
        </li>
@endif

    @if(Auth::user()->users_verification->linkedin == 'no')
        <li class="linkedin unverified row-space-4 clearfix">
          <h4>
            LinkedIn
          </h4>
          <div class="row">
  <div class="col-7 lang-chang-label">
    <p class="description verification-text-description">
      {{ trans('messages.profile.linkedin_verification', ['site_name'=>$site_name]) }}
    </p>
  </div>
      <div class="col-5">
        <div class="connect-button">
          <a class="btn btn-block" href="{{URL::to('linkedinLoginVerification')}}">{{ trans('messages.profile.connect') }}</a>
        </div>
      </div>
</div>
        </li>
@endif

    </ul>
  </div>
</div>
@endif
</div>

    </div>
  </div>
</div>

    </main>

@stop