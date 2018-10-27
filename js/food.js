$(document).ready(function(){
  $("button").click(function(){
    var x = document.getElementById("foods").value;
    console.log(x);
    fetch('http://www.recipepuppy.com/api/?i=' + x + '&p=3')
    .then(function(response) {
      console.log(response)
      response.json().then((data) => {
            for (var i = 0; i < data["results"].length; i++) {
              var idname = "recipe" + (i+1);
<<<<<<< HEAD
              document.getElementById(idname).innerHTML = data["results"][i]["title"];
=======
<<<<<<< HEAD
              document.getElementById(idname).innerHTML = data["results"][i]["title"];
=======
              document.getElementById(idname).innerHTML = data["results"][i]["href"];
>>>>>>> 9c175e033d9196b15ecdcd1f8912fbb57a4c3ddb
>>>>>>> 1546a5866146d5a02a99be6406e89f7be7889439
              
            }
        });
    })
    .catch(function(error) {
      console.log('Looks like there was a problem: \n', error);
    });
  });
});

