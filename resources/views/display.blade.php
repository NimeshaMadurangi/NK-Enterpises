@include('header')
<div class="container-fluid">
<div class="p-3 mb-2 bg-secondary text-black"> 
    <br> 
    <div class="container-fluid"> 
<div class="p-3 mb-2 bg-light text-black" style="border-radius: 25px;">  
        <h3 class="mt-4"> Manage Order</h3>
        <br>
        <div>
            <a href="{{url('create')}}" class="btn btn-info">Create Order</a>
        </div>

        <form action="{{url('search')}}" align="right">

            <input type="search" name="search" placeholder="Search for something">

            <Button type="Sumbit" value="Search">Search</button>

            <br>

        </form>
<br>

        <div>

            @if(session()->has('message'))

            <div class="alert alert-success">

                {{session()->get('message')}}

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    
            </div>

            @endif

        </div>


        <table class="table table-transparent table-striped">
            <tr style="color: black;">
                <th>Order Date</th>
                <th>Customer Code</th>
                <th>Customer Name</th>
                <th>Address</Address></th>
                <th>City</th>
                <th>Route</th>
                <th>BRN</th>
                <th>Type</th>
                <th>Reff Name</th>
                <th>Product Name</th>
                <th>Available Quantity</th>
                <th>Quantity</th>
                <th>Rate</th>
                <th>Discount(%)</th>
                <th>Amount</th>
                <th>Cost</th>
                <th>Discount</th>
                <th>Gross Amount</th>
                <th>Net Amount</th>
                <th>Action(Print/Update/Delete)</th>
            </tr>
            
            @foreach($data as $orders)

            <tr>
                <td>{{$orders->OrderDate}}</td>
                <td>{{$orders->CustomerCode}}</td>
                <td>{{$orders->CustomerName}}</td>
                <td>{{$orders->Address}}</td>
                <td>{{$orders->City}}</td>
                <td>{{$orders->Route}}</td>
                <td>{{$orders->BRN}}</td>
                <td>{{$orders->Type}}</td>
                <td>{{$orders->ReffName}}</td>
                <td>{{$orders->ProductName}}</td>
                <td>{{$orders->AvailableQty}}</td>
                <td>{{$orders->Qty}}</td>
                <td>{{$orders->Rate}}</td>
                <td>{{$orders->Discount}}</td>
                <td>{{$orders->Amount}}</td>
                <td>{{$orders->Cost}}</td>
                <td>{{$orders->Disc}}</td>
                <td>{{$orders->GrossAmount}}</td>
                <td>{{$orders->NetAmount}}</td>
                <td>
                    <a class="btn btn-success" href="{{url('print_pdf',$orders->id)}}">PDF</a>
                    <a href="{{url('update_view',$orders->id)}}" class="btn btn-info">Edit</a>
                    <a href="{{url('delete',$orders->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>


            @endforeach             
</table>
</div>
<div>
<br><br>
<br><br>

</div>
</div>
</div>
@include('footer')
