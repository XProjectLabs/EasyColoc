<x-app-layout>
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="container mt-4">
        <h1>Create Colocation</h1>

        <form action="{{ route('colocations.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Colocation Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <button class="btn btn-success">Create</button>
        </form>
    </div>
</x-app-layout>