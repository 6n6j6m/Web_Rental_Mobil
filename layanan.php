<?php
    include"header.php";
  ?>

<body>
  <div class="container">
    <h2>Layanan Sewa</h2>
    <br><br>

    <i><p>Mohon diisi keperluan sewa, Agar kami dapat meresponnya</p></i>
    
    <form action="#" method="post">
    <div class="form-group">
        <label for="number">Nomor HP (WhatsApp):</label>
        <input type="text" id="name" name="name" placeholder= "Tulis dengan format +62" required>
      </div>
      <div class="form-group">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" placeholder= "Isi Nama Panjang" required>
      </div>
      <div class="form-group">
        <label for="email">Alamat Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="pilmobil">Pilih mobil</label>
        <select id="pilmobil" name="pilmobil" required>
            <option value="cayla">Cayla</option>
            <option value="brio">Brio</option>
            <option value="veloz">Avanza Veloz</option>
            <option value="avanza">avanza</option>
            <option value="xenia">Xenia</option>
            <option value="xpander">Xpander</option>
            <option value="jazz">Jazz</option>
            <option value="terios">Terios</option>
            <option value="innova">Innova Reborn</option>
            <option value="hilux">Hilux</option>
            <option value="pajero">Pajero Sport</option>
            <option value="fortuner">Fortuner</option>
            <option value="aplphard">Aplhard</option>
            <option value="landc">Land Cruiser</option>
            <option value="rubicon">Rubicon</option>
        </select>
      </div>
      <div class="form-group">
        <label for="termasuk">Termasuk</label>
        <select id="termasuk" name="termasuk" required>
            <option value="ms">Mobil + Sopir</option>
            <option value="msb">Mobil + Sopir + BBM</option>
            <option value="msbt">Mobil + Sopir + BBM + Toll + Parkir</option>
            <option value="msbtm">Mobil + Sopir + BBM + Toll + Parkir  + Makan</option>
            <option value="msbtmi">Mobil + Sopir + BBM + Toll + Parkir + Makan + Inap</option>
        </select>
      </div>
      <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" id="tanggal" name="tanggal" required>
      </div>
      <div class="form-group">
        <label for="lama">Lama Hari Penyewaan</label>
        <input type="number" id="lama" name="lama" required>
      </div>
      <div class="form-group">
        <label for="jemput">Lokasi Penjemputan</label>
        <textarea id="jemput" name="jemput" required></textarea>
      </div>
      <div class="form-group">
        <label for="tujuan">Tujuan Penyewaan</label>
        <input type="text" id="tujuan" name="tujuan">
      </div>
      <div class="form-group">
        <label for="note">Note (Opsional)</label>
        <textarea id="note" name="note"></textarea>
      </div>

      <div class="form-group">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>

  <?php
    include"footer.php";
  ?>