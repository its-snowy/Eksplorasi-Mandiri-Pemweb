<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="mb-0 text-center">List Product</h1>
                    </div>
                    <hr />
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                                <th>Added</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $product->title }}</td>
                                <td class="align-middle">{{ $product->category }}</td>
                                <td class="align-middle">{{ $product->quantity}}</td></td>
                                <td class="align-middle">{{ $product->price }}</td>
                                <td class="align-middle">
                                    <button class="btn btn-success add">+</button>
                                    <button class="btn btn-danger subtract">-</button>
                                </td>
                                <td class="align-middle" id="cart-{{ $product->id }}">0</td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="7">Product not found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<script>
    document.querySelectorAll('.add').forEach((button) => {
        button.addEventListener('click', (e) => {
            const row = e.target.closest('tr');
            const quantityCell = row.querySelector('td:nth-child(4)');
            const cartCell = row.querySelector('td:last-child');

            const quantity = parseInt(quantityCell.textContent, 10);
            let cart = parseInt(cartCell.textContent, 10);

            if (cart < quantity) {
                cart += 1;
                cartCell.textContent = cart;
            }
        });
    });

    document.querySelectorAll('.subtract').forEach((button) => {
        button.addEventListener('click', (e) => {
            const row = e.target.closest('tr');
            const cartCell = row.querySelector('td:last-child');

            let cart = parseInt(cartCell.textContent, 10);

            if (cart > 0) {
                cart -= 1;
                cartCell.textContent = cart;
            }
        });
    });
</script>
