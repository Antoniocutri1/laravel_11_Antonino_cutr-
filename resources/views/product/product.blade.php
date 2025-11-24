<x-layout>

    <x-navbar/>


    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            @foreach ($products as $product)
                <div class="col-md-4 col-sm-6 mb-3 d-flex justify-content-center">
                    <div class="card mt-5 mx-2" style="width: 18rem;">
                        <div class="card-body">
                            <h3 class="card-title">{{$product->name}}</h3>
                            <h5 class="card-text"> {{$product->type}}</h5>
                            <p class="card-text">{{$product->description}}</p>
                            <p class="card-text">{{$product->price}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    

</x-layout>