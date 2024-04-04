<div wire:poll.120s>
    @if($executed)
    <p><strong>Executed:</strong> 

    <small class="fst-italic">
        Pedidos: <span class="badge text-bg-secondary">{{ $executed->total_orders }}</span> 
        - Total: <span class="badge text-bg-secondary">{{ $executed->total_cost }}</span>
        - {{ $executed->created_at }}</small>
    </p>
    @endif
    
</div>
