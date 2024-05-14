<x-app-layout>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Products</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <form action="{{ route('products.index') }}" method="GET" class="input-group">
                                <input type="text" name="search" class="form-control mr-sm-2" placeholder="Search">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                        </div>
                        <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Create New Product</a>
                        <table class="table table-info table-striped-columns">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price (RM)</th>
                                    <th scope="col">Details</th>
                                    <th scope="col">Publish</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->details }}</td>
                                        <td>{{ $product->publish ? "Yes":"No" }}</td>
                                        <td>
                                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info">Show</a>
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>