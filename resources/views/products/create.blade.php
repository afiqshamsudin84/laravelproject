<x-app-layout>


    <div class="container">
        <div class="container">
            <a href="{{ route('products.store') }}" class="btn btn-primary my-3">Back</a>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create New Product</div>
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Price (RM)</label>
                                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                            </div>
                            <div class="form-group">
                                <label for="details">Details</label>
                                <textarea class="form-control" id="details" name="details"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="publish">Publish</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="publish" id="publish" value="1">
                                    <label class="form-check-label" for="publish">
                                      Yes
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="publish" id="publish" value="0" checked>
                                    <label class="form-check-label" for="publish">
                                      No
                                    </label>
                                  </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
