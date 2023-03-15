<div class="container">
    <form action="<?= base_url('auth/registerProcess') ?>" onsubmit="return checkPassword()" method="post"
        class="row d-flex mt-5 justify-content-center align-items-center flex-column w-100" style="min-height: 80vh">
        <div class="mb-4 col-3 w-50">
            <label class="form-label" for="nama">Nama lengkap</label>
            <input name="nama" id="nama" class="form-control" required />
        </div>
        <div class="mb-4 col-3 w-50">
            <label class="form-label" for="nik">NIK</label>
            <input name="nik" id="nik" class="form-control" required />
        </div>
        <div class="mb-4 col-3 w-50">
            <label class="form-label" for="email">Email</label>
            <input name="email" type="email" id="email" class="form-control" required />
        </div>
        <div class="mb-4 col-3 w-50">
            <label class="form-label" for="gd">Golongan darah</label>
            <select name="golongan" id="gd" class="form-select" required>
                <option value="A">A</option>
                <option value="AB">AB</option>
                <option value="B">B</option>
                <option value="O">O</option>
                <option value="Tidak Ada">-</option>
            </select>
        </div>
        <div class="mb-4 col-3 w-50">
            <label class="form-label" for="jk">Jenis kelamin</label>
            <select name="jenis_kelamin" id="jk" class="form-select" required>
                <option value="Laki - laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-4 col-3 w-50">
            <label class="form-label" for="tb">Tinggi badan</label>
            <input name="tinggi_badan" type="number" id="tb" class="form-control" required />
        </div>
        <div class="mb-4 col-3 w-50">
            <label class="form-label" for="bb">Berat badan</label>
            <input name="berat_badan" type="number" id="bb" class="form-control" required />
        </div>
        <div class="mb-4 col-3 w-50">
            <label class="form-label" for="umur">Umur</label>
            <input name="umur" id="umur" type="number" class="form-control" required />
        </div>
        <div class="mb-4 col-3 w-50">
            <label class="form-label" for="nowhatsapp">No whatsapp</label>
            <input name="no_whatsapp" id="nowhatsapp" class="form-control" required />
        </div>
        <div class="mb-4 col-3 w-50">
            <label class="form-label" for="cabang">Cabang</label>
            <select name="cabang_id" id="cabang" class="form-select" required>
                <?php foreach ($cabang as $c): ?>
                    <option value="<?= $c['cabang_id'] ?>"><?= $c['nama_cabang'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-4 col-3 w-50">
            <label class="form-label" for="paket">Paket</label>
            <select name="paket_id" id="paket" class="form-select" required>
                <?php foreach ($paket as $p): ?>
                    <option value="<?= $p['paket_id'] ?>"><?= $p['nama_paket'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="mb-4 col-3 w-50">
            <label class="form-label" for="username">Username</label>
            <input name="username" id="username" class="form-control" required />
        </div>
        <div class="mb-4 col-3 w-50">
            <label class="form-label" for="password">Password</label>
            <input name="password" type="password" id="password" class="form-control" required />
        </div>
        <div class="mb-4 col-3 w-50">
            <label class="form-label" for="passwordc">Konfirmasi Password</label>
            <input id="passwordc" type="password" class="form-control" required />
        </div>


        <!-- Submit button -->
        <input type="submit" class="btn btn-primary btn-block mb-4 w-50">Sign up</input>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Sudah punya akun? <a href="<?= base_url('login') ?>">Login</a></p>
        </div>
    </form>

</div>

<script>
    let pass = document.getElementById("password");
    let passc = document.getElementById("passwordc");
    let error = "<?= ($this->session->flashdata("error")) ? $this->session->flashdata("error") : '' ?>";
    if (error) {
        alert(error);
    }
    function checkPassword() {
        console.log(pass.value, passc.value);
        if (pass.value === passc.value) {
            return true;
        }
        alert("Konfirmasi password tidak sama!")
        return false;
    }
</script>