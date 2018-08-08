</div>
</div>





<script>
// sandbox disable popups
if (window.self !== window.top && window.name!="view1") {;
window.alert = function(){/*disable alert*/};
window.confirm = function(){/*disable confirm*/};
window.prompt = function(){/*disable prompt*/};
window.open = function(){/*disable open*/};
}

// prevent href=# click jump
document.addEventListener("DOMContentLoaded", function() {
var links = document.getElementsByTagName("A");
for(var i=0; i < links.length; i++) {
  if(links[i].href.indexOf('#')!=-1) {
    links[i].addEventListener("click", function(e) {
    console.debug("prevent href=# click");
        if (this.hash) {
          if (this.hash=="#") {
            e.preventDefault();
            return false;
          }
          else {
            /*
            var el = document.getElementById(this.hash.replace(/#/, ""));
            if (el) {
              el.scrollIntoView(true);
            }
            */
          }
        }
        return false;
    })
  }
}
}, false);
</script>

<!--scripts loaded here-->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/101converter.js"></script>



<!--footer start-->
<div class="footer-wrap">
<div class="container">
  <div class="row">
    <div class="col-md-4 col-sm-6">
      <h3>ABOUT Classify</h3>
      <div class="footer-logo"><img src="http://hassandesigns.top/html/classified/images/footer-logo.png" alt=""></div>
      <p>Integer ac lorem sit amet est rhoncus dapi bus don cad pede acus morbi elit nunc molestie at ultrices eu eleifen lorem ut dictum erat masa... <a href="about-us.html">Read More</a></p>
    </div>
    <div class="col-md-2 col-sm-6">
      <h3>Quick  LInks</h3>
      <ul class="footer-links">
        <li><a href="#.">Home</a></li>
        <li><a href="#.">About Us</a></li>
        <li><a href="#.">Features</a></li>
        <li><a href="#.">Categories</a></li>
        <li><a href="#.">Blog</a></li>
        <li><a href="#.">Contact Us</a></li>
      </ul>
    </div>
    <div class="col-md-3 col-sm-6">
      <h3>MAIN CATEGORIES</h3>
      <ul class="footer-category">
        <li><a href="#.">Electronics</a></li>
        <li><a href="#.">Vahicles</a></li>
        <li><a href="#.">Bikes</a></li>
        <li><a href="#.">Animals</a></li>
        <li><a href="#.">Toys</a></li>
        <li><a href="#."> Furniture</a></li>
        <li><a href="#.">Marketing</a></li>
        <li><a href="#.">Technology</a></li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-3 col-sm-6">
      <h3>MAIN CATEGORIES</h3>
      <div class="address">Lorem # 38, Ispum Hill, Lorem, WA 12345 </div>
      <div class="info"><i class="fa fa-phone" aria-hidden="true"></i> <a href="#.">(777) 123 4567</a></div>
      <div class="info"><i class="fa fa-fax" aria-hidden="true"></i> <a href="#.">(123) 456 7890</a></div>
    </div>
  </div>
  <div class="copyright">Copyright © 2017 Classify - All Rights Reserved.</div>
</div>
</div>

<!--footer end-->


</body>
</html>
