@extends('layouts.app')
@section('wrapper')
@include('layouts.partials.topbar')
@include('layouts.partials.nav')
<div id="all">
    <div id="content">   
        @yield('content')
    </div>
    @include('layouts.partials.footer')
    @include('layouts.partials.copyright')
</div>
<!-- /#all -->
@endsection
