<x-dashboard>
    @forelse($dashboard->tiles as $tile)
        <livewire:is :component="$tile->name" :position="$tile->position"/>
    @empty
        <h1>No tiles</h1>
    @endforelse
</x-dashboard>
