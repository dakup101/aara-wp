@if ($type == 'link')
    <a {{ $attributes->merge([
        'class' => $class,
        'href' => $url,
    ]) }}>
        {{ $text }}
    </a>
@else
    <button {{ $attributes->merge([
        'class' => $class,
    ]) }}>
        {{ $text }}
    </button>
@endif
