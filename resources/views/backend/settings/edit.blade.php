@extends('backend.layouts.app')

@section('title')
    设置 | @parent
@endsection

@section('content')

    @component('backend.components.form_update', ['formAction' => route('backend.settings.update', $setting->id)])

        @include('backend.settings._form')

    @endcomponent

@endsection
