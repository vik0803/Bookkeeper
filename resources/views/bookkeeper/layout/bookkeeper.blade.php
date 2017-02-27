@extends('layout.base')

@section('pageTitle', $pageTitle)

@section('body')
    <main class="container-main" id="mainContainer">
        @include('partials.navigation')

        @yield('header_content')

        <div class="container">
            @include('partials.flash')

            @yield('content')
        </div>

        @include('partials.footer')
    </main>
@endsection