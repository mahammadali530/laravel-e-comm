@include('frontend.partials.header')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <style>
    .container{
        margin-top:100px;
        float:right;
        
    }
    .row{
      /* margin-left:200px; */
    }
    .container button{
      width: 370px;
    }
   </style>
    @error('email')
    {{-- <div class="text-danger">{{ $message }}</div> --}}
    <div class="alert alert-danger" role="alert">
      {{ $message }}
    </div>
@enderror
    @error('password')
    <div class="alert alert-danger" role="alert">
      {{ $message }}
      @enderror
<div class="container">
 
    <div class="row">
        <form action="login" method="post">
            @csrf
            <div class="col-sm-4">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
               </div>
            <div class="col-sm-4">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div><br>
            
            <button type="submit" class="btn btn-primary ">Submit</button>
          </form>
    </div>
</div>