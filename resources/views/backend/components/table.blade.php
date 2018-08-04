{{-- Table --}}
<table class="striped highlight responsive-table">
    <thead>
        <tr>
            @foreach ($columns as $field => $displayName)
                <th>{{ $displayName }}</th>
            @endforeach

            <th>操作</th>
        </tr>
    </thead>

    <tbody>

    @foreach ($paginator as $item)
        <tr>

        @foreach ($columns as $field => $displayName)
             <td> {{ $item->$field }} </td>
        @endforeach

            <td>
                @if (!empty($hrefShow) && empty($showTrash))
                    <a class="btn-floating waves-effect waves-light " href="{{ $hrefShow }}" identifier="{{ $item->id }}">
                        <i class="material-icons">visibility</i>
                    </a>
                @endif

                @if (!empty($hrefEdit) && empty($showTrash))
                    <a class="btn-floating waves-effect waves-light blue" href="{{ $hrefEdit }}" identifier="{{ $item->id }}">
                        <i class="material-icons">mode_edit</i>
                    </a>
                @endif

                @if (!empty($hrefDestroy) && empty($showTrash))
                    <a class="btn-floating waves-effect waves-light red" href="{{ $hrefDestroy }}" identifier="{{ $item->id }}">
                        <i class="material-icons">delete</i>
                    </a>
                @endif

                @if (!empty($hrefForceDelete) && !empty($showTrash))
                    <a class="btn-floating waves-effect waves-light red" href="{{ $hrefForceDelete }}" identifier="{{ $item->id }}">
                        <i class="material-icons">delete_forever</i>
                    </a>
                @endif

                @if (!empty($hrefRestore) && !empty($showTrash))
                    <a class="btn-floating waves-effect waves-light indigo" href="{{ $hrefRestore }}" identifier="{{ $item->id }}">
                        <i class="material-icons">refresh</i>
                    </a>
                @endif

                {{ $additional_action or null }}
            </td>

        </tr>
    @endforeach

    </tbody>
</table>

{{-- Pagination --}}
<div class="center-align">
    {{ $paginator->appends(request()->query())->links('vendor.pagination.materialize') }}
</div>

{{-- FAB --}}
@component('backend.components.fab', [
    'link' => $hrefCreate ?? null,
    'icon' => $iconCreate ?? null,
    'color' => $iconColor ?? null
])
    {{ $fab or null }}
@endcomponent
