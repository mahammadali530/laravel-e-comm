<style>
    .col-sm-3 img {
    width: 100px;
    height: 100px;
    border-radius: 3px;
    margin-bottom: 1rem;
}
.custom-product{
    margin-left:140px;
}
.cart-list-devider{
    border-bottom: 2px solid #000;
    margin-bottom: 20px;
    padding-bottom: 20px;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@include('frontend.partials.header')
<div class="custom-product">
    
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My orders</h4>
          
            @foreach ($orders as $items)
            <div class="row searched-item cart-list-devider">
                <div class="col-sm-3">
            <img src="{{ asset('storage/' . $items->image_1) }}" alt="Image of" >
                </div>
            <div class="col-sm-3">
                <div class="">
                    <h5>{{$items->status}}</h5>
                    <h5>{{$items->payment_method}}</h5>
                    <h5>{{$items->payment_status}}</h5>
                    <h5>{{$items->name}}</h5>
                    <h5>{{$items->number}}</h5>
                    <h5>{{$items->address}}</h5>
                    <h5>{{$items->pincode}}</h5>
                </div>
            </div>
            
        </div>
        @endforeach
          
    </div>
</div>