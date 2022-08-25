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
                    <h3 class="mb-0">Create a new Contacts</h3>
                </div>
                <!-- from start at here -->


                <form class="m-5" method="post" action="{{route('edit.contact')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$contact->id}}" <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Bussines  name</label>
                    <input class="form-control" type="text" name="contactName" value="{{$contact->contactName}}" placeholder="A bussiness or person's name" id="example-text-input">

                    <div class="form-group">
                        <h4 class="mb-2">Primary Person</h4>

                        <div class="row">
                            <div class="col">
                                <label class="form-group form-control-label">First name</label>
                                <input type="text" class="form-control" name="fname" value="{{$contact->fname}}" placeholder="First name">
                            </div>
                            <div class="col">
                                <label class="form-group form-control-label">Last name</label>
                                <input type="text" class="form-control" name="lname" value="{{$contact->lname}}" placeholder="Last name">
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="example-email-input" class="form-control-label">Email</label>
                        <input class="form-control" type="email" placeholder="" name="email" value="{{$contact->email}}" id="example-email-input">
                    </div>
                    <h4 class="mb-2">Additional Person</h4>
                    <span class="a text-primary" onclick="secondaryPerson(this,'secondaryperson')">+ Add a secondary Person</span>

                    <div id="secondaryperson" class="ml-5 mt-3" style="display: none">
                        <div class="row">
                            <div class="col">
                                <label class="form-group form-control-label">First name</label>
                                <input type="text" class="form-control" name="sfname" value="{{$contact->sfname}}" placeholder="First name">
                            </div>
                            <div class="col">
                                <label class="form-group form-control-label">Last name</label>
                                <input type="text" class="form-control" name="slname" value="{{$contact->slname}}" placeholder="Last name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email-input" class="form-control-label">Email</label>
                            <input class="form-control" type="email" name="semail" value="{{$contact->semail}}" id="example-email-input">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <h4>Bussiness Information</h4>
                        <label for="example-tel-input" class="form-control-label">Phone Number</label>
                        <div class="numberContainer">
                            <div class="innerflexNumber">
                                <input type="text" class="contactInput form-control country" name="countryCode" value="{{$contact->countryCode}}" placeholder="Country">
                                <input type="text" class="contactInput form-control area" name="AreaCode" value="{{$contact->AreaCode}}" placeholder="Area">
                            </div>
                            <input type="text" class="contactInput form-control pnumber" name="pNumber" value="{{$contact->pNumber}}" placeholder="Number">
                        </div>
                        <span class="a text-primary" onclick="secondaryPerson(this,'secondaryNumber')">+ Add another Number</span>

                        <div class="ml-5 mt-3" id="secondaryNumber" style="display: none">

                            <h4>Secondary Number</h4>
                            <label for="example-tel-input" class="form-control-label">Phone Number</label>
                            <div class="numberContainer">
                                <div class="innerflexNumber">
                                    <input type="text" class="contactInput form-control country" name="scountryCode" value="{{$contact->scountryCode}}" placeholder="Country">
                                    <input type="text" class="contactInput form-control area" name="sAreaCode" value="{{$contact->sAreaCode}}" placeholder="Area">
                                </div>
                                <input type="text" class="contactInput form-control pnumber" name="spNumber" value="{{$contact->spNumber}}" placeholder="Number">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="example-url-input" class="form-control-label">URL</label>
                        <input class="form-control" type="url" placeholder="https://www.youBussiness.com" name="website" value="{{$contact->website}}" id="example-url-input">
                    </div>
                    <div class="form-group">

                    </div>

                    <div class="form-group">
                        <label for="example-number-input" class="form-control-label">Company Registration Number</label>
                        <input class="form-control" type="text" name="companyRegNumber" value="{{$contact->companyRegNumber}}" id="example-number-input">
                    </div>
                    <div class="form-group">
                        <label for="example-number-input" class="form-control-label">Account Number</label>
                        <input class="form-control" type="text" name="accNumber" value="{{$contact->accNumber}}" id="example-number-input">
                    </div>
                    <div class="form-group  ">
                        <label for="exampleFormControlTextarea1">Delivery Address</label>
                        <div class="mi-2">
                            <input class="form-control" type="text" name="pAttention" value="{{$contact->pAttention}}" placeholder="Attention" id="example-number-input">

                            <textarea class="form-control" id="exampleFormControlTextarea1" name="pAddress"  rows="2">{{$contact->pAddress}}</textarea>
                            <input class="form-control" type="text" name="pcity" value="{{$contact->pcity}}" placeholder="City/Town" id="example-number-input">
                            <div class="innerflexNumber">
                                <input type="text" class="contactInput form-control country" style="flex:2" name="pstate" value="{{$contact->pstate}}" placeholder="State/Region">
                                <input type="text" class="contactInput form-control area" name="pPostalcode" value="{{$contact->pPostalcode}}" placeholder="Postal/Zip code">
                            </div>
                            <input class="form-control" type="text" name="pcountry" value="{{$contact->contactName}}" placeholder="contactName" id="example-number-input">
                        </div>

                        <div class="form-group  ">
                            <label for="exampleFormControlTextarea1">Invoice Address</label>
                            <div class="mi-2">
                                <input class="form-control" type="text" name="iAttention" value="{{$contact->iAttention}}" placeholder="Attention" id="example-number-input">

                                <textarea class="form-control" id="exampleFormControlTextarea1" name="invoiceAddress"  rows="2">{{$contact->invoiceAddress}}</textarea>
                                <input class="form-control" type="text" name="city" value="{{$contact->city}}" placeholder="City/Town" id="example-number-input">
                                <div class="innerflexNumber">
                                    <input type="text" class="contactInput form-control country" style="flex:2" name="state" value="{{$contact->state}}" placeholder="State/Region">
                                    <input type="text" class="contactInput form-control area" name="postalcode" value="{{$contact->postalcode}}" placeholder="Postal/Zip code">
                                </div>
                                <input class="form-control" type="text" name="country" value="{{$contact->country}}" placeholder="country" id="example-number-input">
                            </div>
                        </div>
                        <!-- <div class="form-group">
        <label for="example-datetime-local-input" class="form-control-label">Datetime</label>
        <input class="form-control" type="datetime-local" placeholder="2018-11-23T10:30:00" id="example-datetime-local-input">
    </div>
    <div class="form-group">
        <label for="example-date-input" class="form-control-label">Date</label>
        <input class="form-control" type="date" placeholder="2018-11-23" id="example-date-input">
    </div>
    <div class="form-group">
        <label for="example-month-input" class="form-control-label">Month</label>
        <input class="form-control" type="month" placeholder="2018-11" id="example-month-input">
    </div>
    <div class="form-group">
        <label for="example-week-input" class="form-control-label">Week</label>
        <input class="form-control" type="week" placeholder="2018-W23" id="example-week-input">
    </div>
    <div class="form-group">
        <label for="example-time-input" class="form-control-label">Time</label>
        <input class="form-control" type="time" placeholder="10:30:00" id="example-time-input">
    </div> -->
                        <div class="form-group " style="justify-content: center;
    display: flex;">
                            <Button type="submit" class="btn btn-lg btn-info ">Update Contact</Button>
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

</script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
