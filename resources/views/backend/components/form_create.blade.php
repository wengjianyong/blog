@component('backend.components.form_base', [
    'formAction' => $formAction,
    'redirectUrl' => $redirectUrl
])
    {{ $slot }}
@endcomponent
