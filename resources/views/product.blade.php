<x-frontend.master>


    <div class="container marketing">
        <br /><br /><br /><br />
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4 mb-2">
                <div class="card">
                    <div class="card-header">
                        <img src="{{ asset('storage/products/'.$product->image) }}" height="350" />
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-8 mb-2">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $product->title }}</h4>
                    </div>
                    <div class="card-body">
                        <p>Price: {{ $product->price }}</p>
                        <p>Description: {{ $product->description }}</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-sm btn-primary" href="#">Add to Cart</a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

    </div>
    <!-- /END THE FEATURETTES -->
    @push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
    @endpush
</x-frontend.master>