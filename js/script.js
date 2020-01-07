let quote;
let source;
let type;
let citation;
let year;
const customQuote = document.querySelector('#customQuote');

const printQuote = () => {
  let string = "";
  string += "<p class='quote'>" + quote + "</p>";
  string += "<p class='source'>" + source;
  if (type) {
    string += "<span class='type'>" + type + "</span>";
  }
  if (citation) {
    string += "<span class='citation'>" + citation + "</span>";
  }
  if (year) {
    string += "<span class='year'>" + year + "</span>";
  }
  string += "</p>";
  document.getElementById('quote-box').innerHTML = string;
}

customQuote.addEventListener('click', () => {
  quote = prompt("Enter a custom quote.");
  source = prompt("Enter the source.");
  type = prompt("Enter the type.");
  citation = prompt("Enter the citation.");
  year = prompt("Enter the year.");
  printQuote();
});
