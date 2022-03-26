@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-md-4 p3">
                <div class="card text-center">
                    <div class="card-body">
                        <h2 id="score">....</h2>
                        <h5>Live Scores</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection




@section('script')
<script type="text/javascript">
    var pusher=new Pusher('08d32bea74dc10497038',{
        cluster:'ap2'
    })
    var channel= pusher.subscribe('my-channel'); //user jokhon web address e dhukbe tokhon take subscribe kore nibo
    channel.bind('my-event',function(data){
        $('#score').html('');
        $('#score').html(data['ScoreValue']);
    }); //event k fire kora holo and socket j data transmit korbe seta data diye dhorbo



</script>

@endsection

