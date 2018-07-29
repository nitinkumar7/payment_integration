@extends('layout.main')

@section('content')
<br><br><br><br><br><br>
<link rel="stylesheet" type="text/css" href="{{asset('css/stripestyle.css')}}">
<div class="container">
    <div class="row "><div class="col-md-2"></div>
    
        <div class="col-md-4 col-md-offset-2">
            <div class="panel panel-default ">
                @if ($message = Session::get('success'))
                <div class="custom-alerts alert alert-success fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    {!! $message !!}
                </div>
                <?php Session::forget('success');?>
                @endif
                @if ($message = Session::get('error'))
                <div class="custom-alerts alert alert-danger fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    {!! $message !!}
                </div>
                <?php Session::forget('error');?>
                @endif


            <div class="panel-heading"><b>Credit/Debit Card Payment</b></div>
                <div class="panel-body">
                
                    <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! URL::to('stripe') !!}" >
                        {{ csrf_field() }}
                        <div class='form-row'>
                            <div class='col-xs-12 form-group required'>
                              <label class='control-label'><b>Name on Card</b></label> <input
                                class='form-control' size='4' type='text'>
                            </div>
                          </div>
                        <div class="form-row{{ $errors->has('card_no') ? ' has-error' : '' }}">
                         <div class='col-xs-12 form-group card required'>
                            <label for="card_no" class="control-label">Card Number</label>
                            
                                <input id="card_no" type="text" class="form-control" name="card_no" value="{{ old('card_no') }}" autofocus>
                                @if ($errors->has('card_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('card_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-row{{ $errors->has('ccExpiryMonth') ? ' has-error' : '' }}">
                        
                            <div class='col-xs-4 form-group required'>
                            <label for="cvvNumber" class="control-label">CVV</label>
                           
                                <input id="cvvNumber" type="text" class="form-control" name="cvvNumber" value="{{ old('cvvNumber') }}" placeholder='ex. 311' autofocus>
                                @if ($errors->has('cvvNumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cvvNumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class='col-xs-4 form-group expiration required'>
                            <label for="ccExpiryMonth" class="control-label ">Month</label>
                           
                                <input id="ccExpiryMonth" type="text" class="form-control card-expiry-month"  placeholder="MM" name="ccExpiryMonth" value="{{ old('ccExpiryMonth') }}" autofocus>
                                @if ($errors->has('ccExpiryMonth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ccExpiryMonth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                        <div class='col-xs-4 form-group expiration required'>
                            <label for="ccExpiryYear" class="control-label"> Year</label>
                           
                                <input id="ccExpiryYear" type="text" class="form-control card-expiry-year" name="ccExpiryYear" placeholder="YYYY" value="{{ old('ccExpiryYear') }}" autofocus>
                                @if ($errors->has('ccExpiryYear'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ccExpiryYear') }}</strong>
                                    </span>
                                @endif
                            </div>
                                               
                        
                           
                        </div>
                        <div class="form-row{{ $errors->has('amount') ? ' has-error' : '' }}">
                            <label for="amount" class="col-md-4 control-label">Amount</label>
                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control" name="amount" value="{{ old('amount') }}" autofocus>
                                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                        </div>
                        
                        <div class='form-row'>
                        <div class='col-md-12 form-group'>
                          <button class='form-control btn btn-primary submit-button'
                            type='submit' style="margin-top: 10px;">Pay »</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection