<form {{ $attributes->class(['']) }} method="POST">
    @csrf
    {{ $slot }}
</form>
