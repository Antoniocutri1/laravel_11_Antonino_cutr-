<div class="card mt-5 mx-2" style="width: 18rem;">
    @if ($product->img)
        <img src="{{Storage::url($product->img)}}" class="card-img-top" alt="immagine">
    @else 
        <img src="https://picsum.photos/200/300" class="card-img-top" alt="immagine">
    @endif
    <div class="card-body">
        <h3 class="card-title">{{$product->name}}</h3>
        <h5 class="card-text"> {{$product->type}}</h5>
        <p class="card-text">{{$product->description}}</p>
        <p class="card-text">{{$product->price}}</p>
    </div>
</div>