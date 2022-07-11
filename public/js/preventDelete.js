const del = document.querySelectorAll(".del");

if (del) {
  del.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      conf = confirm("Deseja mesmo apagar a nota? Essa ação é irreversível");
      if (!conf) e.preventDefault();
    });
  });
}
