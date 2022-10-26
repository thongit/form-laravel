<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Laravel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('vendor/css/bootstrap-datepicker.min.css') }}">
  <link href="{{ asset('vendor/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/css/toastr.min.css') }}"rel="stylesheet" >
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
  <section id="form-laravel">
    <div class="container-form">
      <div class="row box-form justify-content-md-center">
        <div class="col-md-3 bg-left">
        </div>
        <div class="col-md-9 bg-form">
          <form action="" class="" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">

                  <div class="mb-3 mt-3">
                    <label for="first_name" class="form-label">first name</label><span class="valid">*</span>
                    <input type="text" class="form-control @if($errors->has('first_name')) is-invalid @elseif ($errors->any() && !$errors->has('first_name')) is-valid @else  @endif" value="{{ old('first_name') }}" id="fname" name="first_name">
                    @if ($errors->has('first_name'))
                      <div class="invalid-feedback">
                      {{ $errors->first('first_name') }}
                      </div>
                    @endif
                  </div>

                  <div class="mb-3 mt-3">
                    <label for="last_name" class="form-label">last name</label><span class="valid">*</span>
                    <input type="text" class="form-control @if($errors->has('last_name')) is-invalid @elseif ($errors->any() && !$errors->has('last_name')) is-valid @else  @endif" value="{{ old('last_name') }}" id="lname" name="last_name">
                    @if ($errors->has('last_name'))
                      <div class="invalid-feedback">
                      {{ $errors->first('last_name') }}
                      </div>
                    @endif
                  </div>

                  <div class="mb-3 mt-3">
                    <label for="company" class="form-label">company</label><span class="valid">*</span>
                    <input type="text" class="form-control @if($errors->has('company')) is-invalid @elseif ($errors->any() && !$errors->has('company')) is-valid @else  @endif" value="{{ old('company') }}" id="company" name="company">
                    @if ($errors->has('company'))
                      <div class="invalid-feedback">
                      {{ $errors->first('company') }}
                      </div>
                    @endif
                  </div>

                  <div class="mb-3 mt-3">
                    <label for="email" class="form-label">email</label><span class="valid">*</span>
                    <input type="email" class="form-control @if($errors->has('email')) is-invalid @elseif ($errors->any() && !$errors->has('email')) is-valid @else  @endif" value="{{ old('email') }}" id="email" name="email">
                    @if ($errors->has('email'))
                      <div class="invalid-feedback">
                      {{ $errors->first('email') }}
                      </div>
                    @endif
                  </div>

                  <div class="mb-3 mt-3">
                    <label for="phone" class="form-label">phone number</label><span class="valid">*</span>
                    <input type="tel" class="form-control @if($errors->has('phone')) is-invalid @elseif ($errors->any() && !$errors->has('phone')) is-valid @else  @endif" value="{{ old('phone') }}" id="phone" name="phone">
                    @if ($errors->has('phone'))
                      <div class="invalid-feedback">
                      {{ $errors->first('phone') }}
                      </div>
                    @endif
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mb-3 mt-3">
                    <label for="gender" class="form-label">gender</label><span class="valid">*</span>
                    <select class="form-select form-control @if($errors->has('gender')) is-invalid @elseif ($errors->any() && !$errors->has('gender')) is-valid @else  @endif" id="gender" name="gender">
                        <option selected disabled value=""></option>
                        <option {{old('gender') == 1 ? "selected" : ""}}  value="1">Male</option>
                        <option {{old('gender') == 2 ? "selected" : ""}} value="2">Female</option>
                    </select>
                    @if ($errors->has('gender'))
                      <div class="invalid-feedback">
                      {{ $errors->first('gender') }}
                      </div>
                    @endif
                  </div>

                  <div class="mb-3 mt-3">
                    <label for="gender" class="form-label">payment mode</label><span class="valid">*</span>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="visa" value="visa" name="payment" {{old('payment') == 'visa' ? "checked" : ""}} checked>
                        <label class="form-check-label" for="">Visa</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="" value="mastercard" name="payment" {{old('payment') == 'mastercard' ? "checked" : ""}}>
                        <label class="form-check-label" for="">Mastercard</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="" value="amex" name="payment" {{old('payment') == 'amex' ? "checked" : ""}}>
                        <label class="form-check-label" for="">Amex</label>
                    </div>
                  </div>

                  <div class="mb-3 mt-3">
                    <label for="card_number" class="form-label">card number</label><span class="valid">*</span>
                    <input type="text" class="form-control @if($errors->has('card_number')) is-invalid @elseif ($errors->any() && !$errors->has('card_number')) is-valid @else  @endif" value="{{ old('cardNumber') }}" id="card-number" name="card_number">
                    @if ($errors->has('card_number'))
                      <div class="invalid-feedback">
                      {{ $errors->first('card_number') }}
                      </div>
                    @endif
                  </div>

                  <div class="mb-3 mt-3" >
                    <label for="expiration" class="form-label">expiration</label><span class="valid">*</span>
                    <input type="text" id="datepicker" class="form-control @if($errors->has('expiration')) is-invalid @elseif ($errors->any() && !$errors->has('expiration')) is-valid @else  @endif" value="{{ old('expiration') }}" id="expiration" name="expiration">
                    @if ($errors->has('expiration'))
                      <div class="invalid-feedback">
                      {{ $errors->first('expiration') }}
                      </div>
                    @endif
                  </div>

                  <div class="mb-3 mt-3">
                    <label for="cvn" class="form-label">cvn</label><span class="valid">*</span>
                    <input type="text" class="form-control @if($errors->has('cvn')) is-invalid @elseif ($errors->any() && !$errors->has('cvn')) is-valid @else  @endif" value="{{ old('cvn') }}" id="cvn" name="cvn">
                    @if ($errors->has('cvn'))
                      <div class="invalid-feedback">
                      {{ $errors->first('cvn') }}
                      </div>
                    @endif
                  </div>
                </div>
            </div>

            <div class="mb-3 mt-3 donate-box">
              <label for="donate" class="form-label">donate us</label><span class="valid">*</span>
              <input type="range" class="form-control-range" id="donate" name="donate" min="0" max="1000">
              <div class="box">
                  <span class="arrow"><</span>
                  <span class="dolar">$</span><div class="number">500</div>
                  <span class="arrow">></span>
              </div>
            </div>

            <div class="mt-5 float-end">
              <button type="submit" class="btn btn-submit">SUBMIT</button>
              <button type="reset" class="btn btn-reset">RESET</button>
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </section>
  
  <script src="{{ asset('vendor/js/jquery-3.6.1.min.js') }}"></script>
  <script src="{{ asset('vendor/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/js/toastr.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script> 
  @if (session('success'))
    <script>
      toastr.success("{{session('success')}}");
    </script>
  @endif
  @if ($errors->any())
    <script>
      toastr.error("Error data");
    </script>
  @endif
</body>
</html>
