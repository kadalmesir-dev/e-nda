<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
      <div class="card">
        <div class="card-body">
          <div class="app-brand justify-content-center">
            <span class="app-brand-logo demo">
              <img src="<?= base_url('/assets/img/illustrations/dan_liris.png');?>" alt="Logo" style="height: 50px; " />
            </span>
            <span class="app-brand-text demo text-body fw-bolder" style="text-transform: capitalize; margin-left: 15px;">admin login</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">Welcome to Admin Login! 👋</h4>
          <p class="mb-4">Please log in to your account</p>

          <form id="formAuthentication" class="mb-3" action="<?= base_url('auth');?>" method="POST">
            <div class="mb-3">
              <label for="email" class="form-label">Username</label>
              <input
                type="text"
                class="form-control"
                id="username"
                name="username"
                placeholder="Enter your usernmae"
                autofocus />
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
              </div>
              <div class="input-group input-group-merge">
                <input
                  type="password"
                  id="password"
                  class="form-control"
                  name="password"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>

            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Script  JS cegah enter-->
<script>
  document.getElementById("username").addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
      event.preventDefault(); // cegah form submit
      document.getElementById("password").focus(); // fokus ke password
    }
  });

  document.getElementById("password").addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
      // Di sini enter akan langsung submit karena ini field terakhir
      document.getElementById("formAuthentication").submit();
    }
  });
</script>

