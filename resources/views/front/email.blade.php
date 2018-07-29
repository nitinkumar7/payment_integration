@extends('layout.main')

@section('content')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<br><br><br><br><br><br><br>
<div class="container">
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


 <div class="row "><div class="col-md-2"></div>
    
        <div class="col-md-4 col-md-offset-2">
        <div class="panel panel-default ">
        <div class="panel-heading"><b></b></div>
        <div class="panel-body">
        <form class="form-horizontal" action="send" method="post">
        {{csrf_field()}}
        <div class='form-row'>
                            <div class='col-xs-12 form-group required'>
                              <label class='control-label'><b>Enter your Email</b></label> <input
                                type="email" class='form-control' name="email" size='4' placeholder="Email">
                            </div>
                          </div>
  
          <div class="form-row">
            <div class="col-md-12 form-group">
              <input type="submit" class="btn btn-primary" value="Submit">
            </div>
          </div>
</form>
</div>
</div>
</div>
</div>
@endsection