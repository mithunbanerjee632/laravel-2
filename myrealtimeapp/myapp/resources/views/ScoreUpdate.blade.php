@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 p3 mt-5">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Score Update</h5>
                         <hr>
                        <input type="text" class="form-control scoreValue"><br>
                        <button type="submit" class="updateBtn btn btn-info">Update</button>
                        <h4 class="LastScore"></h4>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection




@section('script')

<script type="text/javascript">
    $('.updateBtn').click(function(){
        var scoreValue = $('.scoreValue').val();

        var url="/pushScore";

        axios.post(url,{score:scoreValue}).then(function(response){
             $('.LastScore').html(response.data);
        }).catch(function(){

        })
    })
</script>
@endsection


