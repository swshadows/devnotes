const del = document.querySelectorAll(".del");
const cancel = document.querySelector(".cancel-modal");
const modal = document.querySelector(".modal-delete");

if (del) {
  del.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      showModal(e);
    });
  });
}

cancel.addEventListener("click", closeModal);

function showModal(e) {
  const linkString = "forms/del_note?id=";
  const link = document.querySelector(".modal-content .del-modal");
  const { id } = e.currentTarget.dataset;
  modal.style.display = "grid";
  link.href = `${linkString}${id}`;
}

function closeModal() {
  modal.style.display = "none";
}
