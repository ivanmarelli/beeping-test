<div wire:poll.120s>
    <h2 class="table-group-dividers">{{ $title }}</h2>

    <table class="table border table-sm">
        <thead>
            <tr class="table-dark">
                <th>Referencia</th>
                <th>Nombre del Cliente</th>
                <th>Total Qty</th>
                <th>Items</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order->order_ref }}</td>
                <td>{{ $order->customer_name }}</td>
                <td>{{ $order->totalQty() }}</td>
                <td>{{ $order->orderLines->count() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>