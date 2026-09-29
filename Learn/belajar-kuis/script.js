function editCard1() {
  let judul = prompt("Masukan judul baru : ")
  let deskripsi = prompt("Masukan deskripsi baru : ")
  const title = document.getElementById('cardTitle')
  const description = document.getElementById('cardDescription')
  title.innerText = judul;
  description.innerText = deskripsi;
}
