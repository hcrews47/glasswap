
function convert(price){
  var xml = new XMLHttpRequest();
  var url ='https://api.coindesk.com/v1/bpi/currentprice/USD.json';
  var price = parseFloat(price.substring(15));

  xml.onreadystatechange = function() {
    if (this.readyState == 4  &&  this.status == 200) {
      var json = JSON.parse(this.responseText);
      parseJson(json);
  }
  };
  xml.open("GET", url, true);
  xml.send();
  function parseJson(json){
  var conversion = parseFloat(json["bpi"]["USD"]["rate"]);
  in_bit = price/conversion;
  document.getElementById("bit_cost").innerHTML = in_bit;
}
  //
  // let url = 'https://api.coindesk.com/v1/bpi/currentprice/USD.json';
  // let price = parseFloat(price.substring(1));
  // fetch(url)
  // .then(function(response){
  //   let convert_data = response.json();
  //   conversion = parseFloat(convert_data.bpi.USD.rate);
  //   in_bit = price / conversion;
  //   return in_bit;
  // })

}

// $(document).ready(function() {
//   $('#weatherLocation').onload(function() {
//
//     let request = new XMLHttpRequest();
//     let url = `http://api.openweathermap.org/data/2.5/weather?q=${city}&appid=[API-KEY-GOES-HERE]`;
//
//     request.onreadystatechange = function() {
//       if (this.readyState === 4 && this.status === 200) {
//         let response = JSON.parse(this.responseText);
//         getElements(response);
//       }
//     }
//
//     request.open("GET", url, true);
//     request.send();
//
//     getElements = function(response) {
//       $('.showHumidity').text(`The humidity in ${city} is ${response.main.humidity}%`);
//       $('.showTemp').text(`The temperature in Kelvins is ${response.main.temp} degrees.`);
//     }
//   });
// });
