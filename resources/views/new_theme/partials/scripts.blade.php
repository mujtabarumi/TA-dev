@if(isset($scripts) && !blank($scripts))
    @foreach($scripts as $script)
        <script src="{{ $script }}"></script>
    @endforeach
@endif
@stack('pre-scripts')
<!-- LIBRARY JS-->
<script src="{{url('public/newtheme/assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('public/newtheme/assets/libs/detect-browser/browser.js')}}"></script>
<script src="{{url('public/newtheme/assets/libs/smooth-scroll/jquery-smoothscroll.js')}}"></script>
<script src="{{url('public/newtheme/assets/libs/wow-js/wow.min.js')}}"></script>
<script src="{{url('public/newtheme/assets/libs/slick-slider/slick.min.js')}}"></script>
<script src="{{url('public/newtheme/assets/libs/selectbox/js/jquery.selectbox-0.2.js')}}"></script>
<script src="{{url('public/newtheme/assets/libs/please-wait/please-wait.min.js')}}"></script>
<script src="{{url('public/newtheme/assets/libs/fancybox/js/jquery.fancybox.js')}}"></script>
<script src="{{url('public/newtheme/assets/libs/fancybox/js/jquery.fancybox-buttons.js')}}"></script>
<script src="{{url('public/newtheme/assets/libs/fancybox/js/jquery.fancybox-thumbs.js')}}"></script>
<!--script(src="assets/libs/parallax/jquery.data-parallax.min.js")-->

@stack('scripts')


