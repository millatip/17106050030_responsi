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
                            <?php $info = $this->session->flashdata('info');
                            if (isset($info)) {?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong><?php echo $info; ?></strong>
                            </div>
                            <?php } ?>
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>
                                        <?= $title ?> <small><?= $peminjaman->judul ?></small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <form class="form-horizontal form-label-left">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Peminjam</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                        <input class="form-control col-md-7 col-xs-12" value="<?= $peminjaman->nama ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="judul">Buku</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                        <input class="form-control col-md-7 col-xs-12" value="<?= $peminjaman->judul ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_pinjam">Tanggal Pinjam / Pukul</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                        <input class="form-control col-md-7 col-xs-12" value="<?= date('d-M-Y / H.s', strtotime($peminjaman->tgl_pinjam ))?> WIB" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_kembali">Deadline Pengembalian</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                        <input class="form-control col-md-7 col-xs-12" value="<?= $peminjaman->tgl_kembali ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                        <input class="form-control col-md-7 col-xs-12" value="<?= $peminjaman->status ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="denda">Denda</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                        <input class="form-control col-md-7 col-xs-12" value="<?= $peminjaman->denda ?> <?php if($peminjaman->denda == 'Ya') {
                                                            echo '- Rp. '.$peminjaman->total;
                                                        } ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="catatan">Catatan</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                        <textarea class="form-control col-md-7 col-xs-12" cols="30" rows="3" readonly><?= $peminjaman->catatan ?></textarea>
                                                        <!--<input class="form-control col-md-7 col-xs-12" value="<?= $peminjaman->catatan ?>" readonly>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if($peminjaman->status == 'Belum Kembali') { ?>
                                            <div class="form-group">
                                                <div class="col-md-9 col-sm-9 col-xs-9 text-right">
                                                    <a href="<?= base_url('peminjaman/edit/'.$peminjaman->id_peminjaman) ?>" class="btn btn-success"><i class="fa fa-check"></i> Kembalikan Buku</a>
                                                </div>
                                            </div>                                         
                                            <?php } ?>
                                        <br>
                                        </form>
                                    </div>
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