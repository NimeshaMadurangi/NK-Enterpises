@include('header')

<div class="container">
    <h3 class="mt-4">Add GRN</h3>

    <div>

      @if(session()->has('message'))

      <div class="alert alert-success">
          {{session()->get('message')}}   
      </div>
      @endif
    </div>

    @if ($errors->any())
    <div class="alert alert-danger" role="alert">

        <div>
            @foreach ($errors->all() as $error)
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            </svg>&nbsp{{ $error }} <br>
            @endforeach
        </div>
    </div>
@endif
   

    <form method="POST" action="/grnInsert">
      {{ csrf_field() }}
    
    <div class="row">
        <div class="col-6">
           
                <div class="mb-3">
                  <label for="validationDefault04" class="form-label">Product name</label>
                  <select required name="productName" class="form-select" aria-label="Default select example" id="product" onchange="get_product_info(this.value)">
                    <option selected disabled value="">Choose...</option>
                    
                    @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                  
                </select>
                </div>

                <div class="row g-2">
                  <div class="col-md">
                    <label for="floatingInputGrid">Last Price</label>
                    <div class="card">
                      <div class="card-body"> 
                        <label for="price" id="LPrice">0</label>    
                                     
                      </div>
                    </div>
                  </div>
                  <div class="col-md">
                    <label for="floatingInputGrid">Available quantity</label>
                    <div class="card">
                      <div class="card-body"> 
                        <label for="price" id="AQ">0</label>   
                      </div>
                    </div>
                  </div>
                </div>  
                
                
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Supplier Name</label>
                  <input type="text" class="form-control"  id="validationDefault02"   name="SupplierName" placeholder="Enter supplier name ">
                 
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">GRN Number</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="grnNumber" placeholder="Enter GRN number ">
                  </div>
    </div>
    
        <div class="col-6">
 
       
            
                <label for="validationDefaultUsername" class="form-label">Price</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rs.</span>
                    <input type="text" class="form-control" id="validationDefaultUsername" required aria-label="Amount (to the nearest dollar)" name="price" placeholder="Enter Price">
                    
                  </div>
                <label for="exampleInputPassword1" class="form-label">Quantity</label>
                <div class="input-group mb-3">
                    <input type="number" id="validationDefaultUsername" required class="form-control" name="qut" placeholder="Enter quantity" aria-label="Username" aria-describedby="basic-addon1" autocomplete="off" min="0" >
                    
                  </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Cost</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rs.</span>
                        <input type="text" id="validationDefaultUsername" required name="cost" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Enter cost">
                       
                      </div>
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Discount</label>
                      <div class="input-group mb-3">
                        <input type="text" name="discount" class="form-control" placeholder="Enter Discount" aria-label="Username" aria-describedby="basic-addon1">
                        <span class="input-group-text" id="basic-addon1">%</span>
                      </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" name="discrption" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
            <button type="submit" class="btn btn-primary">Add</button> 
            <input class="btn btn-danger"  type="reset" value="Clear">
            
                    
    </div> 
</form>
</div>




<br><br><br><br><br><br>
</div>

<script>

  function get_product_info(id){

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    

    jQuery.ajax({
      type: "GET",
      url: "/get_product_info/"+id,
      dataType: "json",
      success: function (response) {
        $("#AQ").text(response.qty);
        $("#LPrice").text(response.price);
      }
    });

  }

</script>

@include('footer')