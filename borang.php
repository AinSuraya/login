<h2>Borang Pembelian</h2>
<form action="simpan.php" method="POST">
 <table>
 <tr>
 <td><label for="nama">Nama Pembeli</label></td>
 <td><input id="nama" type="text" name="nama" value="" required /></td>
 </tr>
 <tr>
 <td><label for="jenis">Jenis Barang</label></td>
 <td><input id="jenis" type="text" name="jenis" value="" required /></td>
 </tr>
 <tr>
 <td><label for="alamat">Alamat</label></td>
 <td><textarea id="alamat" name="alamat" required></textarea></td>
 </tr>
 <tr>
 <td><label for="telefon">No Telefon</label></td>
 <td><input id="telefon" type="text" name="telefon" value="" required /></td>
 </tr>
 <tr>
 <td><label for="harga">Harga</label></td>
 <td>
 <input id="harga" type="number" step="any" name="harga" value="" required />
 </td>
 </tr>
 <tr>
 <td><button type="submit">SIMPAN</button></td>
 </tr>
 </table>
</form>