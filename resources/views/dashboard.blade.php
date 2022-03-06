<x-dashboard-test>
    @forelse($dashboard->tiles as $tile)
        {{{$tile->html}}}
    @empty
        <h1>No tiles</h1>
    @endforelse
</x-dashboard-test>
