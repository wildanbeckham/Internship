<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/all.css">
    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/style.css">
	<title>Welcome</title>
</head>
<body style="background-color: #F1F1F1;">

    <!-- NAVBAR -->
    <div class="container mt-2 bg-light">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="btn btn-warning text-light px-5" data-toggle="modal" data-target=".bd-example-modal-lg13" href="#"><b>TAMBAH</b></a>
                <div class="justify-content-end">
                    <a class="btn text-secondary mr-3 bg-success active text-light"  href="<?= base_url('index.php'); ?>" style="background-color: #F1F1F1;">Foto</a>
                    <a class="btn text-secondary mr-5" style="background-color: #F1F1F1;">Video</a>
                    <a class="btn text-secondary" href="#" style="background-color: #F1F1F1;">Filter By</a>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg">
            <div class="container justify-content-center">
                <div class="">
                    <a class="btn text-secondary mx-1 bg-success active text-light" href="<?= base_url('index.php'); ?>" style="background-color: #F1F1F1;">All</a>
                    <a class="btn text-secondary mx-1" href="<?= base_url('index.php/home/jalan'); ?>" style="background-color: #F1F1F1;">Jalan Tol</a>
                    <a class="btn text-secondary mx-1" href="<?= base_url('index.php/home/jembatan'); ?>"  style="background-color: #F1F1F1;">Jembatan</a>
                    <a class="btn text-secondary mx-1" href="<?= base_url('index.php/home/under'); ?>" style="background-color: #F1F1F1;">Underpass</a>
                </div>
            </div>
        </nav>        
        <!-- MODAL TAMBAH -->
        <div class="modal fade bd-example-modal-lg13" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="container modal-content">
            <div class="row justify-content-end pr-2">
              <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-dialog"></div>
              <div class="">
                <div class="row" style="margin-top: -50px;">
                  <div class="col" style="border-right: solid #F1F1F1 2px;">
                    <h3 class="container pb-5"><b>Upload File</b></h3>
                    <div class="mx-5 pt-4" style="background-color: #F1F1F1">
                      <div class="mx-5 my-5 text-center card-body text-secondary">
                        <h5 class="card-title"><i class="h1 fas fa-cloud-upload-alt"></i></h5>
                        <p class="card-text pb-1">Drop File Document Here</p>
                        <div class="input-group mb-3">
                          <div class="">
                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="btn bg-primary text-light px-5" for="inputGroupFile01">Browse</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col p-5">
                    <div class="row">
                        <div class="form-group">
                            <textarea class="form-control" style="width: 80vh; height: 20vh; background-color: #F1F1F1" rows="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <img style="height: 35vh; width: 80vh; background-size: cover; background-image: url(assets/img/upload/under4.jpg);">
                    </div>
                    <div class="row pt-5">
                        <input style="width: 80vh; background-color: #F1F1F1" type="text" class="form-control" placeholder="Pilih Tag">
                    </div>
                    <div class="row pt-3" style="width: 80vh;">
                        <div class="col">
                            <button class="btn btn-secondary btn-block" data-dismiss="modal">Batal</button>
                        </div>
                        <div class="col">
                            <button class="btn btn-warning btn-block" data-dismiss="modal">Simpan</button>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div> 