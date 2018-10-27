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
                    if (data["results"][i]["thumbnail"]) {
                        document.getElementById(idname).innerHTML = "<img src=" + data["results"][i]["thumbnail"] + " style=\"width:150px;height:150px;border:0\" class=\"image\">";
                    } else {
                        document.getElementById(idname).innerHTML = "<img src=https://i.pinimg.com/originals/e0/9f/ff/e09fff0a2bc81e18f177f6549e402f33.gif style=\"width:150px;height:150px;border:0\" class=\"image\">";
                    }
                      document.getElementById((i+1)+"text").innerHTML = "<a href=" + data["results"][i]["href"] + ">" + data["results"][i]["title"] + "</a>";
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