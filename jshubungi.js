// Ambil elemen daftar-kontak
var daftarKontak = document.getElementsByClassName('daftar-kontak')[0];

// Tambahkan event listener untuk setiap elemen daftar-kontak
var kontakLinks = daftarKontak.getElementsByTagName('a');
for (var i = 0; i < kontakLinks.length; i++) {
  kontakLinks[i].addEventListener('mouseover', function() {
    this.style.backgroundColor = '#e0e0e0'; // Ubah warna latar belakang saat mouse masuk
  });

  kontakLinks[i].addEventListener('mouseout', function() {
    this.style.backgroundColor = '#f2f2f2'; // Kembalikan warna latar belakang saat mouse keluar
  });
}
