<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | Login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/assets/styles/index.scss', 'resources/assets/scripts/index.js'])
  </head>
  <body class="app"  style="background: url('https://c.wallhere.com/photos/20/14/minimalism_texture_simple_background_branch-16336.jpg!d')">
    @include('admin.commons.loader')
    <div class="peers ai-s fxw-nw h-60vh pT-100">
      <div class="col-4 col-md-4 peer pX-40 pY-80 h-100 bgc-white pos-r offset-4">
        <h4 class="fw-300 c-grey-900 mB-40">Login</h4>
        <form action="{{ route('admin.submit-login') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label class="text-normal text-dark form-label">Username</label>
            <input type="email" class="form-control" name="email" placeholder="John Doe">
          </div>
          <div class="mb-3">
            <label class="text-normal text-dark form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <div class="">
            <div class="peers ai-c jc-sb fxw-nw">
              <div class="peer">
                <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                  <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                  <label for="inputCall1" class=" peers peer-greed js-sb ai-c form-label">
                    <span class="peer peer-greed">Remember Me</span>
                  </label>
                </div>
              </div>
              <div class="peer">
                <button class="btn btn-primary btn-color" type="submit">Login</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>