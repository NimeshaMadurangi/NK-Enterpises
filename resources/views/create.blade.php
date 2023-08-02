@include('header')
<div class="container-fluid">
     <div class="p-3 mb-2 bg-secondary text-dark">
     <div class="container">
        <h2 class="mt-4" style="color: white;"> Create Order</h2>
        <br>

        <form action="{{url('upload')}}" method="POST" enctype="multipart/form-data">
          <div class="bg-dark  rounded-5 shadow-5-strong p-5">
          @csrf
        <div class="p-3 mb-2 bg-light text-black" style="border-radius: 25px;">
        <br>
        <div class="row">
            <div class="col-6">
             <div class="mb-3">
             <div class="fw-bold">            
                <label for="exampleInputEmail1" class="form-label"> Order Date </label> 
            </div>
                <input type="date" class="form-control" id="exampleInputEmail1" name="date" placeholder="--Choose Date--">
            </div>

            <span style="color:red;">
                @error('date')
                {{$message}}
                @enderror
              </span>
            
            <br>

            <div class="mb-3">
            <div class="fw-bold"> 
                <label for="exampleInputEmail1" class="form-label">Customer Code</label>
            </div>
                <input type="text" class="form-control" id="exampleInputEmail1" name="code">
            </div>
            <br>

            <div class="mb-3">
            <div class="fw-bold"> 
            <label for="exampleInputEmail1" class="form-label">Customer Name</label>
            </div>
                <select class="form-select" aria-label="Default select example" name="customername" required> 
                <option>--Select Customer Name--</option>
                <option value="Mallawaarachchi AKSM">Mallawaarachchi AKSM</option>    
                <option value="Perera KLKP">Perera KLKP</option>    
                <option value="Liyanage WPSG">Liyanage WPSG</option>    
                <option value="Dayarathna LKNM">Dayarathna LKNM</option>    
                <option value="Silva GVK">Silva GVK</option>
                <option value="Bandara SMNJ">Bandara SMNJ</option> 
                <option value="Jayakodi MNHG">Jayakodi MNHG</option>
                <option value="Fonseka ABCD">Fonseka ABCD</option> 
                <option value="Senanayake KSCF">Senanayake KSCF</option>
                <option value="Gayan NSDB">Gayan NSDB</option>       
                </select>
            </div>

           <br>

           <div class="mb-3">
           <div class="fw-bold"> 
                  <label for="exampleInputEmail1" class="form-label">Address</label>
            </div>
                  <select class="form-select" aria-label="Default select example" name="ads">
                        <option>--Select Address--</option>
                        <option value="Kosgama">Kosgama</option>    
                        <option value="Awissawella">Awissawella</option>    
                        <option value="Kaduwela">Kaduwela</option>    
                        <option value="Malabe">Malabe</option>    
                        <option value="Colombo">Colombo</option>
                        <option value="Kadawatha">Kadawatha</option>
                        <option value="Athurigiriya">Athurugiriya</option>
                        <option value="Pannipitiya">Pannipitiya</option>    
                    </select>
            </div>
            <br>

            <div class="row g-2">
                    <div class="col-md">
                    <div class="fw-bold"> 
                    <label for="exampleInputEmail1" class="form-label">City</label>
                    </div>
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" name="city" placeholder="--Eg : Malabe-">
                        <label for="floatingInputGrid">City</label>
                      </div>
                    </div>
                    <div class="col-md">
                    <div class="fw-bold"> 
                    <label for="exampleInputEmail1" class="form-label">Route</label>
                    </div>
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" name="route">
                        <label for="floatingInputGrid">Route</label>
                      </div>
                    </div>
            </div>

            <br>

            <div class="mb-3">
            <div class="fw-bold">             
                <label for="exampleInputEmail1" class="form-label"> BRN </label>
            </div> 
                <input type="text" class="form-control" id="exampleInputEmail1" name="brn">
                <br>
                <div class="fw-bold">
                <label>Type</label>
            </div>
                <select class="form-select" aria-label="Default select example" name="type">
                <option>--Choose Payment Type--</option>   
                <option value="cash">Cash</option>    
                <option value="cheque">Cheque</option>
                </select>
            </div>

            <br>

            <div class="mb-3">
            <div class="fw-bold"> 
                <label for="exampleInputEmail1" class="form-label">Reff Name </label>
            </div>
                <select class="form-select" aria-label="Default select example" name="reffname"> 
                <option>--Select Reff Name--</option>   
                <option value="Chanuka">Chanuka</option>    
                <option value="Isuru">Isuru</option>    
                <option value="Thushan">Thushan</option>    
                <option value="Udara">Udara</option>    
                <option value="Chamara">Chamara</option>
                <option value="Naveen">Naveen</option>
                <option value="Sadil">Sadil</option>     
                </select>
            </div>

</div>
        
    <div class="col-6">

        <div class="mb-3">
        <div class="fw-bold"> 
            <label for="exampleInputEmail1" class="form-label">Product Name</label>
        </div>
                <select class="form-select" aria-label="Default select example" name="productname">
                  <option>--Select Product Name--</option>
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
                        <input type="number" class="form-control" id="floatingInputGrid" name="avqty">
                        <label for="floatingInputGrid">Available Qty.</label>
                      </div>
                    </div>
                    <div class="col-md">
                    <div class="fw-bold"> 
                    <label for="exampleInputEmail1" class="form-label">Quantity</label>
                    </div>
                      <div class="form-floating"> 
                        <input type="number" class="form-control" id="floatingInputGrid" name="quantity">
                        <label for="floatingInputGrid">Qty.</label>
                      </div>
                      
                    <span style="color:red;">
                @error('quantity')
                {{$message}}
                @enderror
              </span>

                    </div>
                  </div>
        <br>

        <div class="row g-2">
                    <div class="col-md">
                    <div class="fw-bold"> 
                    <label for="exampleInputEmail1" class="form-label">Rate</label>
                    </div>
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" name="rate">
                        <label for="floatingInputGrid">Rate</label>
                      </div>
                    </div>
                    <div class="col-md">
                    <div class="fw-bold"> 
                    <label for="exampleInputEmail1" class="form-label">Discount</label>
                    </div>
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" name="discount">
                        <label for="floatingInputGrid">Discount</label>
                      </div>

                      
                  <span style="color:red;">
                @error('discount')
                {{$message}}
                @enderror
              </span>
              
                    </div>
                  </div>
        <br>
        <div class="mb-3">
        <div class="fw-bold"> 
            <label for="exampleInputPassword1" class="form-label">Amount</label>
        </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rs.</span>
                    <input type="text" class="form-control" aria-label="Amount" name="amount">
                    <span class="input-group-text">.00</span>
             </div>

             <span style="color:red;">
                @error('amount')
                {{$message}}
                @enderror
              </span>

            <br>
            <div class="fw-bold"> 
            <label for="exampleInputPassword1" class="form-label">Cost</label>
            </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rs.</span>
                    <input type="text" class="form-control" aria-label="Amount" name="cost">
                    <span class="input-group-text">.00</span>
                  </div>
            <br>
            <div class="fw-bold"> 
            <label for="exampleInputPassword1" class="form-label">Discount</label>
            </div>
                <div class="input-group mb-3">
                <span class="input-group-text">Rs.</span>
                    <input type="text" class="form-control" aria-label="Amount" name="disco">
                    <span class="input-group-text">00</span>
                  </div>

            <br>
            <div class="fw-bold"> 
            <label for="exampleInputPassword1" class="form-label">Gross Amount</label>
            </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rs.</span>
                    <input type="text" class="form-control" aria-label="Amount" name="gamount">
                    <span class="input-group-text">.00</span>
                  </div>
            <br>
            <div class="fw-bold"> 
            <label for="exampleInputPassword1" class="form-label">Net Amount</label>
            </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rs.</span>
                    <input type="text" class="form-control" aria-label="Amount" name="namount">
                    <span class="input-group-text">.00</span>
                  </div>
            <br>

        </div>
    </div>    
</div>
<br>
</div>

            <br><br>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-danger" href="{{url('create')}}">Reset</a>
            </div>
          </form>

        <br><br>
</div>
</div>
</div>
@include('footer')


