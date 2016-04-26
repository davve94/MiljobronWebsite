
<html>

      <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<footer class="footer-distributed">

	<div class="footer-left">
  
             <div class="footer-left"> Fyll i för nyhetsbrev! </p>
                 <input type="text" class="form-control" placeholder="E-mail">
                    <p></p>
                         <input type="text" class="form-control" placeholder="Fullt namn">
                         <p></p>
                            <button type="button" class="btn btn-default">Skicka</button>
                                </div>
				
                            <div id="copyright">   
                            <p>    <?=date('Y')?>   Copyright Miljöbron   </p>                   
                            </div>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Anders Carlssons Gata 7</span>417 55, Göteborg</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;031-202 789&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
				</div>

				<div>
					<i id="email" class="fa fa-envelope"></i>
					<p><a href="mailto:info@miljobron.se">info@miljobron.se &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Om oss</span>
					Miljöbron är en ideell organisation som genom stöd från aktörer inom offentlig och privat sektor, samt högskola och universitet, kan förmedla den här hjälpen kostnadsfritt till företag och studenter. Läs mer om våra partner under fliken Partner i menyn.
				</p>
                                

				<div class="footer-icons">
<a class="btn btn-social-icon btn-twitter" href="https://twitter.com//miljobron" target="_blank">
    <span class="fa fa-twitter"></span>
  </a>
  <a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/miljobron/" target="_blank">
    <span class="fa fa-instagram"></span>
  </a>
  <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com//miljobron" target="_blank">
    <span class="fa fa-facebook"></span>
  </a>

				</div>

			</div>
<!----------------------------------------------------------------------->
<!------------------- Kalla på Javascript funktioner här ---------------->
<!----------------------------------------------------------------------->
      <script>
          var slideIndex = 1;
          showDivs(slideIndex);     // image slider- changes the images in the header
          var myIndex = 0;
          carousel();
      </script>
      <script>
          fixedMenu();   // menu changes position when scroll reaches certain point
      </script>
</footer>

</div> 


<!-- add wp_footer() here! when nav menu works!, before /body -->

 
</body>

</html>

