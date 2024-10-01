<?php
include_once('templates/header.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Laporan Tamu</h1>
<div class="row mx-auto d-flex justify-content-center">
    <!-- periode awal -->
     <div class="col-xl-5 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text gray-800">
                            <form action="" method="post">
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <div class="font-weight-bold text-primary text-uppercase mb-1">
                                            Periode
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <input type="date" class="form-control mb-2" id="p_awal" name="p_awal" required>
                                    </div>
                                    <div class="col-auto">
                                        <div class="font-weight-bold text-primary mb-1">
                                            s.d
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <input type="date" class="form-control mb-2" id="p_akhir" name="p_akhir" required>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" name="tampilkan" class="btn btn-primary mb-2">tampilkan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>
<div class="card shadow mb-4">
    <div class="crad-header py-3">
        <span class="text">Tabel Histori Tamu</span>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
            </table>
        </div>
    </div>
</div>
</div>
<!-- /.container-fluid -->


<?php
include_once('templates/footer.php');
?>