<img id="toup" src="img/Scroll-to-top-button.png" alt="">
<script>
  //Scroll to top start
  $("#toup").hide();
  $(window).scroll(function(){
    if($(this).scrollTop()>150){
      $("#toup").show();
    }else{
      $("#toup").hide();
    }
  });
  $("#toup").click(function(){
    $("html,body").animate({scrollTop:0},500);
  });
  //Scroll to top end
</script>
</div>
<div class="footer bg-success">
	<p>&copy;Copyright 2018, Infinity.com team all right reserved.</p>
</div>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->

</body>
</html>