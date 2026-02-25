<x-app-layout>
    <div class="container mt-4">
        <h1 class="mb-3">My Colocations</h1>

        <a href="{{ route('colocations.create') }}" class="btn btn-primary mb-3">
            + Create New Colocation
        </a>

        <ul class="list-group">
            @forelse($colocations as $col)
                <li class="list-group-item d-flex justify-content-between">
                    <span>{{ $col->name }}</span>
                    <a href="{{ route('colocations.show', $col->id) }}" class="btn btn-sm btn-outline-dark">
                        View
                    </a>
                </li>
            @empty
                <li class="list-group-item">No colocations yet</li>
            @endforelse
        </ul>
    </div>
</x-app-layout>