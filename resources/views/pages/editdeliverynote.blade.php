@extends('layouts.app')

@section('content')
<style>
    .mi-2 label,
    textarea,
    input {
        margin: .5rem;
    }

</style>

<!-- Header -->
<div class="header bg-primary pb-6  pb-8 pt-5 pt-md-8">

</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Edit Delivery Note</h3>
                </div>
                <!-- from start at here -->


                <form class="m-lg-5 m-3" method="post">
                    @csrf
                    <div class="form-group">
                        {{$deliverynote->contactName}}
                        <label for="example-text-input" class="form-control-label">Bussines  name</label>
                        <input class="form-control" type="text" name="contactName" value="{{$deliverynote->contactName}}" id="example-text-input">
                    </div>
                    <div class="form-group">
                        {{-- <h4 class="mb-2">Primary Person</h4> --}}

                        <div class="row">
                            <div class="col">
                                <label class="form-group form-control-label">Order Date</label>
                                <input type="date" class="form-control" name="orderdDate" value="{{$deliverynote->orderdDate}}">
                            </div>
                            <div class="col">
                                <label class="form-group form-control-label">Delivery Date</label>
                                <input type="date" class="form-control" name="deliveryDate" value="{{$deliverynote->deliveryDate}}">
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        {{-- <h4 class="mb-2">Primary Person</h4> --}}

                        <div class="row">
                            <div class="col">
                                <label class="form-group form-control-label">Order Number</label>
                                <input type="text" class="form-control" name="orderNumber" value="{{$deliverynote->orderNumber}}">
                            </div>
                            <div class="col">
                                <label class="form-group form-control-label">Reference</label>
                                <input type="text" class="form-control" name="reference" value="{{$deliverynote->reference}}">
                            </div>
                        </div>

                    </div>


                    {{-- Ordered Devlivered outstanding --}}

                    {{-- Invoice Table design start at here --}}
                    <div class="table-responsive">
                        <table class="table table-condensed table-striped  align-items-center table-flush" id="invoiceItem">
                            <tr>
                                <th width="2%">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="checkAll" name="checkAll">
                                        <label class="custom-control-label" for="checkAll"></label>
                                    </div>
                                </th>
                                <th width="15%">Item code</th>
                                <th width="38%">Description</th>
                                <th width="15%">Ordered</th>
                                <th width="15%">Deliverd</th>
                                <th width="15%">outstanding</th>
                            </tr>
                            @foreach($deliverynote->deliveryitems as  $item)
                             
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="itemRow custom-control-input" id="itemRow_1">
                                        <label class="custom-control-label" for="itemRow_1"></label>
                                    </div>
                                </td>
                                <td><input type="text" name="productCode[]" value="{{$item->productCode}}" id="productCode_1" class="form-control" autocomplete="off"></td>
                                <td><input type="text" name="productName[]" value="{{$item->productName}}" id="productName_1" class="form-control" autocomplete="off"></td>
                                <td><input type="number" name="quantity[]" value="{{$item->quantity}}" id="quantity_1" class="form-control quantity" autocomplete="off"></td>
                                <td><input type="number" name="delivered[]" value="{{$item->delivered}}" id="price_1" class="form-control price" autocomplete="off"></td>
                                <td><input type="number" name="outstanding[]" value="{{$item->outstanding}}" id="total_1" class="form-control total" autocomplete="off"></td>
                            </tr>
                            @endforeach

                        </table>
                    </div>
                    <div class="row mt-3">
                        <div class="col-xs-12 d-flex justify-content-end col-12">
                            <button class="btn btn-danger delete" id="removeRows" type="button">- Delete</button>
                            <button class="btn btn-success" id="addRows" type="button">+ Add More</button>
                        </div>
                    </div>
                    <div class="row d-none">
                        <div class="col-lg-8 col-md-7 col-sm-4 col-4"></div>
                        <div class="rrow  col-lg-4 col-md-5 col-sm-8 col-8 d-flex justify-content-end flex-column">
                            <div class="form-group mt-3 mb-3 ">
                                <label>Subtotal: &nbsp;</label>
                                <div class="input-group mb-3">

                                    <input  type="hidden" class="form-control" name="subTotal" value="{{$deliverynote->subTotal}}" id="subTotal" placeholder="Subtotal">
                                </div>
                            </div>
                            <div class="form-group mt-3 mb-3 ">
                                <label>Total: &nbsp;</label>
                                <div class="input-group mb-3">

                                    <input  type="hidden" class="form-control" name="total" value="{{$deliverynote->total}}" id="totalAftertax" placeholder="Total">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Invoice Table design ends at here --}}
                    <div class="form-group">
                        {{-- <h4 class="mb-2">Primary Person</h4> --}}

                        <div class="row">
                            <div class="col">
                                <label class="form-group form-control-label">Attention</label>
                                <input type="text" class="form-control" name="attention" value="{{$deliverynote->attention}}" placeholder="">
                            </div>
                            <div class="col">
                                <label class="form-group form-control-label">Telephone Number</label>
                                <input type="text" class="form-control" name="telephonNumber" value="{{$deliverynote->telephonNumber}}" placeholder="">
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Delivery Address</label>
                        <textarea class="form-control" type="text" name="dAddress" id="example-text-input"> {{$deliverynote->dAddress}}</textarea>
                    </div>


                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Delivery Instructions</label>
                        <textarea class="form-control" type="text" name="dInstruction" id="example-text-input">{{$deliverynote->dInstruction}}</textarea>
                    </div>







                    <Button type="submit" class="btn btn-lg btn-primary ">Update Delivery Note</Button>
            </div>
            </form>


            <!-- from ends at here -->


        </div>
    </div>
</div>


</div>
@endsection

@push('js')
<script>
    function secondaryPerson(link, secondarydiv) {
        link.style.display = "none";
        document.getElementById(secondarydiv).style.display = "block";
    }


    $(document).ready(function() {
        $(document).on('click', '#checkAll', function() {
            $(".itemRow").prop("checked", this.checked);
        });
        $(document).on('click', '.itemRow', function() {
            if ($('.itemRow:checked').length == $('.itemRow').length) {
                $('#checkAll').prop('checked', true);
            } else {
                $('#checkAll').prop('checked', false);
            }
        });
        var count = $(".itemRow").length;
        $(document).on('click', '#addRows', function() {
            count++;
            var htmlRows = '';
            htmlRows += '<tr>';
            htmlRows += '<td><div class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input itemRow" id="itemRow_' + count + '"> <label class="custom-control-label" for="itemRow_' + count + '"></label> </div></td>';
            htmlRows += '<td><input type="text" name="productCode[]" id="productCode_' + count + '" class="form-control" autocomplete="off"></td>';
            htmlRows += '<td><input type="text" name="productName[]" id="productName_' + count + '" class="form-control" autocomplete="off"></td>';
            htmlRows += '<td><input type="number" name="quantity[]" id="quantity_' + count + '" class="form-control quantity" autocomplete="off"></td>';
            htmlRows += '<td><input type="number" name="delivered[]" id="price_' + count + '" class="form-control price" autocomplete="off"></td>';
            htmlRows += '<td><input type="number" name="outstanding[]" id="total_' + count + '" class="form-control total" autocomplete="off"></td>';
            htmlRows += '</tr>';
            $('#invoiceItem').append(htmlRows);
        });
        $(document).on('click', '#removeRows', function() {
            $(".itemRow:checked").each(function() {
                $(this).closest('tr').remove();
            });
            $('#checkAll').prop('checked', false);
            calculateTotal();
        });
        $(document).on('blur', "[id^=quantity_]", function() {
            calculateTotal();
        });
        $(document).on('blur', "[id^=price_]", function() {
            calculateTotal();
        });
        $(document).on('blur', "#taxRate", function() {
            calculateTotal();
        });
        $(document).on('blur', "#amountPaid", function() {
            var amountPaid = $(this).val();
            var totalAftertax = $('#totalAftertax').val();
            if (amountPaid && totalAftertax) {
                totalAftertax = totalAftertax - amountPaid;
                $('#amountDue').val(totalAftertax);
            } else {
                $('#amountDue').val(totalAftertax);
            }
        });
        $(document).on('click', '.deleteInvoice', function() {
            var id = $(this).attr("id");
            if (confirm("Are you sure you want to remove this?")) {
                $.ajax({
                    url: "action.php"
                    , method: "POST"
                    , dataType: "json"
                    , data: {
                        id: id
                        , action: 'delete_invoice'
                    }
                    , success: function(response) {
                        if (response.status == 1) {
                            $('#' + id).closest("tr").remove();
                        }
                    }
                });
            } else {
                return false;
            }
        });
    });

    function calculateTotal() {
        var totalAmount = 0;
        $("[id^='price_']").each(function() {
            var id = $(this).attr('id');
            id = id.replace("price_", '');
            var price = $('#price_' + id).val();
            var quantity = $('#quantity_' + id).val();
            if (!quantity) {
                quantity = 1;
            }
            var total = price * quantity;
            $('#total_' + id).val(parseFloat(total));
            totalAmount += total;
        });
        $('#subTotal').val(parseFloat(totalAmount));

        //TAX RATE	
        var taxRate = 0;
        var subTotal = $('#subTotal').val();
        if (subTotal) {
            var taxAmount = subTotal * taxRate / 100;
            // TOTAL APPLIED TAX AMOUNT
            //$('#taxAmount').val(taxAmount);
                    

            subTotal = parseFloat(subTotal) + parseFloat(taxAmount);
            $('#totalAftertax').val(subTotal);
            var amountPaid = $('#amountPaid').val();
            var totalAftertax = $('#totalAftertax').val();
            if (amountPaid && totalAftertax) {
                totalAftertax = totalAftertax - amountPaid;
                $('#amountDue').val(totalAftertax);
            } else {
                $('#amountDue').val(subTotal);
            }
        }
    }

</script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
