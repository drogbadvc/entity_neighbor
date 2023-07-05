const data = JSON.stringify({
  "lang": "fr",
  "title": "banane",
  "nPredLevels": 0,
  "nSuccLevels": 1,
  "reverseData": false,
  "keyword": "banane"
});

const xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === this.DONE) {
    console.log(this.responseText);
  }
});

xhr.open("POST", "https://www.machinools.com/api/entity/neigh_graph");
xhr.setRequestHeader("Content-Type", "application/json");

xhr.send(data);
