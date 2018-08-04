@extends('backend.layouts.app')

@section('content')

    @component('backend.components.table', [
        'paginator' => $settings,
        'columns' => [
            'id' => 'ID',
            'key' => '键名',
            'value' => '键值',
            'tag' => '标签'
        ],
        'hrefCreate' => route('backend.settings.create'),
        'hrefEdit' => route('backend.settings.edit', ':id'),
        'hrefDestroy' => route('backend.settings.destroy', ':id'),
    ])
    @endcomponent

@endsection
