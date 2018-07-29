@extends('layout.main')

@section('content')
<div class="slider w3layouts agileits">
            <ul class="rslides w3layouts agileits" id="slider">
                <li>
                    <img src="{{asset('images/b2.jpg')}}" alt="Affiliation">
                        <div class="layer w3layouts agileits">
                            <h3>Events</h3>
                            <p >We Organize Events, Allowing Students To Learn From The Masters In Their Fields. <br>Get Inspired. Through Stories And Workshops, We Show Them Feasibility Of Big Dreams.</p><br>
                            <br><br><a href="{{url('/paywithpaypal')}}">donate</a>
                        </div>
                </li>
                <li>
                    <img src="{{asset('images/b1.jpg')}}" alt="Affiliation" >
                        <div class="layer w3layouts agileits">
                            <h3>Mentorship</h3>
                            <p >We Help Students And Enable Them To Move Forward, Get Unstuck From Any Unfavorable Situation. <br>We Keep An Alternative Channel Open Always To Help Them, When School And People Around Are Not Enough.</p><br>
                            <br><a href="{{url('/paywithpaypal')}}" >donate</a>
                        </div>
                </li>
                
            </ul>
                <!-- banner bottom -->
        </div>

        <script src="{{asset('js/responsiveslides.min.js')}}"></script>
    <script>
    $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        });

        $(function () {
            $("#slider, #slider1").responsiveSlides({
                auto: true,
                nav: true,
                speed: 1500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
@endsection