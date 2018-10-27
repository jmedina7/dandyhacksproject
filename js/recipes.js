$(document).ready(function() {
  $("button").click(function() {
      var x = document.getElementById("foods").value;
      console.log(x);
      //var proxy = 'https://cors-anywhere.herokuapp.com/';
      fetch('http://www.recipepuppy.com/api/?i=' + x + '&p=1')
          .then(function(response) {
              console.log(response)
              response.json().then((data) => {
                  console.log(data)
                  for (var i = 0; i < data["results"].length; i++) {
                      var idname = "recipe" + (i + 1);
                      document.getElementById(idname).innerHTML = data["results"][i]["title"];
                  }
              });
          })
          .catch(function(error) {
              console.log('Looks like there was a problem: \n', error);
          });
  });
});