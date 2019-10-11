<body>
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?= base_url('assets/img/gambar1.jpg')  ?>" style="width: 1440px;height: 721px" >
        </div>
            
                  <div class="item">
                    <img src="<?= base_url('assets/img/gambar2.jpg')  ?>" style="width: 1440px;height: 721px">
                  </div>
                
                  <div class="item">
                    <img src="<?= base_url('assets/img/gambar3.jpg')  ?>"style="width: 1440px;height: 721px">
                  </div>
        </div>
            
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            
            <div class="col-sm-1 sidenav text-left">
			
    		</div>
        </div>
    </div>
</div>
</body>
</html>
