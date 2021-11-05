<div class="sidediv">
      <div class="btn">
        <span class="fas fa-bars"></span>
      </div>
      <nav class="sidebar">
        <div class="text">Side Menu</div>
        <ul>
          <li class="active">
            <a href="#"><i class="fas fa-home"></i> Dashboard</a>
          </li>
          <li>
            <a href="#" class="feat-btn"
              >Features
              <span class="fas fa-caret-down first"></span>
            </a>
            <ul class="feat-show">
              <li><a href="#">Pages</a></li>
              <li><a href="#">Elements</a></li>
            </ul>
          </li>
          <li>
            <a href="#" class="serv-btn"
              >Services
              <span class="fas fa-caret-down second"></span>
            </a>
            <ul class="serv-show">
              <li><a href="#">App Design</a></li>
              <li><a href="#">Web Design</a></li>
            </ul>
          </li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Overview</a></li>
          <li><a href="#">Shortcuts</a></li>
          <li><a href="#">Feedback</a></li>
        </ul>
      </nav>
    </div>

    <script>
      $(".btn").click(function () {
        $(this).toggleClass("click");
        $(".sidebar").toggleClass("show");
      });
      $(".feat-btn").click(function () {
        $("nav ul .feat-show").toggleClass("show");
        $("nav ul .first").toggleClass("rotate");
      });
      $(".serv-btn").click(function () {
        $("nav ul .serv-show").toggleClass("show1");
        $("nav ul .second").toggleClass("rotate");
      });
      $("nav ul li").click(function () {
        $(this).addClass("active").siblings().removeClass("active");
      });
    </script>
    
 
