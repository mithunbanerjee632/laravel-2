@extends('layout.app')
@section('title','home')

@section('content')

<div class="container">
  <div class="row ">
    <div class="col-md-6 mt-5">
      <div class="card text-center">
        <div class="card-header">
          <h6>Laravel Ajax File Upload</h6>
        </div>

        <div class="card-body p-5 ">
          <input id="FileId" class="form-control my-3" type="file">
          <button onclick="onUpload()" id="uploadBtnId" class="btn my-3 btn-block btn-info">Upload</button>
            <h5 id="UploadPercentageId"></h5>
        </div>
      </div>
    </div>

      <div class="col-md-6 card text-center mt-5">
          <div class="card-header">
              <h6>Laravel Ajax File Download</h6>
          </div>
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <td>No</td>
                      <td>Download</td>
                  </tr>
              </thead>
              <tbody class="tableData">

              </tbody>
          </table>
      </div>
  </div>
</div>


@endsection

@section('script')
    <script type="text/javascript" >

        //file download
        // getFileList();
        // function getFileList(){
        //     axios.get('/fileList')
        //         .then(function(response){
        //             let JSONDATA = response.data;
        //             $.each(JSONDATA,function(i){
        //                 $('<tr>').html(
        //                     "<td>"+JSONDATA[i].id+"</td>"+
        //                     "<td><button data-path="+JSONDATA[i].file_path+" class='btn downloadtBtn btn-primary'>Download</button></td>").appendTo('.tableData');
        //             })
        //
        //             $('.downloadBtn').click(function(){
        //                 let file_path= $(this).data('path');
        //                 alert('file_path');
        //             })
        //         }).catch(function(error){
        //
        //     });
        // }

         getFileList();
         function getFileList(){
            axios.get('/fileList').then(function(response){
                var JSONDATA =response.data;

                $.each(JSONDATA,function(i){
                     $('<tr>').html(
                        "<td>"+JSONDATA[i].id+"</td>"+
                        "<td><a href='/fileDownload/"+JSONDATA[i].file_path+"'  class='btn  btn-primary'>Download</a></td>").appendTo('.tableData');
                 })


                //jehetu route e file path use korci tai ekhon onclick lagbe na but button dile lagto
                // $('.downloadBtn').click(function(){
                //     let file_path= $(this).data('path');
                //     alert('file_path');
                // })
            }).catch(function(error){

             })
         }






        //Upload file
        //catch the file
        function onUpload(){
            //  let spinner = "<div class='spinner-border text-white shadow-sm' role='status' </div>";
            // $('#uploadBtnId').html(spinner);   //upload spinner(choto file er khetre hoy but boro file er khetre hoy na)

            let myFile = document.getElementById('FileId').files[0];
            let myFileName = myFile.name;
            let myFileSize =myFile.size;
            let myFileFormat =myFileName.split('.').pop();

           //prepare for axios for throwing the file into the controller

            let FileData = new FormData(); //form data er madhhome file ta axios er jonno ready korbo
            FileData.append('FileKey',myFile); //file k form data er modhhe append korlam

            //configuring the axios
            let config = {
                headers:{'content-type': 'multipart/form-data'},
                onUploadProgress:function (progressEvent){
                  let uploadPercentage= Math.round((progressEvent.loaded*100)/ progressEvent.total)
                  //$('#UploadPercentageId').html(uploadPercentage+ "%")  // percentage show korale lagbe

                    let uploadedMb = (progressEvent.loaded)/(1028*1028);    // (1028*1028)->byte k Mb te convert kora holo
                    let totalMb = (progressEvent.total)/(1028*1028);
                    let dueMb = totalMb-uploadedMb;

                    $('#UploadPercentageId').html("<b>Uploaded</b>: "+uploadedMb.toFixed(2)+"MB <b>Due</b>: "+dueMb.toFixed(2)+"MB <b>Total</b>: "+totalMb.toFixed(2)+"MB");
                }
            }


            let url = '/fileUp';
            axios.post(url,FileData,config)
            .then(function(response){
               if(response.status == 200){
                   $('#UploadPercentageId').html("Upload Success")
                   setTimeout(function(){
                       $('#UploadPercentageId').html(" ");
                   },2000)
               }else{
                   $('#UploadPercentageId').html('Upload failed')
                   setTimeout(function(){
                       $('#UploadPercentageId').html(" ");
                   },2000)
               }
            }).catch(function(error){
                    $('#UploadPercentageId').html('Upload failed')
                    setTimeout(function(){
                        $('#UploadPercentageId').html(" ");
                    },2000)
                });

        }


    </script>

@endsection
