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
<div class="content-page" style="height: 89%">
    <div class="jumbotron-v2">
        <h1 class="text-center">COT | We're hearing</h1>
        <br/>
        <div class="container">
            <div class="col-md-6 text-center">
                <div id="map" style="border:0;width: 100%;height: 350px;"  allowfullscreen="true"></div>
            </div>
            <div class="col-md-6">
                <form action="<?php echo base_url();?>Hubungi_kami/submit" method="post">
                    <div class="form-group">
                        <label class="text-primary">Name : </label>
                        <input type="text" name="nama" placeholder="Your name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="text-primary">Email : </label>
                        <input type="email" name="email" placeholder="Your email address" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="text-primary">Message : </label>
                        <textarea class="form-control" placeholder="Wrute message" name="pesan" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Kirim" class="btn btn-primary center-block">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
