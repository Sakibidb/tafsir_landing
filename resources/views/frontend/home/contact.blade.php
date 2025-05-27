@extends('frontend.app')

@section('title', 'Contact Us')

@section('content')
    <div class="about-welcome-section-area about2"
        style="background-image: url({{ asset('images/background/bg2.png') }}); background-repeat: no-repeat; background-size: cover; padding-top: 190px; height: 100%;">
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
                                <p>আমাদেরকে ফোন দিন</p>
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
                                <p>আমাদেরকে মেইল করুন</p>
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
                        <h2>আমাদের সাথে যোগাযোগ করুন</h2>
                        <div class="space24"></div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul style="margin: 0; padding-left: 18px;">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('frontend.contact.send') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="space24"></div>
                                    <div class="input-area">
                                        <input type="text" name="name" value="{{ old('name') }}"
                                            placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="space24"></div>
                                    <div class="input-area">
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="space24"></div>
                                    <div class="input-area">
                                        <textarea name="note" placeholder="Additional Details" cols="30" rows="10" required>{{ old('note') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="space24"></div>
                                    <div>
                                        <input type="hidden" name="status" value="1">
                                        <button type="submit" class="btn btn-dark submit-btn btn8">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
