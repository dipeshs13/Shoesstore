@include("Layouts.header")

@push('title')
    <title>Order History</title>
@endpush

<div class="container mx-auto mt-10 px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Order History</h1>

    @if($orders->isEmpty())
        <p class="text-gray-700">You have no orders yet.</p>
    @else
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-4 py-2 text-left">Order ID</th>
                        <th class="px-4 py-2 text-left">Name</th>
                        <th class="px-4 py-2 text-left">Shoes</th>
                        <th class="px-4 py-2 text-left">Size</th>
                        <th class="px-4 py-2 text-left">Phone Number</th>
                        <th class="px-4 py-2 text-left">Payment Method</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr class="border-b">
                            <td class="px-4 py-2">{{ $order->id }}</td>
                            <td class="px-4 py-2">{{ $order->name }}</td>
                            <td class="px-4 py-2">{{ $order->shoes }}</td>
                            <td class="px-4 py-2">{{ $order->shoe_size }}</td>
                            <td class="px-4 py-2">{{ $order->phone_number }}</td>
                            <td class="px-4 py-2">{{ ucfirst($order->payment_method) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>




