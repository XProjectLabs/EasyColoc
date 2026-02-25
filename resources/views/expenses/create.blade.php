<x-app-layout>
<div class="container py-4">

    <h2 class="text-white mb-4">➕ Add Expense</h2>

    <form method="POST" action="{{ route('expenses.store', $colocation->id) }}">
        @csrf

        <div class="mb-3">
            <label class="form-label text-white">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label text-white">Amount</label>
            <input type="number" name="amount" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label text-white">Category</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label text-white">Payer</label>
            <select name="payer_id" class="form-control">
                @foreach($members as $member)
                    <option value="{{ $member->id }}">{{ $member->name }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">Save</button>
    </form>

</div>
</x-app-layout>