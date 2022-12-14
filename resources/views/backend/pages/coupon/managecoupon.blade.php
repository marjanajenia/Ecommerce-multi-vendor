@extends('backend.masterTemplate.masterBackend')
@section('maincontent')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
        <h4>Dashboard</h4>
        <p class="mg-b-0">Hey! Hello There Welcome To Our MultiVenDor Ecommerce Dashboard !</p>
    </div>
</div>

<div class="br-pagebody">
    <div class="card">
        <div class="card-header">
            <h4>All Category <a class="btn btn-info btn-sm" href="{{ route('coupon.create') }} " style="float: right;">Add Category</a></h4>
        </div>
        <div class="card-body">
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-5p">SI</th>
                            <th class="wd-15p">Coupon_Code</th>
                            <th class="wd-15p">Discount_amount</th>
                            <th class="wd-15p">Vendor_Id</th>
                            <th class="wd-15p">Start date</th>
                            <th class="wd-15p">End date</th>
                            <th class="wd-10p">Status</th>
                            <th class="wd-25p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $sl=1; @endphp
                        @foreach($coupons as $data)
                            <tr>
                                <td>{{ $sl }}</td>
                                <td>{{ $data->coupon_code}}</td>
                                <td>{{ $data->amount}}</td>
                                <td>{{ $data->vendor_id}}</td>
                                <td>{{ $data->start_at}}</td>
                                <td>{{ $data->end_at}}</td>
                                <td>
                                    @if($data->status==1)
                                    <span class="badge badge-info">Active</span>
                                    @else
                                    <span class="badge badge-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                   <a href="{{ Route('coupon.edit', $data->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                   <!-- <button class="btn btn-sm btn-info"><i class="fa fa-edit" data-toggle="modal" data-target="#edit{{ $data->id }}"></i></button> -->
                                   <button class="btn btn-sm btn-danger"><i class="fa fa-trash" data-toggle="modal" data-target="#delete{{ $data->id }}"></i></button>
                               </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="delete{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-confirm">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Confirmation message for delete</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                Are you sure you want to delete this coupon?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
                                    <a href="{{ Route('coupon.delete',$data->id)}}"  class="btn btn-danger">Delete</a>
                                </div>
                                </div>
                            </div>
                            </div>

                            @php $sl++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div><!-- table-wrapper -->
        </div>
    </div>
</div><!-- br-pagebody -->

<script>
    $(function(){
    'use strict';

    $('#datatable1').DataTable({
        responsive: true,
        language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_',
        }
    });
   // _MENU_ items/page

      // Select2
    $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });

    @if(Session::has('message'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.success("{{ session('message') }}");
    @endif

    @if(Session::has('error'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ session('error') }}");
    @endif

</script>
@endsection
