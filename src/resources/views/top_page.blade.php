@extends("layouts.app")
@section("content")

	<!-- Body Start -->
	<div class="wrapper" >
        <div id="space-tag"></div>
        <img  id="top_page_logo" src="{{asset('/Frontend/images/BOPS.png')}}" alt="BOPS" style="width: 100%; padding-top:50px; display: none;">
    </div>
	<!-- Body End -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript">
        $("#space-tag").fadeOut(2900);
        $('#top_page_logo').fadeIn(3000);
    </script>
@endsection
