function sendData(){
  var myName  = document.getElementById('myName').value;
  var myRoll  = document.getElementById('myRoll').value;
  var myClass = document.getElementById('myClass').value;


  var url="/insertdata";
  var data={name:myName,roll:myRoll,class:myClass}; //json object

  axios.post(url,data) //two parameter url & json data
  .then(function(response){
     alert(response.data);
  })
  
  .catch(function(error){
    alert("Error");
  });
}

function deleteData(){
  var myId = document.getElementById('myId').value;
  var url  ="/deletedata";
  var data = {id:myId};

  axios.post(url,data)
  .then(function(response){
    alert(response.data);
  })
  .catch(function(error){
    alert("Error");
  });

}

function updateData(){
 
  var myName  = document.getElementById('myName').value;
  var myRoll  = document.getElementById('myRoll').value;
  var myClass = document.getElementById('myClass').value;
  var myId    = document.getElementById('myId').value;

  var url="/updatedata";
  var data={name:myName,roll:myRoll,class:myClass,id:myId};

  axios.post(url,data)
  .then(function(response){
     alert(response.data);
  })

  .catch(function(error){
    alert("Error");
  });

}