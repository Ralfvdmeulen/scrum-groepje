// header

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click" , () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");

})

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");

}));

// registratie

// const openRegistratie = document.getElementById('registratieForm');
// const tabel = document.getElementById('klantSelect');
// const rij = tabel.getElementsByTagName('tr');

// for(let i= 0; i < rij.length; i++) {
//     rij[i].addEventListener('click', () =>{
//         const cel = querySelectorAll('td');
//         const cel1Value = cel[0].innerText;
//         const cel2Value = cel[1].innerText;
//         const cel3Value = cel[2].innerText;

//         console.log(cel1Value);
//     })
// }

      // Get the table element
      const registratie = document.getElementById('registratieForm');
      const table = document.getElementById('klantSelect');
      let input = document.getElementById('klantIn');

      // Get all the table rows
      const rows = table.getElementsByTagName('tr');

      // Add click event listener to each row
      for (let i = 0; i < rows.length; i++) {
        rows[i].addEventListener('click', function() {
          // Get the cell values within the clicked row
          const cells = this.childNodes;
          let cell1Value, cell2Value, cell3Value;

          for (let j = 0; j < cells.length; j++) {
            if (cells[j].nodeType === 1) { // Check for element nodes
              if (!cell1Value) {
                cell1Value = cells[j].innerText;
              } else if(!cell2Value) {
                cell2Value = cells[j].innerText;
              }
              else{
                cell3Value = cells[j].innerText;
              }
            }
          }

          console.log(klantIn);
          registratie.classList.remove("hide");
          table.classList.add('hide'); 
          klantIn.value = cell1Value + " " + cell2Value + " " + cell3Value;
        });

      }

// selectKlant.addEventListener('click', () =>{
//     console.log(selectKlant.value);
// })