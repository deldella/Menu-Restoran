<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Menu Restoran</title>
  </head>
  <body>
    <center><h1>Menu Restoran</h1>
    <a href="/tambah" type="button" class="btn btn-primary">Tambah Menu</a></center>
    <div class="container">
        <div class="row">
    <table class="table table-striped">
        <thead>
            <tr>
              <th scope="col-lg-3">#</th>
              <th scope="col-lg-3">Nama</th>
              <th scope="col-lg-3">Harga</th>
              <th scope="col-lg-3">Aksi</th>
              <th scope="col-lg-3">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($menures as $item)
            <tr>
              <th scope="row"></th>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->harga }}</td>
              <td>
                <a href="/tampilkandata/{{ $item->id }}" type="button" class="btn btn-warning">Edit</a>
                @csrf
                @method("Delete")</td>
                <td><a href="/delete/{{ $item->id }}" type="button" class="btn btn-danger">Hapus</a></td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
