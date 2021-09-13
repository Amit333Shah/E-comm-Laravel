@extends('master')
@section('content')

<div class="container custom-order">
    <div class="col-sm-6">
      @if($total==0)
      <h1 class="bg-danger">Please Add Sum Items</h1>
      @else
      <table class="table table-striped">
        <tbody>
         <tr>
           <td>Price</td>
           <td>{{$total}} Rupees</td>
         </tr>
         <tr>
           <td>Tax</td>
           <td>  0 Rupess</td>
         </tr>
         <tr>
           <td>Delivery Charges</td>
           <td>100 Rupess</td>
         </tr>
         <tr class="bg-success">
           <td>Total Amount</td>
           <td >{{$total+100}} Rupess</td>
         </tr>
        </tbody>
      </table>
      @endif
      <form method="POST" action="orderplace">
        @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="name" name="name"class="form-control"  placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" name="address" class="form-control"  placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">City</label>
    <input type="text" name="city" class="form-control"  placeholder="Enter City">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">State</label>
    <input type="text" name="state"class="form-control"  placeholder="Enter State">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Zipcode</label>
    <input type="text" name="zipcode"class="form-control"  placeholder="Enter Zipcode">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Contact No</label>
    <input type="text"  name="contact"class="form-control" placeholder="Enter Contact NO">
  </div>
  <div class="form-group">
  <label class="form-check-label" for="defaultCheck1">
    Payment Method
  </label>
  <p><input  value="cash" type="radio" name="payment"> <span> Online Payment</span></p>
  <p><input value="cash" type="radio" name="payment"> <span> EMI</span></p>
  <p><input value="cash" type="radio" name="payment"> <span> Payment on Delivery</span></p>
  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button><br><br>
</form>
      
      
    </div>
</div>
@endsection