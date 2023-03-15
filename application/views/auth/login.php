<div class="container">
    <form action="<?= base_url('/auth/loginProcess') ?>" method="post"
        class="row d-flex justify-content-center align-items-center flex-column w-100" style="height: 80vh">
        <div class="mb-4 col-3 w-25">
            <label class="form-label" for="email">Username</label>
            <input id="username" name="username" class="form-control" />
        </div>
        <div class="mb-4 col-3 w-25">
            <label class="form-label" for="password">Password</label>
            <input id="password" name="password" type="password" class="form-control" />
        </div>


        <!-- Submit button -->
        <input type="submit" class="btn btn-primary btn-block mb-4 w-25">Sign in</input>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Belum daftar? <a href="<?= base_url('register') ?>">Register</a></p>
        </div>
    </form>

</div>

<script>
    let error = "<?= ($this->session->flashdata("error")) ? $this->session->flashdata("error") : '' ?>";
    if (error) {
        alert(error);
    }
</script>