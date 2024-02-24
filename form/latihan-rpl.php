<form action="proses-latihan-rpl.php" method="POST">
    <div>
        <label>Nama</label> <br>
        <input type="text" name="nama"> <br>
    </div>
    <div>
        <label for="">Jenis Kelamin</label><br>
        <select name="jk" id=""> <br>
            <option value="Pria">Pria</option> <br>
            <option value="Wanita">Wanita</option> <br>
        </select>
    </div>
    <div>
        <label>Tanggal Lahir</label> <br>
        <input type="date" name="tanggal_lahir"> <br>
    </div>
    <div>
        <label>Ketegori Olahraga</label> <br>
        <input type="radio" name="kategori" value="Sepak Bola"> Sepak Bola <br>
        <input type="radio" name="kategori" value="Bulu Tangkis"> Bulu Tangkis <br>
        <input type="radio" name="kategori" value="Renang"> Renang <br>
    </div>
    <div>
        <label>Kelas</label> <br>
        <input type="Checkbox" name="kelas" value="Pemula"> Pemula <br>
        <input type="Checkbox" name="kelas" value="Menengah"> Menengah <br>
        <input type="Checkbox" name="kelas" value="Lanjutan"> Lanjutan <br>
    </div>
    <div>
        <label>Kemampuan Fisik</label><br>
        <textarea name="kemampuan" id="" cols="15" rows="2"></textarea><br>
    </div>
    <div>
        <label for="">Metode pembayaran</label><br>
        <select name="pembayaran" id=""> <br>
            <option value="Transfer">Transfer</option> <br>
            <option value="Bank">Bank</option> <br>
            <option value="Kartu Kredit">Kartu Kredit</option> <br>
        </select>
    </div><br>
    <div>
        <button>Submit</button>
    </div>
</form>