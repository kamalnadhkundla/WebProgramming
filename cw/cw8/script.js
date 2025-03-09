const apiKey = 'demo'; // Replace with your Alpha Vantage API key
const stockSymbol = 'MSFT'; // Set the stock symbol you want to retrieve

const stockPriceContainer = document.getElementById('stockdata');

function fetchStockPrice() {
  const url = `https://www.alphavantage.co/query?function=GLOBAL_QUOTE&symbol=${stockSymbol}&apikey=${apiKey}`;

  fetch(url)
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
        console.log(data);
      const stockPrice = data['Global Quote']['05. price'];
      stockPriceContainer.textContent = `Stock Symnol = ${stockSymbol}: \n price = $${stockPrice}`;
    })
    .catch((error) => {
      stockPriceContainer.textContent = `Error: ${error.message}`;
    });
}

// Call the function to fetch the stock price
fetchStockPrice();

// Implement auto-refresh functionality
setInterval(fetchStockPrice, 30000);