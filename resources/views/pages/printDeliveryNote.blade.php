<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .ml-2 {
            margin-left: 1rem;
        }

        .ml-2 p {
            font-size: 13px !important;
        }

        .mt-5 {
            margin-top: 4rem;
        }

        .mt-2 {
            margin-top: 0rem;
        }

        .tblspan {
            padding: 4px 6px;
            border: 1px solid;
            margin-left: 10px;
            width: 112px;
            display: inline-block;
        }

    </style>
</head>
<body>
    <div class="col-md-12">
        <div class="row">

            <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                <div class="row">
                    <div class="receipt-header">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="receipt-left mt-5">
                                <span class="ml-3 h4" style="margin-left: 28px;">Desigular Limited</span>
                                <img class="img-responsive" alt="iamgurdeeposahan" src="/argon/img/brand/blue.png" style="width: 70%;">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 text-right ">
                            <div class="receipt-right" style="display: flex;
                        flex-direction: column;
                        justify-content: flex-end;">
                                <h2 style="font-weight: 800;">Delivery Note</h2>
                                <div class="mt-2"><span>Order Date</span><span class="tblspan">August 22, 2022</span></div>
                                <div class="mt-2"><span>Order #</span><span class="tblspan">Awais</span></div>
                                <div class="mt-2"><span>Delivery Note #</span><span class="tblspan">D000161</span></div>
                                <div class="mt-2"><span>Customer ID</span><span class="tblspan">B121</span></div>
                                <div class="mt-2"><span>Despatch Date</span><span class="tblspan">August 22, 2022</span></div>
                                <div class="mt-2"><span>Delivery Method</span><span class="tblspan">Naeem</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 10px">

                    <div class="receipt-header receipt-header-mid">
                        <div class="col-xs-7 col-sm-7 col-md-7 text-left">
                            <div class="receipt-right">

                                <h5 style="padding: 2px;
							padding-left: 2px;
						  background: #828181d1;
						  padding-left: 6px;max-width: 230px;">Shipping address </h5>
                                <div class="ml-2">
                                    <p style="line-height: 2;"> Usama saleem</p>
                                    <p style="line-height: 2;">Nafees Bakers Limited</p>
                                    <p style="line-height: 2;">Unit 1,Whetley Mills, Thomton Road</p>
                                    <p style="line-height: 2;">BradFord, West Yorkshire, BD8LQ</p>
                                    <p style="line-height: 2;">0044 1274 483 913</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5">
                            <div class="receipt-left">
                                <h5 style="background: #828181d1;
							padding-left: 6px;
							max-width: 230px;
							margin: 0px;
							padding: 10px;"> </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <table class="table table-bordered">
                        <thead style="background:#acacac">
                            <tr>
                                <th width="30%">Item Code</th>
                                <th width="50%">Description</th>
                                <th width="15%">Ordered</th>
                                <th width="15%">Delivered</th>
                                <th width="15%">Outstanding</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach($deliverynote->deliveryitems as $item)
                            <tr>
                                <td>{{$item->productCode}}</td>
                                <td>{{$item->productName}}</td>
                                <td>{{$item->quantity}}</td>
                                <td>{{$item->delivered}}</td>
                                <td>{{$item->outstanding}}</td>
                            </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="receipt-header receipt-header-mid receipt-footer">
                        <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                            <div class="receipt-right">
                                <p>Any shortage or damaged must be notify within 24 hours of recipt good.<br>
                                    Complaint can only b accepted if made in written within 24 hours of recipt of goods
                                    <br>
                                    No goods may be returned withour prior authorization from company
                                </p>
                                <h3 style="text-align: center;">Thank you for your bussiness!</h3>

                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="receipt-left">
                                <div style="border: 2px solid black;padding:5px">

                                    <h4>Received By</h4>
                                    <div style="display: flex;margin-top: 1rem;">
                                        <span>Name:</span> <input type="text" name="name" id="" style="border:0px;border-bottom:1px solid black;width: 70%;">
                                    </div>
                                    <div style="display: flex;margin-top: 1rem;">
                                        <span>Sign:</span>
                                        <input type="text" name="name" id="" style="border:0px;border-bottom:1px solid black;width: 70%;margin-left: 8px;">
                                        {{-- <div style="position:relative">
                                            <img style="position: absolute;
width: 200px;
margin-top: -22px;" src="/uploads/630111ad85c98.png">
                                        </div> --}}

                                    </div>
                                    <div style="display: flex;margin-top: 1rem;">
                                        <span>Date:</span> <input type="date" name="name" id="" style="border:0px;border-bottom:1px solid black;width: 70%;margin-left: 8px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p style="text-align: center;font-size: 12px;">
                    Should you have any queries concerning this delivery note, please contact Naeem Zafar on +44 1274 752 797
                </p>
                <p style="text-align:center">
                    Unit 10 Lonsdale Works, Gibson Street, Bradford, West Yorkshire, UK<br>
                    Tel:+44 1274 752 797 fax: E-mail: info@Desigular.co.uk Web:www.desigular.co.uk
                </p>

            </div>
        </div>
    </div>

    <style type="text/css">
        body {
            background: #eee;
            margin-top: 20px;
        }

        .text-danger strong {
            color: #9f181c;
        }

        .receipt-main {
            background: #ffffff none repeat scroll 0 0;
            border-bottom: 12px solid #333333;
            border-top: 12px solid #9f181c;
            margin-top: 50px;
            margin-bottom: 50px;
            padding: 40px 30px !important;
            position: relative;
            box-shadow: 0 1px 21px #acacac;
            color: #333333;
            font-family: open sans;
        }

        .receipt-main p {
            color: #333333;
            font-family: open sans;
            line-height: 1.42857;
        }

        .receipt-footer h1 {
            font-size: 15px;
            font-weight: 400 !important;
            margin: 0 !important;
        }

        .receipt-main::after {
            background: #414143 none repeat scroll 0 0;
            content: "";
            height: 5px;
            left: 0;
            position: absolute;
            right: 0;
            top: -13px;
        }

        .receipt-main thead {
            background: #414143 none repeat scroll 0 0;
        }

        .receipt-main thead th {
            color: #fff;
        }

        .receipt-right h5 {
            font-size: 16px;
            font-weight: bold;
            margin: 0 0 7px 0;
        }

        .receipt-right p {
            font-size: 11px;
            margin: 0px;
        }

        .receipt-right p i {
            text-align: center;
            width: 18px;
        }

        .receipt-main td {
            padding: 9px 20px !important;
        }

        .receipt-main th {
            padding: 13px 20px !important;
        }

        .receipt-main td {
            font-size: 13px;
            font-weight: initial !important;
        }

        .receipt-main td p:last-child {
            margin: 0;
            padding: 0;
        }

        .receipt-main td h2 {
            font-size: 20px;
            font-weight: 900;
            margin: 0;
            text-transform: uppercase;
        }

        .receipt-header-mid .receipt-left h1 {
            font-weight: 100;
            margin: 34px 0 0;
            text-align: right;
            text-transform: uppercase;
        }

        .receipt-header-mid {
            /* margin: 24px 0; */
            overflow: hidden;
        }

        #container {
            background-color: #dcdcdc;
        }

    </style>

    <script type="text/javascript">

    </script>
</body>
</html>
