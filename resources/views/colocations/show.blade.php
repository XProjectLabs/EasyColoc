<x-app-layout>
    <div class="container mt-4">
        <h1>{{ $colocation->name }}</h1>

        <h4 class="mt-3">Members</h4>

        <ul class="list-group">
            @foreach($members as $member)
                <li class="list-group-item">
                    {{ $member->name }} ({{ $member->pivot->role }})
                </li>
            @endforeach
        </ul>
    </div>
    <form action="{{ route('colocations.cancel', $colocation->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <button type="submit">Cancel Colocation</button>
</form>
</x-app-layout>