@include('header')

     <div class="p-3 mb-2 bg-secondary text-dark">
        <br>
        <div class="container">
        <h2 class="mt-4" style="color:white;">Update Order</h2>
        <br> 
        
        <div align="right">
            <a href="{{url('create')}}" class="btn btn-info">Create Order</a>
        </div>
        <br>
        <form action="{{url('update', $orders->id)}}" method="POST" enctype="multipart/form-data">
          <div class="bg-dark  rounded-5 shadow-5-strong p-5">
          @csrf
        <div class="p-3 mb-2 bg-light text-black">
        <div class="row">
            <div class="col-6">
             <div class="mb-3">
             <div class="fw-bold">            
                <label for="exampleInputEmail1" class="form-label"> Order Date </label> 
            </div>
                <input type="date" class="form-control" id="exampleInputEmail1" name="date" value="{{$orders->OrderDate}}">
            </div>
            <br>

            <div class="mb-3">
            <div class="fw-bold"> 
                <label for="exampleInputEmail1" class="form-label">Customer Code</label>
            </div>
                <input type="text" class="form-control" id="exampleInputEmail1" name="code" value="{{$orders->CustomerCode}}">
            </div>
            <br>

            <div class="mb-3">
            <div class="fw-bold"> 
            <label for="exampleInputEmail1" class="form-label">Customer Name</label>
            </div>
                <select class="form-select" aria-label="Default select example" name="customername">    
                <option>{{$orders->CustomerName}}</option> 
                <option value="Chanuka">Chanuka</option>     
                <option value="Isuru">Isuru</option>    
                <option value="Thushan">Thushan</option>    
                <option value="Udara">Udara</option>    
                <option value="Chamara">Chamara</option>      
                </select>
            </div>
           <br>

           <div class="mb-3">
           <div class="fw-bold"> 
                  <label for="exampleInputEmail1" class="form-label">Address</label>
            </div>
                  <select class="form-select" aria-label="Default select example" name="ads">
                        <option>{{$orders->Address}}</option>
                        <option value="Kosagama">Kosgama</option>    
                        <option value="Awissawella">Awissawella</option>    
                        <option value="Kaduwela">Kaduwela</option>    
                        <option value="Malabe">Malabe</option>    
                        <option value="Colombo">Colombo</option>      
                    </select>
            </div>
            <br>

            <div class="row g-2">
                    <div class="col-md">
                    <div class="fw-bold"> 
                    <label for="exampleInputEmail1" class="form-label">City</label>
                    </div>
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" name="city" value="{{$orders->City}}">
                        <label for="floatingInputGrid">City</label>
                      </div>
                    </div>
                    <div class="col-md">
                    <div class="fw-bold"> 
                    <label for="exampleInputEmail1" class="form-label">Route</label>
                    </div>
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" name="route"  value="{{$orders->Route}}">
                        <label for="floatingInputGrid">Route</label>
                      </div>
                    </div>
            </div>

            <br>

            <div class="mb-3">
            <div class="fw-bold">             
                <label for="exampleInputEmail1" class="form-label"> BRN </label>
            </div> 
                <input type="text" class="form-control" id="exampleInputEmail1" name="brn" value="{{$orders->BRN}}">
                <br>
                <div class="fw-bold">
                <label>Type</label>
            </div>
                <select class="form-select" aria-label="Default select example" name="type"> 
                <option>{{$orders->Type}}</option>   
                <option value="Cash">Cash</option>    
                <option value="Cheque">Cheque</option>
                </select>
            </div>
            <br>

            <div class="mb-3">
            <div class="fw-bold"> 
                <label for="exampleInputEmail1" class="form-label">Reff Name </label>
            </div>
                <select class="form-select" aria-label="Default select example" name="reffname">    
                        <option>{{$orders->ReffName}}</option>
                        <option value="Isuru">Isuru</option>    
                        <option value="Chanuka">Chanuka</option>    
                        <option value="Sadil">Sadil</option>    
                        <option value="Udara">Udara</option>    
                        <option value="Thushan">Thushan</option>     
                </select>
            </div>
</div>
        
    <div class="col-6">

        <div class="mb-3">
        <div class="fw-bold"> 
            <label for="exampleInputEmail1" class="form-label">Product Name</label>
        </div>
                <select class="form-select" aria-label="Default select example" name="productname">
                    <option>{{$orders->ProductName}}</option>
                    <option value="Angle valve mini PVC">Angle valve mini PVC</option>    
                    <option value="Ball cock 2">Ball cock 2</option>    
                    <option value="Hammer Chisel 14 Flat">Hammer Chisel 14 Flat</option>    
                    <option value="Nut 4mm - 250g">Nut 4mm - 250g</option>    
                    <option value="Silicon Gp Clear">Silicon Gp Clear</option>      
                </select> 
         </div>

         <div class="row g-2">
                    <div class="col-md">
                    <div class="fw-bold"> 
                    <label for="exampleInputEmail1" class="form-label">Available Quantity</label>
                    </div>
                      <div class="form-floating">
                        <input type="number" class="form-control" id="floatingInputGrid" name="avqty" value="{{$orders->AvailableQty}}">
                        <label for="floatingInputGrid">Available Qty.</label>
                      </div>
                    </div>
                    <div class="col-md">
                    <div class="fw-bold"> 
                    <label for="exampleInputEmail1" class="form-label">Quantity</label>
                    </div>
                      <div class="form-floating"> 
                        <input type="number" class="form-control" id="floatingInputGrid" name="quantity"  value="{{$orders->Qty}}">
                        <label for="floatingInputGrid">Qty.</label>
                      </div>
                    </div>
                  </div>
        <br>

        <div class="row g-2">
                    <div class="col-md">
                    <div class="fw-bold"> 
                    <label for="exampleInputEmail1" class="form-label">Rate</label>
                    </div>
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" name="rate" value="{{$orders->Rate}}">
                        <label for="floatingInputGrid">Rate</label>
                      </div>
                    </div>
                    <div class="col-md">
                    <div class="fw-bold"> 
                    <label for="exampleInputEmail1" class="form-label">Discount</label>
                    </div>
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" name="discount"  value="{{$orders->Discount}}">
                        <label for="floatingInputGrid">Discount</label>
                      </div>
                    </div>
                  </div>
        <br>
        <div class="mb-3">
        <div class="fw-bold"> 
            <label for="exampleInputPassword1" class="form-label">Amount</label>
        </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rs.</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="amount" value="{{$orders->Amount}}">
                    <span class="input-group-text">.00</span>
             </div>
            <br>
            <div class="fw-bold"> 
            <label for="exampleInputPassword1" class="form-label">Cost</label>
            </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rs.</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="cost" value="{{$orders->Cost}}">
                    <span class="input-group-text">.00</span>
                  </div>
            <br>
            <div class="fw-bold"> 
            <label for="exampleInputPassword1" class="form-label">Discount</label>
            </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Rs.</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="disco" value="{{$orders->Disc}}">
                    <span class="input-group-text">00</span>
                  </div>
            <br>
            <div class="fw-bold"> 
            <label for="exampleInputPassword1" class="form-label">Gross Amount</label>
            </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rs.</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="gamount" value="{{$orders->GrossAmount}}">
                    <span class="input-group-text">.00</span>
                  </div>
            <br>
            <div class="fw-bold"> 
            <label for="exampleInputPassword1" class="form-label">Net Amount</label>
            </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rs.</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="namount" value="{{$orders->NetAmount}}">
                    <span class="input-group-text">.00</span>
                  </div>
            <br>
        </div>
    </div>    
</div>
</div>

            <br><br>

            

            <button type="submit" class="btn btn-primary">Save Changes</button>
            <button type="submit" class="btn btn-danger">Cancel</button>
</div>
          </form>

        <br><br>
</div>

@include('footer')