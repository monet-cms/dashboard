<div
        style="grid-area: {{ $gridArea }};{{ $show ? '' : 'display:none' }}"
        class="overflow-hidden rounded relative bg-tile"
        {{ $refreshIntervalInSeconds ? "wire:poll.{$refreshIntervalInSeconds}s" : ''  }}
>
    <div class="absolute inset-0 overflow-hidden p-4">
        {{ $slot }}
    </div>
</div>