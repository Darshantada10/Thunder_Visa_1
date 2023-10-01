@extends('Layouts.FrontEnd.app')

@section('content')
    
@push('footer_scripts')
<script src="{{asset('Customs/FrontEnd/blogs-page.js')}}"></script>

@endpush



<section class="news-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="sub-title">News & Updates</span>
            <h2>Latest news directly <br> from the <span class="color3">blog</span></h2>
        </div>

        <div class="row" id="dynamic_blogs">
            <!-- News Block -->
            {{--  --}}


        

            <!-- News Block -->
            

        </div>
    </div>
</section>

@endsection
