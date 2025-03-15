<table class="table">
        <tr>
          <td><label for="nama_pelapor" class="form-label">Nama Pelapor</label></td>
          <td><input type="text" class="form-control" id="nama_pelapor" name="nama_pelapor" placeholder="Masukkan nama"
              required></td>
        </tr>
        <tr>
          <td><label for="nomor_hp" class="form-label">Nomor Telepon</label></td>
          <td><input type="text" class="form-control" id="nomor_hp" name="no_hp" placeholder="Masukkan nomor telepon">
          </td>
        </tr>
        <tr>
          <td><label for="jenis_pengaduan" class="form-label">Jenis/Kategori Laporan</label></td>
          <td>
            <select class="form-select" id="jenis_pengaduan" name="jenis_aduan" required>
              <option value="Infrastruktur">Infrastruktur</option>
              <option value="Lingkungan">Lingkungan</option>
              <option value="Kesehatan">Kesehatan</option>
              <option value="Lainnya">Lainnya</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><label for="detail_pengaduan" class="form-label">Detail Pengaduan</label></td>
          <td><textarea class="form-control" id="detail_pengaduan" name="detail_aduan" rows="3" required></textarea>
          </td>
        </tr>
        <tr>
          <td><label for="lampiran" class="form-label">Lampiran (Opsional)</label></td>
          <td><input type="file" class="form-control" id="lampiran" name="lampiran"></td>
        </tr>
        <tr>
          <td colspan="2">
            <input name="status" type="hidden" value="menunggu" />
            <button type="submit" class="btn btn-primary">Kirim Pengaduan</button>
          </td>
        </tr>
      </table>