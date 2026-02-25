<x-app-layout>
<div class="container py-4">

    <h2 class="mb-4 text-white">💸 Expenses - {{ $colocation->name }}</h2>

    <a href="{{ route('expenses.create', $colocation->id) }}" 
       class="btn btn-primary mb-3">
        + Add Expense
    </a>

    <div class="card bg-dark text-white">
        <div class="card-body">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Amount</th>
                        <th>Payer</th>
                        <th>Category</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($expenses as $expense)
                    <tr>
                        <td>{{ $expense->title }}</td>
                        <td>{{ $expense->amount }} DH</td>
                        <td>{{ $expense->payer->name }}</td>
                        <td>{{ $expense->category->name }}</td>
                        <td>{{ $expense->date }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
</x-app-layout>