$(document).ready(function() {
  $("button").click(function() {
      var x = document.getElementById("foods").value;
      console.log(x);
      fetch('http://www.recipepuppy.com/api/?i=' + x + '&p=1')
          .then(function(response) {
              console.log(response)
              response.json().then((data) => {
                  console.log(data)
                  if (data["results"].length == 0) {
                    document.getElementById("resultText").innerHTML = "There were no recipes for " + x
                  } else {
                    document.getElementById("resultText").innerHTML = "We found " + data["results"].length + " results."
                  for (var i = 0; i < data["results"].length; i++) {
                      var idname = "recipe" + (i + 1);
                      document.getElementById(idname).innerHTML = data["results"][i]["title"];
                      document.getElementById(idname).href = data["results"][i]["href"];
                      document.getElementById(idname).target = "_blank";
                  }
                }
              });
          })
          .catch(function(error) {
              console.log('Looks like there was a problem: \n', error);
          });
  });
});