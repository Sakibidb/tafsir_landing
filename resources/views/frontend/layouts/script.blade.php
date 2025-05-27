<script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/swiper.bundle.js') }}"></script>
<script src="{{ asset('js/plugins/mobilemenu.js') }}"></script>
<script src="{{ asset('js/plugins/slick-slider.js') }}"></script>
<script src="{{ asset('js/plugins/owlcarousel.min.js') }}"></script>
<script src="{{ asset('js/plugins/counter.js') }}"></script>
<script src="{{ asset('js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('js/plugins/aos.js') }}"></script>
<script src="{{ asset('js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('js/plugins/gsap.min.js') }}"></script>
<script src="{{ asset('js/plugins/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/izitoast/dist/js/iziToast.min.js') }}"></script>
<script defer src="{{ asset('lib/inttelinput/js/intlTelInput-jquery.js') }}"></script>
<script defer src="{{ asset('lib/inttelinput/js/intlTelInput.js') }}"></script>
<script defer src="{{ asset('lib/inttelinput/js/utils.js') }}"></script>
<script defer src="{{ asset('lib/inttelinput/js/data.js') }}"></script>
<script defer src="{{ asset('lib/inttelinput/js/init.js') }}"></script>
<script  src="{{ asset('lib/inttelinput/js/init.js') }}"></script>
@yield('scripts')
@stack('scripts')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    @if(session('success'))
        iziToast.success({
            title: 'Success',
            message: "{{ session('success') }}",
            position: 'topRight'
        });
    @endif

    @if(session('error'))
        iziToast.error({
            title: 'Error',
            message: "{{ session('error') }}",
            position: 'topRight'
        });
    @endif
</script>