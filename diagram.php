<?php 
include 'koneksi/-koneksi.php';
$arsipsurat
=mysql_num_rows(mysql_query("SELECT*FROM TB_PEGAWAI"));
$jmlguru
=mysql_num_rows(mysql_query("SELECT*FROM tb_guru"));
$laki = mysql_num_rows(mysql_query("SELECT*FROM tb_pegawai WHERE jk='laki-laki'"));
$pr =mysql_num_rows(mysql_query("SELECT*FROM tb_pegawai WHERE jk='perempuan'"));
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript"> google charts.load("current",{packages:["corechart"]});
google.charts.setOnloadCallback(drawChart);
function drawChart(){
    var data=
    google.visualization.arrayToDataTable(['Task','Hours per Day'],
    ['pegawai',<?php echo"".$jmlpegawai."",?>]
    ['Staff',<?php echo"".$jmlguru."",?>],
    ['laki-laki', <?php echo"".$laki."",?>]
    ['perempuan',<?php echo"".$pr."",?>]);
    var options = {title: Grafik Jumlah Data Pegawai BPS Aceh Tengah',
    is3D:true,
};
    var chart = new google.visualization,PieChart(document.getElemenByld('piechart_3d'))
}
</script>
<div class="row">
<div class="col s12m12">
<div class="card-content black-text">
<!--<span class="card-title"><b>lokasi sekolah kami </b></span>
<p>google chart</p>-->
</div>
<div class="card-action">
<div class="card-action" width="100%" id="piechart_3d" style="height:500px"></div>
</div>
</div>
</div>