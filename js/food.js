fetch('http://www.recipepuppy.com/api/?i=chicken,pasta&p=3')
.then(function(response) {
  console.log(response)
  response.json().then((data) => {
        console.log(data);
    });
})
.catch(function(error) {
  console.log('Looks like there was a problem: \n', error);
});