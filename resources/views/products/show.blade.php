<x-app-layout>
    <div class="container">
        <div class="container">
            <a href="{{ route('products.store') }}" class="btn btn-primary my-3">Back</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h1 class="card-header">Product's Details</h1>
                    <div class="card-body">
                        <p><strong>Name:</strong> {{ $product->name }}</p>
                        <p><strong>Price (RM):</strong> {{ $product->price }}</p>
                        <p><strong>Details:</strong> {{ $product->details }}</p>
                        <p><strong>Publish:</strong> {{ $product->publish? "Yes":"No" }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
