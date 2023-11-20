var tab = [];
var i = 0;

while (true) {
  tab[i] = prompt("Saisir un nombre");
  tab[i] = parseInt(tab[i]);
  if (tab[i] > 0) {
    i++;
  } else {
    alert("votre entier est inferieur à 0");
    break;
  }
}

fetch("http://127.0.0.1:5500", {
    method: 'POST',
    headers: {
        'Content-Type':'application/json',
    
    },
    body: JSON.stringify({ numbers: tab}),
})

  .then(response => {
      return response.json();
  })
  .then(tab => {
      var myDiv = document.getElementById("myDiv");
      var virgule = tab.join();
      myDiv.innerHTML += `${virgule}`;
    console.log(tab);
  })
  .catch((error) => {
    // Gérer les erreurs
    console.error("Erreur lors de la requête fetch :", error);
  });

