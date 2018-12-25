<?php include('inc/header.php');?>
<div id="para" class="test">
  <!-- Tooltip start -->
<script>
  $(document).ready(function(){
    $("#tooltip").tooltip({
      track:true,
      show:{delay:100,duration:300,effect:'slideDown'},
      hide:{delay:100,duration:300,effect:'slideUp'}
    });
  });
</script>
<h2 class="mt-2 p-2 bg-secondary text-light">Tooltip</h2>
<label for="tooltip">Tooltip</label>
<input type="text" id="tooltip" title="Lorem ipsum dolor sit amet. lorem">
<!-- Tooltip value end -->


<br><br>
<!-- Slider value start -->
<script>
  $(document).ready(function(){
    $(".slider").slider({
      value:50,
      step:10,
      min:10,
      max:100,
      slide:function(even,ui){
        $("#slideinput").val("TK. "+ui.value);
      }
    });
    $("#slideinput").val("TK. "+$(".slider").slider("value"));

  });
</script>
<h2 class="mt-2 p-2 bg-secondary text-light">Slider</h2>
<label for="slider">Slider</label>
<input type="text" id="slideinput" readonly="1">
<div class="slider"></div>
<!-- Slider value end -->


<br><br>
<!-- Range slider start -->
<script>
  $(document).ready(function(){
   $(".rangeslider").slider({
    value:50,
    step:2,
    max:100,
    min:0,
    values:[20,40],
    range:true,
    slide:function(even,ui){
      $("#amount").html(ui.values[0]+'-'+ui.values[1]+' Taka');
      $("#minimum").val(ui.values[0]);
      $("#maximum").val(ui.values[1]);
    }
   });
   $("#amount").html($(".rangeslider").slider('values',0)+'-'+$(".rangeslider").slider('values',1)+' Taka');
  });
</script>
<h2 class="mt-2 bg-secondary p-2 text-light">Range Slider</h2>
Amount:<span id="amount"></span><br>
<div class="rangeslider"></div>
<input type="hidden" id="maximum">
<input type="hidden" id="minimum">
<!-- Range slider end -->



<br><br>
<h2 class="mt-2 bg-secondary p-2 text-light">Images Control</h2>
<script>
  $(document).ready(function(){
    $("#height,#width").slider({
      max:4000,
      min:10,
      value:200,
      slide:controlImg
    });

    $("#opacity").slider({
      max:100,
      min:0,
      value:100,
      slide:controlImg
    });
    function controlImg(){
      var height = $("#height").slider("value");
      var width = $("#width").slider("value");
      var opacity = $("#opacity").slider("value")/100;
      $("#img").css({
        height:height,
        width:width,
        opacity:opacity
      });
    // $("#imgsize").html("Height :"+height+" Pixel <br>Width: "+width+"Pixel <br> Opacity: "+opacity);
    }
  });
</script>
Height:<div id="height"></div><br>
Width:<div id="width"></div><br>
Opacity:<div id="opacity"></div><br>
<!-- <div id="imgsize"></div> -->
<img src="img/images.png" id="img" alt="" width="200px" height="200px">

<!-- Dragglable widget option start -->
<br><br>
<script>
$(document).ready(function(){
  $(".outdiv").draggable({
    opacity:.8,
    cursor:'move',
    snap:"#parentContainment",
    snap:".outdiv",
    snapTolarance:50,
    cancel:"#parentContainment",
    stack:".outdiv"
  });
});
</script>
<h2 class="mt-2 bg-secondary p-2 text-light">Dragglable widget option</h2>
<div class="outdiv" style="background: blue"></div>
<div class="outdiv" style="background: green"></div>
<div class="outdiv" style="background: red"></div>
<div class="outdiv" style="background: brown"></div>

<div class="parentContainment" id="parentContainment"></div>
<!-- Dragglable widget option end -->

<!-- Drop and draggable widget option start -->
<br><br>
<script>
$(document).ready(function(){
  $("#draggable li").draggable({
    helper:'clone',
    cursor:"move",
    revert:"invalid"
  });

  $("#phpframework").droppable({
    accept:"li[data-value='php']",
    drop:function(event,ui){
      $("#php").append(ui.draggable);
    }
  }); 

   $("#frameworks").droppable({
    drop:function(event,ui){
      $("#draggable").append(ui.draggable);
    }
  });

  $("#javaFramework").droppable({
    accept:"li[data-value='java']",
    drop:function(event,ui){
      $("#java").append(ui.draggable);
    }
  });
});
</script>
<h2 class="mt-2 bg-secondary p-2 text-light">Drop Dragglable widget option</h2>
<div class="box" id="frameworks">
  <h3 class="headline bg-primary p-2 text-light">Php and Java</h3>
  <ul id="draggable">
    <li data-value='php'>Cack php</li>
    <li data-value='php'>Laravel</li>
    <li data-value='php'>Yii</li>
    <li data-value='java'>Hibernate</li>
    <li data-value='java'>Spring</li>
    <li data-value='java'>Strus 2</li>
  </ul>
</div>
<div class="box mx-2" id="phpframework">
  <h3 class="headline bg-primary p-2 text-light">Php framework</h3>
  <ul id="php">

  </ul>
</div>
<div class="box" id="javaFramework">
  <h3 class="headline bg-primary p-2 text-light">Java framework</h3>
  <ul id="java">

  </ul>
</div>
<!-- Drop and dragglable widget option end -->

<!-- Resizable Widget start -->
<br><br>
<script>
$(document).ready(function(){
   $("#resizableOne").resizable({
     alsoResize:"#resizableTwo",
     animate:true,
     aspectRatio:true,
     ghost:true,
     containment:'parent'
   });
});
</script>
<h2 class="mt-2 bg-secondary p-2 text-light">Resizable widget option</h2>
<div class="resizecontenment">
<div class="resizable" id="resizableOne"></div>
<div class="resizable" id="resizableTwo"></div>
</div>
<!-- Resizable Widget end -->


<!-- sortable Widget start -->
<br><br>
<style>
  #sortable{
  display: inline;
  list-style: none;
  }
#sortable li {
  border: 1px solid #777;
  padding: 10px;
  cursor: pointer;
  width: 200px;
  text-align: center;
  background: #452f2f;
  color: #fff;
}
</style>
<script>
$(document).ready(function(){
   $("#sortable").sortable({
    placeholder:'selecteditem',
    axis:"y"
   });
  });
</script>
<h2 class="mt-2 bg-secondary p-2 text-light">Sortable widget option</h2>
<ul id="sortable">
  <li data-value='php'>Laravel</li>
  <li data-value='php'>Cakephp</li>
  <li data-value='php'>Yii</li>
  <li data-value='php'>Kohona</li>
  <li data-value='cms'>Wordpress</li>
  <li data-value='cms'>Jommla</li>
  <li data-value='cms'>Drupal</li>
</ul>
<!-- sortable Widget end -->
<!-- Date packer start -->
<br><br>
<style>

</style>
<script>
$(document).ready(function(){
    $("#showdate").datepicker({
      dateFormat:"dd/mm/yy",
      changeMonth:true,
      changeYear:true,
    });
  });
</script>
<h2 class="mt-2 bg-secondary p-2 text-light">Date packer</h2>
<label for="showdate">Date </label>
<input type="text" id="showdate" readonly="1" style='cursor: pointer;'>
<!-- Date packer end -->

<!-- tabs start -->
<br><br>
<style>
  #tabs .ui-widget-header {
    border:0px solid;
    border-bottom: 1px solid #333;
    background: #F1F1F1 url(images/ui-bg_gloss-wave_35_f6a828_500x100.png) 50% 50% repeat-x;
    color: #fff;
    font-weight: bold;
}
</style>
<script>
  $(document).ready(function(){
    $("#tabs").tabs();
  });
</script>
<h2 class="mt-2 bg-secondary p-2 text-light">Tabs</h2>
<div id="tabs">
  <ul>
    <li><a href="#tabOne">Tab One</a></li>
    <li><a href="#tabTwo">Tab Two</a></li>
    <li><a href="#tabThree">Tab Three</a></li>
  </ul>

<div id="tabOne">
  <h2>Lorem ipsum dolor sit amet.</h2>
  <p>Tab One. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, illum! Ipsum doloremque blanditiis velit est eius recusandae natus culpa tempore, et quis quaerat laudantium magnam delectus. Quasi laborum eos temporibus voluptate soluta. Temporibus, iure, reprehenderit sequi perferendis deserunt libero sint.</p>
</div>

<div id="tabTwo">
  <h2>Lorem ipsum dolor sit amet.</h2>
  <p>Tab Two. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet accusamus repudiandae eius aliquid sequi ut fugit quibusdam expedita, nostrum, beatae repellat atque rerum minus iusto cupiditate voluptas dolore vitae repellendus numquam, id voluptatum ab. Similique ullam, recusandae doloremque voluptates non.</p>
</div>

<div id="tabThree">
  <h2>Lorem ipsum dolor sit amet.</h2>
  <p>Tab Three. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis qui consequuntur repellat suscipit doloremque cumque, laborum libero iusto rerum est distinctio temporibus! Commodi autem dolores ad quo consequatur sunt, libero recusandae quam repellat sed suscipit, corrupti id quos deleniti. Quae.</p>
 </div>
</div>
<!-- Tabs end -->

<!-- Auto complete start -->
<br><br>
<style>

</style>
<script>
$(document).ready(function(){
  var autocom = ["JAVA","Javascript","jquery","html","ruby","R"];
    $("#autoComplete").autocomplete({
       source:autocom,
       autoFocus:true
    });
  });
</script>
<h2 class="mt-2 bg-secondary p-2 text-light">Auto Complete</h2>
<span>Auto Complete</span>
<input type="text" id="autoComplete">
<!-- Auto Complete end -->


</div>
<br>
<?php include('inc/footer.php');?>
