<style>
    .col-sm-3 img {
    width: 100px;
    height: 100px;
    border-radius: 3px;
    margin-bottom: 1rem;
}
.custom-product{
    margin-left:350px;
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
 
    <div class="col-sm-7">
        <table class="table">
           
            <tbody>
              <tr>
                <th>Amount</th>
                <td>${{$total}}</td>
               
              </tr>
              <tr>
                <th>Tax</th>
                <td> $ 0</td>
              </tr>
              <tr>
                <th>delivery</th>
                <td> $ 10</td>
              </tr>
              <tr>
                <th>Total Amount</th>
                <td>$ {{$total+10}}</td>
              </tr>
            </tbody>
          </table>  
          <div><br>
           
            <form action="/orderplace" method="post">
                @csrf
                <div class="mb-3">
                  {{-- <input type="hidden" name="product_id" value="{{$products['product_id']}}"> --}}
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                  </div>
                  <div class="sm-3">
                    <label for="exampleInputPassword1" class="form-label">Phone Number</label>
                    <input type="text" class="form-control"  name="number" placeholder="Enter Your Number" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                    pattern="\d{10}" title="please enter exactly 10 digits." >
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Address</label>
                    <textarea type="text" name="address" class="form-control" placeholder="Enter Your Address" ></textarea>
                     </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Pin Code</label>
                    <input type="text"  name="pincode" class="form-control" placeholder="Enter Your PinCode" >
                  </div>
                
                <div class="form-group">
                  <label for="pwd" class="form-label">Payment Method</label><br>
                  <input type="radio" value="cash" name="payment"  ><span>Onlin payment</span><br><br>
                  <input type="radio"  value="cash" name="payment"  ><span>Emi payment</span><br><br>
                  <input type="radio"  value="cash" name="payment" ><span>cash on delivery</span><br><br>
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>    
        </div>  
    </div>
</div>