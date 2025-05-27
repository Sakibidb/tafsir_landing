@extends('frontend.app')

@section('title', 'Contact Us')

@section('content')
<div class="about-welcome-section-area about2" style="background-image: url({{ asset('images/background/bg2.png') }}); background-repeat: no-repeat; background-size: cover; padding-top: 190px; height: 100dvh;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="contact-inner-header heading1">
                    <h1 class="text-start">বইটি পেতে</h1>
                    <div class="spasce16"></div>
                    <p>প্রকাশক: কিংডম ফাউন্ডেশন পাবলিশার্স <br/> পরিবেশক: সরলরেখা প্রকাশনা সংস্থা <br/> রুম ৩১ [দ্বিতীয় তলা], সেঞ্চুরি আর্কেড, বড় মগবাজার (সিদ্ধেশ্বরী কলেজের পাশে),রমনা, ঢাকা-১২১৭</p>
                    <div class="space32"></div>
                    <div class="contact-box-area">
                        <div class="contact-boxs">
                            <div class="img1">
                                <img src="{{ asset('images/icons/whatsapp.png') }}" alt="">
                            </div>
                            <div class="content">
                                <p>Contact Us</p>
                                <div class="space12"></div>
                                <a href="https://wa.me/8801716477600" target="_blank">+8801716477600</a>
                            </div>
                        </div>
                        <div class="space24"></div>
                        <div class="contact-boxs">
                            <div class="img1">
                                <img src="{{ asset('images/icons/email.png') }}" alt="">
                            </div>
                            <div class="content">
                                <p>Send Us a Mail</p>
                                <div class="space12"></div>
                                <a href="mailto:sps@saralrekha.com.bd" target="_blank">sps@saralrekha.com.bd</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <div class="conatact-header-boxarea heading6">
                    <div class="modal-dialog modal-dialog-centered w-636">
                        <div class="modal-content">
                            <div class="px-12">
                                <h3 class="modal-title" id="leadModalLabel">সূচি পেতে ফর্মটি সাবমিট করুণ</h3>
                            </div>
                            <div class="modal-body p-12">
                                <form id="leadForm" action="{{ route('frontend.home.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" placeholder="Enter Your Name" class="form-control modal-input @error('name') is-invalid @enderror" id="name"
                                            name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                
                                    <div class="mb-3">
                                        <input type="email" placeholder="Enter Your Email Address" class="form-control modal-input @error('email') is-invalid @enderror" id="email"
                                            name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                
                                    <div class="mb-3">
                                        <input type="tel" placeholder="Enter Phone Number" id="number" class="form-control modal-input @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}">
                                        <input type="hidden" id="code" name="country_code" value="">
                                        <input type="hidden" id="code_name" name="country_code_name" value="">
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                
                                    <input type="hidden" id="status" name="status" value="1">
                                    <button type="submit" class="btn btn-dark submit-btn btn8">Submit</button>
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
