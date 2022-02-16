@props(['action', 'method' => 'GET'])

@php $real_method = ! in_array($method, ['GET', 'POST']) ? 'POST' : $method; @endphp

<form class="contents" method="{{ $real_method }}" action="{{ $action }}">
    @csrf
    @if (! in_array($method, ['GET', 'POST']))
        @method($method)
    @endif

    <button type="submit" {{ $attributes->merge(['class' => '']) }}>
        {{ $slot }}
    </button>
</form>
