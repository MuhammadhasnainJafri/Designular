@extends('layouts.app')

@section('content')
    
    
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
                        

<form class="m-5">
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Bussines name</label>
        <input class="form-control" type="text" name="contactName" placeholder="A bussiness or person's name" id="example-text-input">
    </div>
    <div class="form-group">
            <h4  class="mb-2">Primary Person</h4>

    <div class="row">
    <div class="col">
    <label class="form-group form-control-label">First name</label>
      <input type="text" class="form-control" name="fname" placeholder="First name">
    </div>
    <div class="col">
    <label class="form-group form-control-label">Last name</label>
      <input type="text" class="form-control" name="lname" placeholder="Last name">
    </div>
  </div>
       
</div>
    <div class="form-group">
        <label for="example-email-input" class="form-control-label">Email</label>
        <input class="form-control" type="email" placeholder="" name="email" id="example-email-input">
    </div>
    <h4  class="mb-2" >Additional Person</h4>
    <span  class="a text-primary" onclick="secondaryPerson(this,'secondaryperson')">+ Add a secondary Person</span>
   
        <div id="secondaryperson" class="ml-5 mt-3" style="display: none">
            <div class="row">
                <div class="col">
                <label class="form-group form-control-label">First name</label>
                  <input type="text" class="form-control" name="sfname" placeholder="First name">
                </div>
                <div class="col">
                <label class="form-group form-control-label">Last name</label>
                  <input type="text" class="form-control" name="slname" placeholder="Last name">
                </div>
              </div>
              <div class="form-group">
                <label for="example-email-input" class="form-control-label">Email</label>
                <input class="form-control" type="email" name="semail" id="example-email-input">
            </div>
        </div>
        <div class="form-group">
            <h4>Bussiness Information</h4>
            <label for="example-tel-input" class="form-control-label">Phone Number</label>
            <div class="numberContainer">
                <div class="innerflexNumber">
                <input  type="text" class="contactInput form-control country" name="countryCode" placeholder="Country">
                <input  type="text" class="contactInput form-control area" name="AreaCode" placeholder="Area">
            </div>
                <input  type="text" class="contactInput form-control pnumber" name="pNumber" placeholder="Number">
            </div>
            <span  class="a text-primary" onclick="secondaryPerson(this,'secondaryNumber')">+ Add another Number</span>

            <div class="ml-5 mt-3" id="secondaryNumber" style="display: none">
                <h4>Secondary Number</h4>
                <label for="example-tel-input" class="form-control-label">Phone Number</label>
                <div class="numberContainer">
                    <div class="innerflexNumber">
                    <input  type="text" class="contactInput form-control country" name="countryCode" placeholder="Country">
                    <input  type="text" class="contactInput form-control area" name="AreaCode" placeholder="Area">
                </div>
                    <input  type="text" class="contactInput form-control pnumber" name="pNumber" placeholder="Number">
                </div>
            </div>
        </div>
        
    <div class="form-group">
        <label for="example-url-input" class="form-control-label">URL</label>
        <input class="form-control" type="url" placeholder="https://www.youBussiness.com" name="website" id="example-url-input">
    </div>
    <div class="form-group">
       
    </div>
  
    <div class="form-group">
        <label for="example-number-input" class="form-control-label">Company Registration Number</label>
        <input class="form-control" type="text" name="companyRegNumber"  id="example-number-input">
    </div>
    <div class="form-group">
        <label for="example-number-input" class="form-control-label">Account Number</label>
        <input class="form-control" type="text" name="accNumber"  id="example-number-input">
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
        <Button type="submit" class="btn btn-lg btn-primary ">Create Contact</Button>
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
    function secondaryPerson(link,secondarydiv){
        link.style.display="none";
        document.getElementById(secondarydiv).style.display="block";
    }
</script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush