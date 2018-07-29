@extends('layout.main')

@section('content')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<img src="{{asset('images/home23.jpg')}}" alt="Affiliation">
    
    <div class="w3-container">
        @if ($message = Session::get('success'))
        <div class="w3-panel w3-green w3-display-bottommiddle" style="width:100%;height:50px">
        
            <span onclick="this.parentElement.style.display='none'"
    				class="w3-button w3-green w3-large w3-display-bottomright">&times;</span>
            <p>{!! $message !!}</p>
        
        </div>
        <?php Session::forget('success');?>
        @endif

        @if ($message = Session::get('error'))
        <div class="w3-panel w3-red w3-display-bottommiddle" style="width:100%;height:50px">
       
            <span onclick="this.parentElement.style.display='none'"
    				class="w3-button w3-red w3-large w3-display-bottomright">&times;</span>
            <p>{!! $message !!}</p>
        </div>
        
        <?php Session::forget('error');?>
        @endif

        

    	<form class="w3-container w3-display-middle w3-card-4 w3-padding-16" style="background-color: white;" method="POST" id="payment-form"
          action="{!! URL::to('paypal') !!}">
    	  <div class="w3-container w3-teal w3-padding-15" ><h2><b>Donate</b></h2></div>
    	  {{ csrf_field() }}
    	  <h2 class="w3-text-blue">Payment Form</h2>
    	  <p>Payment Gateway Integration &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
    	  <label for="amount" class="w3-text-blue"><b>Enter Amount</b></label>
          <br>
    	  <input id="amount" type="text" class="form-control" name="amount" value="{{ old('amount') }}" autofocus>
                                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
          <br>                      
    	  <button class="w3-btn w3-blue">Pay with PayPal</button>
          <a href="{{url('/stripe')}}" class="w3-btn w3-blue">Credit/Debit</a>
    	</form>
    
    </div>
    </div>
    

@endsection