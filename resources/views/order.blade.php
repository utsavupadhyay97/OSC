@extends('layouts.app')
@section('content')

<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row justify-content-center">
          <div class="col-md-4">
              <form  method="post" action="{{ route('checkout.store') }}">
                  @csrf
                  <div class="col-md-6">
                    
                          
                              <h3 class="title">Billing Details</h3>
                          
                      
                          <div class="form-group">
                              <label for="address">Address</label>
                              <input class="form-control" type="text" name="address" value="{{ auth()->user()->address }}" required>
                          </div>
                          
                          <div class="form-group">
                              <label for="phone">Phone</label>
                              <input class="form-control" type="tel" name="phone" value="{{ auth()->user()->number }}" required>
                          </div>
  
                          <div class="product-btns">
                              <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                          </div>
                      </div>
                  
              </form>
          </div>
          <div class="col-md-4">
              <div class="payments-methods">
                  <div class="section-title">
                      <h4 class="title">Payments Methods</h4>
                  </div>
                  <div class="input-checkbox">
                      <input type="radio" name="payments" id="payments-1" checked>
                      <label for="payments-1">Cash on Delivery</label>
                      <div class="caption">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                              exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              <p>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
</div>
          
            
                        <!-- <div class="form-group">
                            <div class="input-checkbox">
                                <input type="checkbox" id="register">
                                <label class="font-weak" for="register">Create Account?</label>
                                <div class="caption">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt.
                                        <p>
                                            <input class="input" type="password" name="password"
                                                placeholder="Enter Your Password">
                                </div>
                            </div>
                        </div> -->
                  

               
{{-- <div class="row justify-content-center mt-4">
                <div class="col-md-8">
                   
                        <div class="section-title">
                            <h3 class="title">Order Review</h3>
                        </div>
                        <table class="shopping-cart-table table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th></th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Total</th>
                                    <th class="text-right"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
                                    <td class="details">
                                        <a href="#">Product Name Goes Here</a>
                                        <ul>
                                            <li><span>Size: XL</span></li>
                                            <li><span>Color: Camelot</span></li>
                                        </ul>
                                    </td>
                                    <td class="price text-center"><strong>$32.50</strong><br><del
                                            class="font-weak"><small>$40.00</small></del></td>
                                    <td class="qty text-center"><input class="input" type="number" value="1"></td>
                                    <td class="total text-center"><strong class="primary-color">$32.50</strong></td>

                                </tr>
                               
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>SUBTOTAL</th>
                                    <th colspan="2" class="sub-total">$32.50</th>
                                </tr>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>SHIPING</th>
                                    <td colspan="2">Free Shipping</td>
                                </tr>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>TOTAL</th>
                                    <th colspan="2" class="total">$32.50</th>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="d-flex flex-row justify-content-end">
                            <button class="btn btn-success">Place Order</button>
                        </div>
                    

                </div>
           
       
    
</div> --}}
<!-- /section -->

@endsection