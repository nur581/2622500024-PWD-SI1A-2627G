function kirimBukuTamu() {
  // ambil nilai input dengan getElementById (lebih rapi dari querySelectorAll)
  let nama = document.getElementById('namaLengkap').value.trim();
  let email = document.getElementById('emailAktif').value.trim();
  let pesan = document.getElementById('pesanTamu').value.trim();
  let status = document.getElementById('statusPesan');

  // validasi nama
  if (nama === "") {
    alert("Nama lengkap wajib diisi ya!");
    status.textContent = "Silakan isi nama dulu.";
    status.style.color = "red";
    return false;
  }

  // validasi email
  if (email === "") {
    alert("Email jangan kosong ya!");
    status.textContent = "Email harus diisi.";
    status.style.color = "red";
    return false;
  }

  // validasi pesan
  if (pesan === "") {
    alert("Pesan masih kosong nih!");
    status.textContent = "Tulis pesan dulu ya.";
    status.style.color = "red";
    return false;
  }

  // jika semua terisi
  alert("Terima kasih " + nama + "! Pesan kamu sudah masuk ke Kopi Bangka Nuralizah. Kami akan segera balas ke " + email);
  status.textContent = "Yeay! Pesan berhasil terkirim. Terima kasih ya!";
  status.style.color = "green";
  
  return false; // biar halaman tidak reload
}