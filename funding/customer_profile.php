<!DOCTYPe html>
<html>
    <head>
    <title> form </title>
    <link rel="stylesheet" href="customer_profile.css">
    </head>
    <body>
        <p>Customer's Details</p>
        <div class="container"> 
            <form action="customer_profile_db.php" method="POST">
                
            <div id="row">
                    <div class="col-25">
                        <label for="category">Category</label>
                    </div>
                    <div class="col-75">
                        <select id="category" name="category" style="font-size:20px;" required>
                            <option value="Health">Health</option>
                            <option value="NGO">NGO</option>
                            <option value="Education">Education</option>
                            <option value="Flood of Bihar">Flood</option>
                        </select>
                    </div>
                </div>

                <div id="row">
                    <div class="col-25">
                        <label for="name">Full Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="name" name="name" style="font-size:20px;" required>
                    </div>
                </div>
   
                <div id="row">
                    <div class="col-25">
                        <label for="dob">Date of Birth</label>
                    </div>
                    <div class="col-75">
                        <select id="date" name="date" style="font-size:20px;width:25%;" required>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>

                        <select id="month" name="month" style="font-size:20px;width:25%;">
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>

                        <select id="year" name="year" style="font-size:20px;width:25%;" required>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                        </select>
                    </div>
                </div>

                <div id="row">
                    <div class="col-25">
                        <label for="gender">Gender</label>
                    </div>
                    <div class="col-75">
                        <select id="gender" name="gender" style="font-size:20px;" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>

                <div id="row">
                    <div class="col-25">
                        <label for="email">Email Id</label>
                    </div>
                    <div class="col-75">
                        <input type="email" id="email" name="email" style="font-size:20px;" required>
                    </div>
                </div>
        
                <div id="row">
                    <div class="col-25">
                        <label for="mob">Mobile Number</label>
                    </div>
                    <div class="col-75">
                        <input type="number" id="mob" name="mob" style="font-size:20px;"required maxlength="10" minlength="10">
                    </div>
                </div>

                <div class="row">
                    <input type="submit" value="Submit" style="font-size:20px;">
                </div>
            </form>
        </div> 
    </body>
</html>