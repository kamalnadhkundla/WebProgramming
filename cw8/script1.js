window.addEventListener("DOMContentLoaded", function () {
    document.querySelector("#fetchStocksBtn").addEventListener("click", function () {
       // Get values from drop-downs
       const symbolDropdown = document.querySelector("#symbolSelection");
       const selectedSymbol = symbolDropdown.options[symbolDropdown.selectedIndex].value;
       fetchStocks(selectedSymbol);
    });
 });
 
 function fetchStocks(symbol) {
    // Modify the endpoint URL to include the selected topic and count
    const key ="demo";
    const endpoint = `https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=${symbol}&apikey=${key}`;
    const stockSymbol = document.querySelector("#stock-symbol");
    const stockPrice = document.querySelector("#stock-price");
 
    fetch(endpoint)
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
             const quotes = document.querySelector("#stock-price");
             if(data['Global Quote']) {
                 let html = "<h3> Stock Prices retrived from API</h3>";
                 html += "<dl>";
                 html += `<dt>Stock Symbol</dt> <dd> ${data['Global Quote']['01. symbol']} </dd>`;
                 html += `<dt>Stock Price </dt> <dd>${data['Global Quote']['05. price']} </dd>`;
                 html += "</dl>";
                 quotes.innerHTML = html;
             } else {
                 quotes.innerHTML = "No stocks available. API key expired.";
             }
        })
        .catch(function(error) {
            console.log("Error fetching stocks:", error);
            showError(); // Display anonymous quotes on error
        });
 }
 
 function showError() {
    const quotes = document.querySelector("#stock-price");
    let html = "<ol>";
    html += `<li>Stock Price API is not working</li>`;
    html += "</ol>";
    quotes.innerHTML = html;
 }