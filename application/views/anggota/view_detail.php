<html lang="id">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SI Perpustakaan</title>

  <!-- CSS -->
  <?php $this->load->view('assets/view_css'); ?>
  <!-- End CSS -->

</head>

<body class="nav-md footer_fixed">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col menu_fixed">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="<?= base_url('beranda') ?>" class="site_title"><i class="fa fa-laptop"></i> <span>SI Perpustakaan</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <?php $this->load->view('menu/view_quickinfo'); ?>
          <!-- /menu profile quick info -->
          <br />

          <!-- Menu Sidebar -->
          <?php $this->load->view('menu/view_sidebar'); ?>
          <!-- End Menu Sidebar -->

        </div>
      </div>

      <!-- Top Nav -->
      <?php $this->load->view('menu/view_topnav'); ?>
      <!-- End Top Nav -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2><?= $title ?> <small><?= $anggota->nama ?></small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <!-- Profile -->
                  <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                    <center>
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <img class="img-responsive img-circle avatar-view" src="<?php echo base_url('public/img/anggota/'.$anggota->foto) ?>" alt="<?= $anggota->nama ?>">
                        </div>
                      </div>
                      <h3>
                        <?= $anggota->nama ?>
                      </h3>
                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-graduation-cap"></i>
                          <?= $anggota->jurusan. ' - '.$anggota->prodi ?>
                        </li>
                      </ul>

                      <a class="btn btn-sm col-lg-12 btn-success" href="<?= base_url('anggota/edit/'.$anggota->nim) ?>"><i class="fa fa-edit m-right-xs"></i> Ubah Profil</a>
                      <br />
                    </center>
                  </div>
                  <!-- End Profile -->

                  <div class="col-md-9 col-sm-9 col-xs-12">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">

                      <!-- Tab -->
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_profil" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profil</a></li>
                        <li role="presentation" class=""><a href="#tab_peminjaman" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Peminjaman Buku</a></li>
                        <li role="presentation" class=""><a href="#tab_absensi" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Absensi</a></li>
                      </ul>
                      <!-- End Tab -->

                      <!--Tab Content-->
                      <div id="myTabContent" class="tab-content">

                        <!--Tab Profil-->
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_profil" aria-labelledby="profile-tab">
                          <form class="form-horizontal form-label-left">
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nim">NIM</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                 <input class="form-control col-md-7 col-xs-12" value="<?= $anggota->nim ?>" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="nama" class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                <input class="form-control col-md-7 col-xs-12" value="<?= $anggota->nama ?>" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="jurusan" class="control-label col-md-3 col-sm-3 col-xs-12">Jurusan / Prodi</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                <input class="form-control col-md-7 col-xs-12" value="<?= $anggota->jurusan. ' / '.$anggota->prodi ?>" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="jurusan" class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                <input class="form-control col-md-7 col-xs-12" value="<?= $anggota->jk ?>" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat dan Tanggal Lahir</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                <input class="form-control col-md-7 col-xs-12" value="<?= $anggota->tempat. ', '.$anggota->tgl_lahir ?>" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="no_telp" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Telepon</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                <input class="form-control col-md-7 col-xs-12" value="<?= $anggota->no_telp ?>" readonly>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="alamat" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                <textarea class="form-control col-md-7 col-xs-12" readonly><?php echo $anggota->alamat ?></textarea>
                              </div>
                            </div>
                          </div>
                          </form>
                        </div>
                        <!--End Tab Profil-->

                        <!--Tab Peminjaman-->
                        <div role="tabpanel" class="tab-pane" id="tab_peminjaman" aria-labelledby="home-tab">
                          <ul class="messages">
                            <li>
                              <div class="message_wrapper">
                                <?php foreach ($peminjaman as $key) { 
                                $timestamp = strtotime(date($key->tgl_pinjam));
                                ?>
                                <div class="well">
                                  <?= $key->nama ?> melakukan peminjaman buku <a href="<?= base_url('buku/show/'.$key->id_buku) ?>">
                                  <?= $key->judul ?></a> pada <?= date('d-M-Y', $timestamp) ?>
                                  <a href="<?= base_url('peminjaman/show/'.$key->id_peminjaman) ?>" class="label label-primary"><i class="fa fa-chevron-circle-right"></i> Detail</a>
                                </div>
                                <?php } ?>
                                <br />
                              </div>
                            </li>
                          </ul>
                        </div>
                        <!--End Tab Peminjaman-->

                        <!--Tab Absensi-->
                        <div role="tabpanel" class="tab-pane" id="tab_absensi" aria-labelledby="home-tab">
                          <ul class="messages">
                            <li>
                              <div class="message_wrapper">
                                 <?php foreach ($absen as $key) { ?>
                                <div class="well">
                                  <a href="<?= base_url('anggota/show'.$key->nim) ?>"><?= $key->nama ?></a>
                                  melakukan absensi pada <?= date('d-M-Y', strtotime($key->date)) ?> pukul <?= date('H.s', strtotime($key->time)) ?>
                                </div>
                                <?php } ?>
                                <br />
                              </div>
                            </li>
                          </ul>
                        </div>
                        <!--End Tab Absensi-->

                      </div>
                      <!--End Tab Content-->

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

      <!-- Footer -->
      <?php $this->load->view('menu/view_footer'); ?>
      <!-- End Footer -->

    </div>
  </div>

  <!-- JS -->
  <?php $this->load->view('assets/view_js'); ?>
  <?php $this->load->view('assets/view_jscustom'); ?>
  <!-- End JS -->
</body>

</html>