 
 
   <script src="{{url('frontend/libraries/retina/retina.js')}}"></script>
   <script src="{{url('frontend/libraries/jquery/jquery-3.4.1.min.js')}}"></script>
   
   <script src="{{url('frontend/libraries/bootstrap/js/bootstrap.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script></script>
<script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script> 
{{-- 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    --}}