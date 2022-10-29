<x-layout bodyClass="">

  <div>
    {{-- <div class="position-sticky z-index-sticky container top-0">
      <div class="row">
        <div class="col-12">
          <!-- Navbar -->
          <x-navbars.navs.guest signin='login' signup='register'></x-navbars.navs.guest>
          <!-- End Navbar -->
        </div>
      </div>
    </div> --}}
    <main class="main-content">
      <section>
        <div class="page-header min-vh-100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 d-lg-flex d-none h-100 position-absolute start-0 justify-content-center flex-column top-0 m-0 p-0 text-center">
                <div class="position-relative bg-gradient-primary h-100 d-flex flex-column justify-content-center"
                  style="background-image: url('assets/img/health_blocks.png'); background-size: cover; background-repeat: no-repeat;">
                </div>
                <span class="mask bg-gradient-primary opacity-6"></span>
              </div>
              <div class="col-xl-4 col-lg-8 col-12 d-flex flex-column ms-auto me-auto ms-lg-auto me-xl-8">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                  <div class="card-header position-relative mt-n4 z-index-2 mx-3 p-0">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pe-1 py-3">
                      <h4 class="font-weight-bolder mt-2 mb-1 text-center text-white">{{ __('Sign Up') }}</h4>
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
                    <form method="POST" action="{{ route('register') }}">
                      @csrf
                      <div class="input-group input-group-outline mt-3">
                        <label class="form-label">Name</label>
                        <input class="form-control" name="name" type="text" value="{{ old('name') }}">
                      </div>
                      @error('name')
                        <p class='text-danger inputerror'>{{ $message }} </p>
                      @enderror
                      <div class="input-group input-group-outline mt-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" name="email" type="email" value="{{ old('email') }}">
                      </div>
                      @error('email')
                        <p class='text-danger inputerror'>{{ $message }} </p>
                      @enderror
                      <div class="input-group input-group-outline mt-3">
                        <label class="form-label">Password</label>
                        <input class="form-control" name="password" type="password">
                      </div>
                      @error('password')
                        <p class='text-danger inputerror'>{{ $message }} </p>
                      @enderror
                      {{-- <div class="form-check form-check-info ps-0 mt-3 text-start">
                        <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="" checked>
                        <label class="form-check-label" for="flexCheckDefault">
                          I agree the <a class="text-dark font-weight-bolder" href="javascript:;">Terms and Conditions</a>
                        </label>
                      </div> --}}
                      <div class="text-center">
                        <button class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" type="submit">{{ __('Sign Up') }}</button>
                      </div>
                    </form>
                  </div>
                  <div class="card-footer px-lg-2 px-1 pt-0 text-center">
                    <p class="mx-auto mb-2 text-sm">
                      {{ __('Already have an account?') }}
                      <a class="text-primary text-gradient font-weight-bold" href="{{ route('login') }}">{{ __('Sign In') }}</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>

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
