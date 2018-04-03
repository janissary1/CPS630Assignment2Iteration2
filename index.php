<!--CPS 630 ASSIGNMENT 2 ITERATION 1: BY AKASH RAI 500763706 & DANIEL BELLISSIMO 500749419 //TEAM 27 -->
<!DOCTYPE html>
<html>
    <head>
        <title>Art Gallery</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="main.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
         
        <script>
        function artchange(location){
            var selection = document.getElementById(location);
            selection.submit();
            selection.selectedIndex = 0; //reset dropdown
            }
        </script>

    </head>
   <body>
        <div id="myModal" class="modal">
                <div class="modal-content">
                  <span class="close" onclick=closeModal()>&times;</span>
                  <a href="#cart" id="cart" onclick="shopping()"><span class="glyphicon glyphicon-shopping-cart padleft"></span></a>
                  <img id="img" src="">
                  <div class="right-float"><p style="color: #EEFAA2" id="modalText" name="" data-price="">kek</p></div>
                </div>
                <div id="shop">
                    
                    <form id="shopping" >
                        Enter the number of works you want:
                        <input id="buy" type="text" style="width: 20px" class="form">
                        <br>
                        <input type='submit' value="Submit" onclick="formSubmit()" class="form">
                    </form>
                </div>
                <span class="close" onclick=closeModal()>&times;</span>
                <div style="color: #EEFAA2; visibility: none;" id="invoice" class="right-float">
                        Choose your shipping: 
                        <select name="Shipping" id="shipping" class="form"  onchange="invoice()">
                            <option value="Standard Shipping" selected>Standard Shipping</option>
                            <option value="Express Shipping">Express Shipping</option>
                        </select>
                        <div class="right-float"><p style="color: #EEFAA2" id="invoiceText"></p></div>
                        
                </div>
                
        </div>


        <div class="navbar">
            <a href="#Gallery">Gallery</a>
            <a href="#learn">About Us</a>
            <a href="#learn">Blogs</a>
            <a href="#cart" onclick=invoice()><span class="glyphicon glyphicon-shopping-cart padleft">Checkout</span></a>
        </div>
        <div class="selectionbar">
            <div id="Gallery">
                <div style="display: inline-block;" class="artwork_drop">
                    <form id="Works" method="get">
                        <select name="Works"  onchange="this.form.submit()">
                            <option selected>Select</option>
                            <option value="Liberty Leading the People">Liberty Leading the People</option>
                            <option value="nNapoleon's Return from Elba">Napoleon's Return from Elba</option>
                            <option value="The Great Wave off Kanagawa">The Great Wave off Kanagawa</option>
                            <option value="The Son of Man">The Son of Man</option>
                            <option value="Weeping Woman">Weeping Woman</option>
                        </select>
                    </form>
                </div>
            <div style="display: inline-block;" class="artist_drop">
                <form id="Artist" method="get">
                    <select name="Artist" onchange="this.form.submit()">
                        <option selected>Artist</option>
                        <option value="Eugène Delacroix">Eugène Delacroix</option>
                        <option value="Charles Baron von Steuben">Charles Baron von Steuben</option>
                        <option value="Katsushika Hokusai">Katsushika Hokusai</option>
                        <option value="Renée Magritte">Renée Magritte</option>
                        <option value="Pablo Picasso">Pablo Picasso</option>
                    </select>
                </form>
            </div>
            <div style="display: inline-block;" class="museum_drop">
                <form>
                    <select id="Artist" onchange="artchange('Artist')">
                        <option value="" selected>Museum</option>
                    </select>
                </form>
            </div>
        </div>
        </div>
        <br>
        <div><h2 id="title" style="text-align: center;color: #EEFAA2;visibility: hidden;" onclick=openModal()>Kek</h2></div>
        <div style="text-align: center">
            <?php
            //Connect to database, get ready to get image/information as specified in the post request
            if(isset($_GET["Artist"])){$selection = $_GET["Artist"];}
            else if (isset($_GET["Works"])){$selection = $_GET["Works"];}
            //echo "<img src=\"iframes/$selection\">"; Retrieve from database Image
            //echo $data; Retrieve from database data
            ?>
        
        </div>
        <div id="AboutUs">
            <h2 id="abt">About Us</h2>
                <div class="team">
                    <img src="iframes/Akash.jpg" alt="Akash" id="aki" style="width:20%;"/>
                    <img src="iframes/Daniel.jpg" alt="Daniel" id="belli" style="width:20%;"/>
                </div>
                <div class="info">
                    <p id="learn">We are Akash (on the left) and Daniel (on the right). We are second year Computer Science students who are working on becoming proficient full-stack developers.
                    Daniel worked on the JQuery code to make sure the drop down bar is functional. Akash was responsible for the front-end  design to make sure it looks decent. We both 
                    collaborated on the general design of our web page.</p>
                </div>
        </div>
    </body>
</html>
