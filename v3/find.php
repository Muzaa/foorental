<?php
         
     include "config.php";    
         
         ?>
<div class="pages">
  <div data-page="projects" class="page no-toolbar no-navbar">
    <div class="page-content">
    
     <div class="navbarpages">
       <div class="navbar_home_link"><a href="index.php"><img src="images/icons/white/home.png" alt="" title="" /></a></div>
       <div class="navbar_page_center">Rent Something</div>
       <div class="menu_open_icon_white"><a href="#" class="open-panel"><img src="images/menu_open.png" alt="" title="" /></a></div>
     </div>
     
     <div id="pages_maincontent">
      
      <h2 class="page_subtitle">Find something to rent.</h2>
                  <div class="contactform">
       
    
            <input type="text" name="foostuff" id="foostuff" placeholder="Search here.." value="" class="form_input required" />
            
            <input type="button" id="foofind" class="form_submit" id="submit" value="Find nearest item &rarr;" />

            <label id="loader" style="display:none;"><img src="images/loader.gif" alt="Loading..." id="LoadingGraphic" /></label>
           
            </div>
      
      <ul class="features_list_detailed" id="fooresult">
      
      
      
      </div>
      
      
    </div>
  </div>
</div>