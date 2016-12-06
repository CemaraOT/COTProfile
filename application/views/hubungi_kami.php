<head>
    <title>COT | We're hearing</title>
</head>
<?php $this->load->view("common/header");?>
<script>
      function initMap() {
        var uluru = {lat: -6.591834, lng: 106.808897};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBg_NinQ3SZev4JI-ttdon91nso5G2hjz0&callback=initMap">
    </script>
<div class="clearfix"></div>
<div class="content-page">
    <div class="jumbotron-v2 text-center">
		<br/>
        <h1>COT | We're hearing</h1>
        <h3>Layanan pembuatan aplikasi terbaik dengan biaya rendah</h3><br/>
        <br/>
        <br/>
        <!--
        <div class="row text-center">
            <div class="col-lg-4 hidden-xs"></div>
            <div class="col-lg-2 col-xs-6">
                <img class="img-circle" src="<?php echo base_url();?>assets/img/service.png" alt="Service Center" width="100" height="100">
            </div>
            <div class="col-lg-2 col-xs-6">
                <img class="img-circle" src="<?php echo base_url();?>assets/img/partner.png" alt="Trusted Distributors" width="100" height="100">
            </div>
            <div class="col-lg-2 col-xs-6">
                <img class="img-circle" src="<?php echo base_url();?>assets/img/aktifasi.png" alt="Aktifasi Garansi" width="100" height="100">
            </div>
            <div class="col-lg-2 hidden-xs"></div>
        </div>
		-->
    </div>
    <div class="contain-page">
        <div class="container">
			<hr class="featurette-divider"/>
			<div class="row featurette" >
				<div class="col-md-6 text-center">
					<div id="map" width="600" height="450" frameborder="0" style="border:0"  allowfullscreen></div>
                </div>
                <div class="col-md-6">
                    <form action="<?php echo base_url();?>Hubungi_kami/submit" method="post">
                        <div class="form-group">
                            <label>Nama : </label>
                            <input type="text" name="nama" placeholder="Tuliskan nama anda" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email : </label>
                            <input type="email" name="email" placeholder="tuliskan email anda" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Isi Pesan : </label>
                            <textarea class="form-control" placeholder="Tuliskan pesan anda" name="pesan" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Kirim" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	<div class="submenu">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-4 text-center"></div>
                <div class="col-sm-4 text-center">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
						<span class="col-sm-4">
                            <a href="www.facebook.com" title="facebook">
                                <img class="img" src="<?php echo base_url();?>assets/img/fb.png" alt="Facebook" width="30" height="30">
                            </a>
                        </span>
						<span class="col-sm-4">
							<a href="www.twitter.com" title="twitter">
                                <img class="img" src="<?php echo base_url();?>assets/img/tw.png" alt="Twitter" width="30" height="30">
                            </a>
						</span>
						<span class="col-sm-4">
							<a href="plus.google.com" title="google plus">
                                <img class="img" src="<?php echo base_url();?>assets/img/gp.png" alt="Google Plus" width="30" height="30">
                            </a>
						</span>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
                <div class="col-sm-4 text-center"></div>
            </div>
            <br/>
        </div>
    </div>
</div>
</body>
