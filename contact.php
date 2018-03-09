<?php get_header();
/**
*contact
*/
/* Template Name: Contact */
 ?>
<div id="cover-img">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10709.264308923455!2d106.77049078462217!3d47.85284151453229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDfCsDUxJzEwLjIiTiAxMDbCsDQ2JzQ1LjQiRQ!5e0!3m2!1smn!2smn!4v1520305540410"
      width="100%" height="400" frameborder="0" style="border:0"></iframe>
    <!-- <div class="container">
        <h3>Safety Series Events</h3>
      </div> -->
  </div>
  <div id="content">
    <div class="container">

      <div class="row main contact">
        <div class="col-md-4 ">
          <label for="">Хаяг</label>
          <ul>
            <li>
              <i class="fa fa-map-marker"></i>
              <h4> Post box 17120 Chinggis Khaan International Airport,  Khan-Uul district, 10th province, Buyant-Ukhaa, Ulaanbaatar, Mongolia </h4>
            </li>
            <li>
              <i class="fas fa-phone"></i>
              <h4>976-11-282051</h4>
            </li>
            <li>
              <i class="fas fa-fax"></i>
              <h4>976-70049825</h4>
            </li>
            <li>
              <i class="fas fa-at"></i>
              <h4>info@mcaa.gov.mn</h4>
            </li>
            <li>
              <i class="fas fa-globe"></i>
              <h4>www.mcaa.gov.mn</h4>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <label for="">Санал хүсэлт илгээх</label>
          <form class="form-horizontal" action="/action_page.php">
            <div class="form-group">

              <div class="col-sm-12">
                <input type="email" class="form-control" placeholder="Нэр">
              </div>
            </div>
            <div class="form-group">

              <div class="col-sm-12">
                <input type="password" class="form-control" id="pwd" placeholder="Имэйл">
              </div>
            </div>
            <div class="form-group">

              <div class="col-sm-12">
                <textarea class="form-control" rows="5" id="description" placeholder="Зурвас"></textarea>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-default">Илгээх</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <label for="">Нэмэлт</label>
          <ul>
            <li><a href="#">Иргэд, төлөөлөгчид хүлээн авах уулзалтын хуваарь</a></li>
            <li><a href="#">Өргөдөл, гомдол хүлээн авах</a></li>
            <li><a href="#">Өргөдөл, гомдол, санал хүсэлтийн шийдвэрлэлтийн байдал</a></li>
            <li><a href="#">ИНЕГ агентлагийн нэгжүүдтэй холбоо барих</a></li>
          </ul>
        </div>

      </div>

    </div>
  </div>
  <style media="screen">
    .contact .form-horizontal button{
      width: 100%;
      background: #2d66b4;
      color: white;
    }
    .contact ul {
      padding-left: 0;
    }

    .contact ul li {
      list-style: none;
    }

    .contact ul li i {
      font-size: 25px;
  color: #1c5aae;
  /* margin-right: 20px; */
  position: relative;
  float: left;
    }

    .contact li h4 {
      font-size: 16px;
      font-weight: 300;
      padding-left: 50px;
      margin-bottom: 20px;
    }

    #map_canvas {
      height: 400px;
    }
  </style>
<?php get_footer(); ?>
