<x-layout bodyClass="bg-gray-200">

  {{-- <div class="position-sticky z-index-sticky container top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <x-navbars.navs.guest signin='login' signup='register'></x-navbars.navs.guest>
        <!-- End Navbar -->
      </div>
    </div>
  </div> --}}
  <main class="main-content mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('assets/img/prefooter_banner.jpg');">
      <span class="mask bg-gradient-primary opacity-6"></span>
      <div class="container mt-5">
        <div class="row signin-margin">
          <div class="col-lg-6 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header position-relative mt-n4 z-index-2 mx-3 p-0">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pe-1 py-3">
                  <h4 class="font-weight-bolder mt-2 mb-1 text-center text-white">{{ __('Sign In') }}</h4>
                  {{-- <div class="row mt-3">
                    <h6 class='text-center text-white'>
                      <span class="font-weight-normal">Email:</span> admin@material.com
                      <br>
                      <span class="font-weight-normal">Password:</span> secret
                    </h6>
                  </div> --}}
                </div>
              </div>
              <div class="card-body">
                <form class="text-start" role="form" method="POST" action="{{ route('login') }}">
                  @csrf
                  @if (Session::has('status'))
                    <div class="alert alert-success alert-dismissible text-white" role="alert">
                      <span class="text-sm">{{ Session::get('status') }}</span>
                      <button class="btn-close py-3 text-lg opacity-10" data-bs-dismiss="alert" type="button" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  @endif
                  <div class="input-group input-group-outline mt-3">
                    <label class="form-label">{{ __('Personal Number') }}</label>
                    <input class="form-control" name="pernum" type="text">
                  </div>
                  @error('pernum')
                    <p class='text-danger inputerror'>{{ $message }} </p>
                  @enderror
                  <div class="input-group input-group-outline mt-3">
                    <label class="form-label">{{ __('Email') }}</label>
                    <input class="form-control" name="email" type="email">
                  </div>
                  @error('email')
                    <p class='text-danger inputerror'>{{ $message }} </p>
                  @enderror
                  <div class="input-group input-group-outline mt-3">
                    <label class="form-label">{{ __('Password') }}</label>
                    <input class="form-control" name="password" type="password">
                  </div>
                  @error('password')
                    <p class='text-danger inputerror'>{{ $message }} </p>
                  @enderror
                  {{-- <div class="form-check form-switch d-flex align-items-center my-3">
                    <input class="form-check-input" id="rememberMe" type="checkbox">
                    <label class="form-check-label ms-2 mb-0" for="rememberMe">Remember
                      me</label>
                  </div> --}}
                  <div class="text-center">
                    <button class="btn bg-gradient-primary w-100 my-4 mb-2" type="submit">{{ __('Sign In') }}</button>
                  </div>
                  <p class="mt-4 text-center text-sm">
                    {{ __('Don\'t have an account?') }}
                    <a class="text-primary text-gradient font-weight-bold" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                  </p>
                  <p class="text-center text-sm">
                    {{ __('Forgot your password? Reset your password') }}
                    <a class="text-primary text-gradient font-weight-bold" href="{{ route('verify') }}">{{ __('here') }}</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <x-footers.guest></x-footers.guest>
    </div>
  </main>
  @push('js')
    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <script>
      $(function() {

        var text_val = $(".input-group input").val();
        if (text_val === "") {
          $(".input-group").removeClass('is-filled');
        } else {
          $(".input-group").addClass('is-filled');
        }
      });
    </script>
  @endpush
</x-layout>
