<!DOCTYPE html>
<html>
    <head>
        <title>Order PDF</title>
    </head>
    <body>

        <div class="card">
        <div class="card-body">
        <div class="container mb-5 mt-3">

            <div class="col-md-12">
            <div class="text-center" align="center" style="color: blue;">
                <i class="fab fa-mdb fa-4x ms-0" style="color:#5d9fc5 ;"></i>
                <h1 class="pt-0"><b>NK ENTERPRISES</b></h1>
                <h4>No. 221/21, Kosgama, Sri Lanka</h4>
                <h4>+94 36 2251 767 / +94 70 6912 001</h4>
                <h4>nkenterprises@gmail.com</h4>
            </div>
           </div>
            <hr>
            <div class="container">
            <h1 align="center"><u>Order Details</u></h1>
                <ul>
                <li class="fs-5"><b>Order Date : </b>{{$orders->OrderDate}}</li><br>
                <li class="fs-5"><b>Customer Name : </b>{{$orders->CustomerName}}</li><br>
                <li class="fs-5"><b> BRN : </b>{{$orders->BRN}}</li><br>
                <li class="fs-5"><b> Address : </b>{{$orders->Address}}</li><br>
                <li class="fs-5"><b>Payment Type : </b>{{$orders->Type}}</li><br>
                <li class="fs-5"><b>Reff Name : </b>{{$orders->ReffName}}</li><br>
                <li class="fs-5"><b>Product Name : </b>{{$orders->ProductName}}</li><br>
                <li class="fs-5"><b>Quantity : </b>{{$orders->Qty}}</li><br>
                <li class="fs-5"><b>Price per unit : </b>Rs.{{$orders->Rate}}.00</li><br>
                <li class="fs-5"><b>Discount : </b>{{$orders->Discount}}%</li><br>
                <li class="fs-5"><b>Gross Amount : </b>Rs.{{$orders->GrossAmount}}.00</li><br>
                <li class="fs-5"><b>Net Amount : </b>Rs.{{$orders->NetAmount}}.00</li><br>
</ul>
      </div>
    </div>
  </div>
</div> 
    </body>
</html>