<section id="hero">
    <div class="welcome5-section-area"
        style="background-image: url({{ asset('images/background/bg2.png') }});  background-repeat: no-repeat; background-size: cover; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="welcome5-header-area text-center heading3">
                        <h1 data-aos="zoom-out" data-aos-duration="800">সায়েন্টিফিক তাফসির আল কুরআনের আয়াতসমূহের আধুনিক বিজ্ঞান ও প্রাকৃতিক জ্ঞানের আলোকে গভীর বিশ্লেষণ</h1>
                        <div class="space32"></div>
                        <div class="btn-area" data-aos="zoom-out" data-aos-duration="1200">
                            <button class="header-btn8 btn8"
                                style="height:54px !important; display: flex; justify-content: center; align-items: center; gap: 8px; text-decoration: none; border: none; background: #000000; color: white; padding: 16px 24px; border-radius: 35px; cursor: pointer; height: 60px; hover:background-color:white; hover:color:black"
                                data-bs-toggle="modal" data-bs-target="#leadModal">
                                বিস্তারিত জানতে <i class="fa-solid fa-arrow-right"></i>
                            </button>
                            <a href="{{ route('frontend.getstarted') }}" class="header-btn9"> বইটির সূচি <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="space32"></div>
                        <div class="welcome5-images-area">
                            <div class="row">
                                <div class="col-lg-6 m-auto">
                                    <div class="img1">
                                        <img src="{{ asset('images/all-images/fatiha.png') }}" alt=""
                                            data-aos="zoom-in" data-aos-duration="1000">
                                    </div>
                                </div>
                                <div class="col-lg-6 m-auto">
                                    <div class="img1">
                                        <img src="{{ asset('images/all-images/bakara.png') }}" alt=""
                                            data-aos="zoom-in" data-aos-duration="1000">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade @if ($errors->any()) show @endif" id="leadModal" tabindex="-1"
        aria-label="leadModalLabel" aria-hidden="true"
        style="display: @if ($errors->any()) block @else none @endif;">
        <div class="modal-dialog modal-dialog-centered w-636" style="position: relative; z-index: 100;">
            <div class="modal-content">
                <div class="ml-right">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="px-12">
                    <h2 class="modal-title" id="leadModalLabel">বইটির বিস্তারিত পেতে ফর্মটি সাবমিট করুন</h2>
                </div>
                <div class="modal-body p-12">
                    <form id="leadForm" action="{{ route('frontend.home.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control modal-input @error('name') is-invalid @enderror"
                                id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control modal-input @error('email') is-invalid @enderror"
                                id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" id="number"
                                class="form-control modal-input @error('phone') is-invalid @enderror" name="phone"
                                value="{{ old('phone') }}">
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
</section>
