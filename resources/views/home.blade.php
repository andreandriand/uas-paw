@extends('layouts.main')

@section('content')

<!-- Jumbotron -->

  <section id="jumbotron" class="jumbotron text-center pt-5 bg-purple">
    <div class="container">
      <img src="img/1.png" alt="Gambar" width="200" class="rounded-circle" />
      <p class="lead fw-bolder fs-2">Hi, Welcome to Our Page</p>
      <p>Discover Something New Down Below</p>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path id="about" fill="#560bad" fill-opacity="1" d="M0,64L60,96C120,128,240,192,360,192C480,192,600,128,720,117.3C840,107,960,149,1080,144C1200,139,1320,85,1380,58.7L1440,32L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
  </section>

  <!-- End Jumbotron -->

  <!-- CRUD -->

  <section id="crud" class="text-light bg-purple2">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h2>Let's Build Your Future Palace</h2>
        </div>
      </div>
      <div class="row mt-5 text-center justify-content-center">
        <div class="col-md-3">
          <p class="mb-4">Pesan Alat dan Bahan Disini</p>
          <form>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Anda :</label>
              <input type="text" class="form-control" id="nama" aria-describedby="namaPelanggan">
            </div>
            <div class="mb-3">
              <label for="produk" class="form-label">Barang :</label>
              <select class="form-select form-select-sm" aria-label="Form Pemesanan">
                <option selected>Pilih barang yang ingin dipesan</option>
                <option value="1">Semen</option>
                <option value="2">Batu Bata</option>
                <option value="3">Kayu</option>
                <option value="4">Palu</option>
                <option value="5">Sekop</option>
                <option value="6">Bor Listrik</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label" for="qty">Qty :</label>
              <input type="number" class="form-control" id="qty">
            </div>
            <button type="submit" class="btn btn-primary mt-5 mb-5">Pesan</button>
          </form>
        </div>
    </div>
  </section>

  <!-- End CRUD -->

  <!-- Login -->

  <div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="">
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Username : </label>
              <input type=text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password : </label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- End Login -->

  <!-- Register -->

  <div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Register</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="">
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Username : </label>
              <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="email">Email : </label>
              <input type="text" class="form-control" name="email" id="email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password : </label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" name="register" class="btn btn-primary">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- End Register -->

  <!-- Footer -->

  <footer id="footer" class="bg-footer text-light text-center p-2">Created by Andre &copy; 2022</footer>

  <!-- End Footer -->

@endsection
