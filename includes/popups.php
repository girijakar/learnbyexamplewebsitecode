<div id="modal2" class="modal">
  <div class="modal-content">
    <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s6">
            <a href="#tab1">STUDENT LOGIN</a>
          </li>
          <li class="tab col s6">
            <a href="#tab2">INSTRUCTOR LOGIN</a>
          </li>
        </ul>
      </div>
      <div id="tab1" class="col s12">
        <h5 style="text-align: center;" class="purple-text">STUDENT LOGIN</h5>
          <form method="post">
            <div class="input-field">
              <input type="email" placeholder="Email" id="email" required="Email">
              <label for="email">Email</label>
            </div>
            <div class="input-field">
              <input type="password" placeholder="Password" id="password">
              <label for="password">Password</label>
            </div>
           <div class="modal-footer">
              <a href="#modal4" class="waves-effect waves-light btn modal-trigger">Forgot Password?</a>
              <a href="#" class="modal-action modal-close waves-effect waves-green btn purple">Submit</a>
           </div>
         </form>
      </div>
      <div id="tab2" class="col s12">
        <h5 style="text-align: center;" class="purple-text">INSTRUCTOR LOGIN</h5>
          <form>
            <div class="input-field">
              <input type="email" placeholder="Email" id="email">
              <label for="email">Email</label>
            </div>
            <div class="input-field">
              <input type="password" placeholder="Password" id="password">
              <label for="password">Password</label>
            </div>
          </form>  
            <div class="modal-footer">
              <a href="#modal4" class="waves-effect waves-light btn modal-trigger">Forgot Password?</a>
              <a href="#" class="modal-action modal-close waves-effect waves-green btn purple">Submit</a>
            </div>
      </div>   
    </div>
  </div>
</div>
<!-- Second Modal -->
    <div id="modal3" class="modal">
      <div class="modal-content">
        <div class="row">
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s6">
            <a href="#tab3">JOIN US</a>
          </li>
          <li class="tab col s6">
            <a href="#tab4">SIGN UP</a>
          </li>
        </ul>
      </div>
      <div id="tab3" class="col s12">
        <h5 style="text-align: center;" class="purple-text">JOIN US(For Instructors)</h5>
            <form id="form" action="includes/auth/registerInst.php" method="post">
              <div class="input-field">
                <input type="text" placeholder="Name" name="name" id="name" required="Name">
                <label for="name">Name</label>
              </div>
              <div class="input-field">
                <input type="email" placeholder="Email" name="email" id="email" required="Email">
                <label for="email">Email</label>
              </div>
              
              <div class="input-field">
                <input type="password" placeholder="Password" name="password" id="password" required="password">
                <label for="password">Type Password</label>
              </div>
              <div class="input-field">
                <input id="dtp" type="number" name="age" placeholder="Type your Age">
                <label for="age">Age</label>
              </div>
              <div class="input-field">
                <textarea class="materialize-textarea" name="interest" placeholder="Enter Your Area of Interest" id="message"></textarea>
                <label for="message">Areas Of Interest</label>
              </div>
              <div>
              <p>
                <input type="radio" name="gender" value="male" id="male" checked>
                <label for="male">Male</label>
              </p>
              <p>
                <input class="with-gap" type="radio" value="female" name="gender" id="female">
                <label for="female">Female</label>
              </p>
              <p>
                <input class="with-gap" type="radio" value="other" name="gender" id="other">
                <label for="other">Other</label>
              </p>
              </div>        
            <div class="modal-footer">
                <a href="#" onclick="document.getElementById('form').submit();" class="modal-action modal-close waves-effect waves-green btn purple">Submit</a>
              </div>
            </form>
      </div>
      <div id="tab4" class="col s12">
        <h5 style="text-align: center;" class="purple-text">SIGN UP(For Students)</h5>
            <form id="form1" action="includes/auth/registration.php" method="post">
              <div class="input-field">
                <input type="text" placeholder="Name" name="name" required="Name">
                <label for="name">Name</label>
              </div>
              <div class="input-field">
                <input type="email" placeholder="Email" name="email" required="Email">
                <label for="email">Email</label>
              </div>
              
              <div class="input-field">
                <input type="password" placeholder="Password" name="password" required="password">
                <label for="password">Type Password</label>
              </div>
            <div>
            <p>
                <input type="radio" name="gender" id="male1" value="male" checked="checked">
                <label for="male1">Male</label>
            </p>
            <p>
                <input class="with-gap" type="radio" id="female1" name="gender" value="female">
                <label for="female1">Female</label>
            </p>
            <p>
                <input class="with-gap" type="radio" id="other1" name="gender" value="other">
                <label for="other1">Other</label>
            </p>
        </div> 
              <div class="input-field">
                <input type="text" placeholder="Type Your Institue Name"  name="institute" required="institue">
                <label for="text">Institute Name</label>
            </div>
            <div class="modal-footer">
                <a href="#" onclick="document.getElementById('form1').submit();" class="modal-action modal-close waves-effect waves-green btn purple">Submit</a>
              </div>
            </form>
      </div>
    </div>
      </div>
    </div>

    <div id="modal4" class="modal">
      <div class="modal-content">
        <h4 style="text-align: left;" class="purple-text">Enter Your Registered Email ID</h4>
        <div class="input-field">
              <input type="email" placeholder="Email" id="email">
              <label for="email">Email</label>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
      </div>
    </div>

    <div id="modal5" class="modal">
      <div class="modal-content">
       <h1>CHAT BOT COMING SOON</h1>
      </div>
    </div> 
    <div id="modal6" class="modal">
      <div class="modal-content">
       <h2><center>UNDER DEVELOPMENT</center></h2>
      </div>
    </div> 