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
                  <h2><?= $title ?> <small><?= $buku->judul ?></small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="" role="tabpanel" data-example-id="togglable-tabs">

                      <!-- Tab -->
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_info" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Informasi</a></li>
                        <li role="presentation" class=""><a href="#tab_peminjaman" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Peminjaman Buku</a></li>
                      </ul>
                      <!-- End Tab -->

                      <!--Tab Content-->
                      <div id="myTabContent" class="tab-content">

                        <!--Tab Profil-->
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_info" aria-labelledby="profile-tab">
                          <form class="form-horizontal form-label-left">
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="judul">Judul</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                 <input class="form-control col-md-7 col-xs-12" value="<?= $buku->judul ?>" readonly>
                              </div>
                            </div>
                          </div>
                           <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis">Jenis</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                 <input class="form-control col-md-7 col-xs-12" value="<?= $buku->jenis ?>" readonly>
                              </div>
                            </div>
                          </div>
                           <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengarang">Pengarang</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                 <input class="form-control col-md-7 col-xs-12" value="<?= $buku->pengarang ?>" readonly>
                              </div>
                            </div>
                          </div>
                           <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="penerbit">Penerbit</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                 <input class="form-control col-md-7 col-xs-12" value="<?= $buku->penerbit ?>" readonly>
                              </div>
                            </div>
                          </div>
                           <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tahun_terbit">Tahun Terbit</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                 <input class="form-control col-md-7 col-xs-12" value="<?= $buku->tahun_terbit ?>" readonly>
                              </div>
                            </div>
                          </div>
                           <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jumlah">Jumlah</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                 <input class="form-control col-md-7 col-xs-12" value="<?= $buku->jumlah ?>" readonly><br><br>
                                 <span class="label label-primary">*Tersedia <?= $buku->jumlah - $buku->dipinjam ?> buku</span>
                              </div>
                            </div>
                          </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lokasi">Lokasi</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                 <input class="form-control col-md-7 col-xs-12" value="<?= $buku->lokasi ?>" readonly>
                              </div>
                            </div>
                          </div>
                           <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_input">Tanggal Input</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                 <input class="form-control col-md-7 col-xs-12" value="<?= date('d-M-Y', strtotime($buku->tgl_input)) ?>" readonly>
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
                                 $timestamp = strtotime(date($key->tgl_pinjam)); ?>
                                <div class="well">
                                  Buku <?= $key->judul ?></a> dipinjam oleh 
                                  <a href="<?= base_url('buku/show'.$key->nim) ?>"><?= $key->nama ?></a>
                                   pada <?= date('d-M-Y', $timestamp) ?>
                                  <a href="<?= base_url('peminjaman/show/'.$key->id_peminjaman) ?>" class="label label-primary"><i class="fa fa-chevron-circle-right"></i> Detail</a>
                                </div>
                                <?php } ?>
                                <br />
                              </div>
                            </li>
                          </ul>
                        </div>
                        <!--End Tab Peminjaman-->

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