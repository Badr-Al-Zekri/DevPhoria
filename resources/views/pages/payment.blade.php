@extends('layouts.app')

@section('title', 'Complete Payment')

@section('content')
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 800px;">
            <h1 class="display-3 mb-4">Complete Payment</h1>
            <p class="mb-4 lead">We use the latest security technologies to protect your financial information</p>
            <div class="d-inline-flex align-items-center bg-light rounded p-2">
                <span class="me-3"><i class="fa fa-lock text-success"></i> SSL Secure</span>
                <span class="me-3">256-bit Encryption</span>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row g-5">
            <!-- Order Summary Column -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                <div class="bg-light rounded p-4">
                    <h3 class="mb-4">Order Summary</h3>
                    <div class="border rounded p-3 mb-3">
                        <h4 class="mb-2">{{ $serviceName }}</h4>
                        
                        <ul class="list-group list-group-flush mt-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0 h5 bg-transparent">
                                 Total Price
                                <span class="fw-bold">$ {{ number_format($finalTotal, 2) }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Payment Methods Column -->
            <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                <div class="bg-light rounded p-4">
                    <h3 class="mb-4">Payment Methods</h3>
                    <ul class="nav nav-pills mb-3 justify-content-between" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-card-tab" data-bs-toggle="pill" data-bs-target="#pills-card" type="button" role="tab" aria-controls="pills-card" aria-selected="true">
                                <i class="fa fa-credit-card me-2"></i>Credit Cards
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-paypal-tab" data-bs-toggle="pill" data-bs-target="#pills-paypal" type="button" role="tab" aria-controls="pills-paypal" aria-selected="false">
                                <i class="fab fa-paypal me-2"></i>PayPal
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-applepay-tab" data-bs-toggle="pill" data-bs-target="#pills-applepay" type="button" role="tab" aria-controls="pills-applepay" aria-selected="false">
                                <i class="fab fa-apple-pay me-2"></i>Apple Pay
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-stcpay-tab" data-bs-toggle="pill" data-bs-target="#pills-stcpay" type="button" role="tab" aria-controls="pills-stcpay" aria-selected="false">
                                <img src="{{ asset('img/stcpay.jpg') }}" alt="STC Pay" style="width: 24px; height: 24px; margin-right: 8px;">STC Pay
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <!-- Credit Card Payment Tab -->
                        <div class="tab-pane fade show active" id="pills-card" role="tabpanel" aria-labelledby="pills-card-tab">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Visa_Inc._logo.svg/2560px-Visa_Inc._logo.svg.png" alt="Visa" style="width: 50px; margin-right: 10px;">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Mastercard-logo.svg/200px-Mastercard-logo.svg.png" alt="Mastercard" style="width: 50px; margin-right: 10px;">
                            </div>
                            <form action="{{ route('payment.process') }}" method="POST" class="mt-3">
                                @csrf
                                <input type="hidden" name="service_name" value="{{ $serviceName }}">
                                <input type="hidden" name="amount" value="{{ $finalTotal }}">
                                <input type="hidden" name="payment_method" value="credit_card">
                                <div class="mb-3">
                                    <label for="cardHolderName" class="form-label">Cardholder Name</label>
                                    <input type="text" class="form-control p-3" id="cardHolderName" name="card_holder_name" placeholder="Name as shown on card" required>
                                </div>
                                <div class="mb-3">
                                    <label for="cardNumber" class="form-label">Card Number</label>
                                    <input type="text" class="form-control p-3" id="cardNumber" name="card_number" placeholder="1234 5678 9012 3456" required>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="expiryDate" class="form-label">Expiry Date</label>
                                        <input type="text" class="form-control p-3" id="expiryDate" name="expiry_date" placeholder="MM/YY" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="cvvCode" class="form-label">CVV Code</label>
                                        <input type="text" class="form-control p-3" id="cvvCode" name="cvv_code" placeholder="123" required>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center bg-info bg-opacity-10 p-2 rounded mb-3">
                                    <i class="fa fa-info-circle text-info me-2"></i>
                                    <small class="text-dark">Your information is protected with SSL encryption and two-factor authentication</small>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="termsCheck" name="terms_check" required>
                                    <label class="form-check-label" for="termsCheck">
                                        I agree to the <a href="#" class="text-primary">Terms and Conditions</a> and <a href="#" class="text-primary">Privacy Policy</a>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-3">Pay Now $ {{ number_format($finalTotal, 2) }}</button>
                            </form>
                        </div>

                        <!-- PayPal Tab -->
                        <div class="tab-pane fade" id="pills-paypal" role="tabpanel" aria-labelledby="pills-paypal-tab">
                            <p class="mt-3">You will be redirected to PayPal to complete your purchase securely.</p>
                            <form action="{{ route('payment.process') }}" method="POST">
                                @csrf
                                <input type="hidden" name="service_name" value="{{ $serviceName }}">
                                <input type="hidden" name="amount" value="{{ $finalTotal }}">
                                <input type="hidden" name="payment_method" value="paypal">
                                <div class="d-flex align-items-center bg-info bg-opacity-10 p-2 rounded mb-3">
                                    <i class="fa fa-info-circle text-info me-2"></i>
                                    <small class="text-dark">Your information is protected with SSL encryption and two-factor authentication</small>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="paypalTermsCheck" name="terms_check" required>
                                    <label class="form-check-label" for="paypalTermsCheck">
                                        I agree to the <a href="#" class="text-primary">Terms and Conditions</a> and <a href="#" class="text-primary">Privacy Policy</a>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-3">Proceed with PayPal</button>
                            </form>
                        </div>

                        <!-- Apple Pay Tab -->
                        <div class="tab-pane fade" id="pills-applepay" role="tabpanel" aria-labelledby="pills-applepay-tab">
                            <p class="mt-3">You will be redirected to Apple Pay to complete your purchase securely.</p>
                            <form action="{{ route('payment.process') }}" method="POST">
                                @csrf
                                <input type="hidden" name="service_name" value="{{ $serviceName }}">
                                <input type="hidden" name="amount" value="{{ $finalTotal }}">
                                <input type="hidden" name="payment_method" value="apple_pay">
                                <div class="d-flex align-items-center bg-info bg-opacity-10 p-2 rounded mb-3">
                                    <i class="fa fa-info-circle text-info me-2"></i>
                                    <small class="text-dark">Your information is protected with SSL encryption and two-factor authentication</small>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="applePayTermsCheck" name="terms_check" required>
                                    <label class="form-check-label" for="applePayTermsCheck">
                                        I agree to the <a href="#" class="text-primary">Terms and Conditions</a> and <a href="#" class="text-primary">Privacy Policy</a>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-3">Proceed with Apple Pay</button>
                            </form>
                        </div>

                        <!-- STC Pay Tab -->
                        <div class="tab-pane fade" id="pills-stcpay" role="tabpanel" aria-labelledby="pills-stcpay-tab">
                            <p class="mt-3">You will be redirected to STC Pay to complete your purchase securely.</p>
                            <form action="{{ route('payment.process') }}" method="POST">
                                @csrf
                                <input type="hidden" name="service_name" value="{{ $serviceName }}">
                                <input type="hidden" name="amount" value="{{ $finalTotal }}">
                                <input type="hidden" name="payment_method" value="stc_pay">
                                <div class="d-flex align-items-center bg-info bg-opacity-10 p-2 rounded mb-3">
                                    <i class="fa fa-info-circle text-info me-2"></i>
                                    <small class="text-dark">Your information is protected with SSL encryption and two-factor authentication</small>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" id="stcPayTermsCheck" name="terms_check" required>
                                    <label class="form-check-label" for="stcPayTermsCheck">
                                        I agree to the <a href="#" class="text-primary">Terms and Conditions</a> and <a href="#" class="text-primary">Privacy Policy</a>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 py-3">Proceed with STC Pay</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
