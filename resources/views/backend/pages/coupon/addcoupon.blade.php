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
                <form action="{{ Route('coupon.add') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group" hidden>
                                <label for="vendor_id">Vendor Id</label>
                                <input type="text" class="form-control" name="vendor_id" id="vendor_id" value="{{ Auth::user()->id }}">
                            </div>
                            <div class="form-group">
                                <label for="coupon_code">Coupon Code</label>
                                <input type="text" class="form-control" placeholder="Enter Coupon Code" name="coupon_code" id="coupon_code">
                                <span class="text-danger">
                                    @error('coupon_code')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="text" class="form-control" placeholder="Enter the amount" name="amount" id="amount">
                                <span class="text-danger">
                                    @error('amount')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="">Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="2">Inactive</option>
                                </select>
                                <span class="text-danger">
                                    @error('status')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="start_at">Start date</label>
                                <input type="date" class="form-control" placeholder="Enter the start date" name="start_at" id="start_at">
                                <span class="text-danger">
                                    @error('start_at')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="end_at">End date</label>
                                <input type="date" class="form-control" placeholder="Enter the End date" name="end_at" id="end_at">
                                <span class="text-danger">
                                    @error('end_at')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <br>
                            <div class="form-group">
                                <button class="form-control btn btn-info">Add Coupon</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- row -->

</div><!-- br-pagebody -->
<script>
    $(function() {
        $("#start_at").datepicker();
    });
    $(function(){
        $("#end_at").datepicker();
    })
</script>
@endsection
