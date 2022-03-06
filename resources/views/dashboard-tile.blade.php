<div
        style="grid-area: {{ $gridArea }};{{ $show ? '' : 'display:none' }}"
        class="overflow-hidden rounded relative bg-tile"
        {{ $refreshIntervalInSeconds ? "wire:poll.{$refreshIntervalInSeconds}s" : ''  }}
>
    {{ $slot }}
</div>