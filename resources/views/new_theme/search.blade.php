@extends('new_theme.layout.main')
@push('styles')

@endpush

@section('new_theme_content')

@endsection


@push('scripts')
    <!-- LOADING JS FOR PAGE-->
    <script src="{{url("public/newtheme/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js")}}"></script>
    <script src="{{url("public/newtheme/assets/libs/nst-slider/js/jquery.nstSlider.min.js")}}"></script>
    <script src="{{url("public/newtheme/assets/libs/plus-minus-input/plus-minus-input.js")}}"></script>
    <script src="{{url("public/newtheme/assets/js/pages/sidebar.js")}}"></script>
    <script src="{{url("public/newtheme/assets/js/pages/result.js")}}"></script>
@endpush
