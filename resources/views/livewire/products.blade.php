<div wire:init="loadProducts" wire:poll.5s="loadProducts">
     <table class="table table-striped table-bordered mt-3" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Detail</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->detail }}</td>
            <td>

            @if($product->status == "pending")
            <span class="badge bg-primary" >Pending</span>
            @elseif($product->status == "approved")
            <span class="badge bg-success" >Approved</span>
            @elseif($product->status == "shipped")
            <span class="badge bg-success" >Shipped</span>
            @elseif($product->status == "delivered")
            <span class="badge bg-success" >Delivered</span>
            @else
            <span class="badge bg-danger" >Cancelled</span>
            @endif

            
            </td>
            <td><button wire:click="delete('{{ $product->id }}')"
            wire:confirm="Are you sure you want to remove this Product?" class="btn btn-danger">Delete</button></td>
        </tr>

            @endforeach
        </tbody>

     </table>

</div>
