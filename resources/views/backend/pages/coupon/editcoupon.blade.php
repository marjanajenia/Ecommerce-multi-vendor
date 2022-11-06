@extends('backend.masterTemplate.masterBackend')
@section('maincontent')
<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Dashboard</h4>
        <p class="mg-b-0">Hey! Hello There Welcome To Our MultiVenDor Ecommerce Dashboard !</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="row row-sm">
       <div class="col-md-12">
            <div class="card p-3 shadow-base">
            	<form action="{{ Route('coupon.update',$coupon->id) }}" method="post">
                @csrf
          		<div class="row">
          			<div class="col-md-6">
          				<div class="form-group">
          					<label for="coupon_code">Coupon_Code</label>
          					<input type="text" class="form-control" placeholder="Enter Coupon Code" name="coupon_code" id="coupon_code" value="{{ $coupon->coupon_code}}">
          				</div>
                        <div class="form-group">
          					<label for="amount">Discount Amount</label>
          					<input type="text" class="form-control" placeholder="Enter Discount Amount" name="amount" id="amount" value="{{ $coupon->amount}}">
                        </div>
                          <div class="form-group">
          					<label for="vendor_id">Seller Id</label>
          					<input type="text" class="form-control" placeholder="Enter Seller Id" name="vendor_id" id="vendor_id" value="{{ $coupon->vendor_id}}" readonly>
                        </div>
                   </div>
                   <div class="col-md-6">
          				<div class="form-group">
          					<label for="start_at">Start date</label>
          					<input type="text" class="form-control" placeholder="Enter Start date" name="start_at" id="start_at" value="{{ $coupon->start_at}}">
                        </div>
                          <div class="form-group">
          					<label for="end_at">End date</label>
          					<input type="text" class="form-control" placeholder="Enter End date" name="end_at" id="end_at" value="{{ $coupon->end_at}}">
                        </div>
                          <div class="form-group">
          					<label for="status">Status</label>
                            <select class="form-control" name="status" id="status">
          					    <option value="">select status</option>
          						<option value="1" @if ($coupon->status==1) selected  @endif>Active</option>
          						<option value="2" @if ($coupon->status==2) selected  @endif>Inactive</option>
          					</select>
                        </div>
                        <br>
                        <div class="form-group">
          				    <button class="form-control btn btn-info">Update Product</button>
          				</div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- br-pagebody -->
<script>
   $(function(){
    $("#start_at").datepicker();
   })
   $(function(){
    $("#end_at").datepicker();
   })
</script>
@endsection
