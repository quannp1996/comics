@extends('appSection@frontEnd::' . $template . '.index')
@section('content')
    @include('appSection@frontEnd::'. $template . '.pages.home.includes.top')

    @include('appSection@frontEnd::'. $template . '.pages.home.includes.middle')

    @include('appSection@frontEnd::'. $template . '.pages.home.includes.bottom')
@endsection
