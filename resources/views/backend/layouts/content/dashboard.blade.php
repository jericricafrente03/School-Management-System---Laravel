@extends('backend.app')

@section('title')
	Dashboard
@endsection

@section('content')

<div class="content">
  <div class="row">
    <div class="col-md-8">
      <form action="/save" method="post" id="cashout">
        @csrf            
      <div class="card">
        <div class="card-header">
          <h4 class="title">Proceed to Checkout</h4>
        </div>
        <div class="card-body">

            <div class="row">
              <div class="col-md-5 pr-md-1">
                <div class="form-group">
                  <label>Company</label>
                  <input type="text" class="form-control" placeholder="Company">
                </div>
              </div>
              <div class="col-md-3 px-md-1">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="Username" required data-parsley-trigger="keyup" data-parsley-length="[3, 40]" data-parsley-group="block2">
                </div>
              </div>
              <div class="col-md-4 pl-md-1">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" placeholder="Email Address
                  "required data-parsley-type="email" data-parsley-trigger="keyup">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 pr-md-1">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" class="form-control" placeholder="Company" required  data-parsley-length="[4, 20]" data-parsley-group="block-1">
                </div>
              </div>
              <div class="col-md-6 pl-md-1">
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control" placeholder="Last Name" required data-parsley-length="[4, 20]" data-parsley-group="block-1">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" placeholder="Address"
                  required data-parsley-trigger="keyup" data-parsley-length="[8, 40]" data-parsley-group="block2">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 pr-md-1">
                <div class="form-group">
                  <label>City</label>
                  <input type="text" class="form-control" placeholder="City"  required data-parsley-trigger="keyup" data-parsley-length="[4, 40]" data-parsley-group="block2">
                </div>
              </div>
              <div class="col-md-4 px-md-1">
                <div class="form-group">
                  <label>Country</label>
                  <input type="text" class="form-control" placeholder="Country"  required data-parsley-trigger="keyup" data-parsley-length="[8, 40]" data-parsley-group="block2">
                </div>
              </div>
              <div class="col-md-4 pl-md-1">
                <div class="form-group">
                  <label>Postal Code</label>
                  <input type="number" class="form-control" placeholder="ZIP Code" required data-parsley-length="[2,16]" data-parsley-type="digits">
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <h4>Payment</h4>
            <div class="custom-control custom-radio" required>
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
              <label class="custom-control-label" for="credit">Credit card</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="debit">Debit card</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="paypal">Paypal</label>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 pr-md-1">
                <div class="form-group">
                  <label>Name on card</label>
                  <input type="text" class="form-control" placeholder="Company" autocomplete="off" required data-parsley-trigger="keyup" data-parsley-length="[8, 40]" data-parsley-group="block2">
                </div>
              </div>
              <div class="col-md-6 pl-md-1">
                <div class="form-group">
                  <label>Credit card number</label>
                  <input type="text" class="form-control" placeholder="Credit card" autocomplete="off" required data-parsley-trigger="keyup" data-parsley-length="[8, 40]" data-parsley-group="block2">
                </div>
              </div>
            <div class="row" style="margin-left: 1px;">
              <div class="col-md-4 pr-md-1">
                <div class="form-group">
                  <label>Expiration</label>
                  <input type="text" class="form-control" placeholder="City" autocomplete="off" required data-parsley-trigger="keyup" data-parsley-length="[4, 40]" data-parsley-group="block2">
                </div>
              </div>
              <div class="col-md-4 px-md-1">
                  <div class="form-group">
                  <label>CVV</label>
                  <input type="text" class="form-control" placeholder="Country" autocomplete="off" required data-parsley-trigger="keyup" data-parsley-length="[4, 40]" data-parsley-group="block2">
                  </div>
                </div>
              </div>                    
            </div>
          
        </div>
        <div class="card-footer">
          <input type="submit" name="" value="Continue to Checkout" class="btn btn-fill btn-primary">
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-user">

        <h3 style="margin-top: 10px;text-align: center;">Your Cart</h3>
        <div class="card-body">
          <p class="card-text">
            <span>Product Name</span>
            <input type="text" name="productname" class="form-control" disabled="" value="$80" style="text-align: right;color: white;font-size: 18px;  ">
    <span>Promo Code</span>
            <input type="text" name="productname" class="form-control" disabled="" value="$80" style="text-align: right;color: white;font-size: 18px;  ">
    <span>Total (USD)</span>
            <input type="text" name="productname" class="form-control" disabled="" value="$80" style="text-align: right;color: white;font-size: 18px;  ">

          </p>
        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code" style="height: 48px">
            <div class="input-group-append">
              <button type="submit" class="btn btn-secondary">Redeem</button>
            </div>
          </div>
        </form>                
        </div>
      </div>
      </div>

    </div>
    </form>
  </div>
</div>

@endsection

