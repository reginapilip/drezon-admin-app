@extends('layouts.master-layouts')
@section('title') @lang('translation.Starter_Page') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Utility @endslot
        @slot('title') Starter Page @endslot
    @endcomponent
@endsection
