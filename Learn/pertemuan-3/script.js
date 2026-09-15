const tombolUbahJudul = document.getElementById("ubah-judul");
const tombolTambah = document.getElementById("tambah");
const judul = document.getElementById("judul");
const tabelBody = document.getElementById("tabelBody");

tombolUbahJudul.addEventListener("click", function () {
  judul.innerHTML = "Data Mahasiswa Informatika";
  alert("judul berhasil diubah");
});

tombolTambah.addEventListener("click", function () {
  let nomor = 4;
  let row = `
<td>${nomor}</td>
<td>Alfi</td>
<td>Fikri</td>
<td>@Sport</td>
`;
  tabelBody.insertAdjacentHTML("beforeend", row);
});
