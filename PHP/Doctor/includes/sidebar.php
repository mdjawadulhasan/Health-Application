<div class="sidediv">
  <div class="btn">
    <span class="fas fa-bars"></span>
  </div>
  <nav class="sidebar">
    <div class="text">Menu</div>
    <ul>
      
      <li><a href="../../../../PHAWA/PHP/Doctor/ProvidePrescr.php"><i class="fas fa-file-medical"></i>  Give Prescrption </a></li>

    </ul>
  </nav>
</div>

<script>
  $(".btn").click(function() {
    $(this).toggleClass("click");
    $(".sidebar").toggleClass("show");
  });
  $(".feat-btn").click(function() {
    $("nav ul .feat-show").toggleClass("show");
    $("nav ul .first").toggleClass("rotate");
  });
  $(".serv-btn").click(function() {
    $("nav ul .serv-show").toggleClass("show1");
    $("nav ul .second").toggleClass("rotate");
  });
  $("nav ul li").click(function() {
    $(this).addClass("active").siblings().removeClass("active");
  });
</script>