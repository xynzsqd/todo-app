<form {{ $attributes->class(['']) }} method={{ $attributes->get('method', 'POST') }}>
    @if ($attributes->get('method') === 'POST')
        @csrf
    @endif
    {{ $slot }}
</form>
