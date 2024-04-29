<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Cigna Group Landing Page</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/script.js"></script>
</head>

<body>
    <div id="section-one">
        <div class="row">
            <!-- First Column -->
            <div class="column" id="one">
                <img src="images/logo.png" alt="Logo" id="logo">
            </div>
        
            <!-- Second Column -->
            <div class="column" id="two">
                <div id="text">
                <p id="one">How much could you be<br>
                saving on health benefits?</p>
                <p id="two">Watch the savings add up when you combine medical, pharmacy<br>
                and behavioral benefits with Cigna Healthcare.</p>
                </div>
            </div>
            <!-- Third Column -->
            <div class="column" id="three">
                <img src="images/leafs.png" alt="leaf" id="leafs">
            </div>
        </div>
    </div>

    <div id="section-two">
        <div class="row" id="second">
            <!-- First Column -->
            <div class="column" id="four">
                <div id="text-two">
                <p id="three">
                    When you have all of your health care<br>
                    benefits under one roof, care becomes<br>
                    fully coordinted, employees get more<br>
                    personalized guidance, total spend<br>
                    becomes easier to manage and<br>
                    information is more secure.
                </p>
                
                <p id="four">
                    Even better? You could save an average of:
                </p>
                </div>
                <div class="row" id="third">
                    <div class="column" id="five">
                    <div id="text-three">
                        <p id="five">
                        $148
                        </p>
                    </div>
                    </div>
                    <div class="column" id="six">
                        <div id="text-three-two">
                        <p id="six">
                            per member per<br>
                            year (PMPY).&ast;
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        

            <div class="column" id="five">
                <div id="text-four">
                    <p id="seven">
                        Calculate your potential savings.
                    </p>
                    <div class="grid" id="grid1">
                    <div class="left-column" id="left-column1">
                        <div><label for="numMembers" id="one">Enter number of employees:</label></div><br>
                        <div><input type="number" id="numMembers" placeholder="0000" />
                        </div><br>
                        <div><button onclick="calculateSavings()">Calculate savings</button></div>
                    </div>
                    <div class="right-column" id="right-column1">
                        <div><input type="text" id="totalSavings" placeholder="$0,000,000" readonly /></div>
                        <div><label for="totalSavings" id="two">total medical savings per year&ast;</label></div>
                    </div>
                    </div>
                </div>
                
                    <div class="column" id="six">
                       
                           
                    <div class="left-column" id="left-column2">
                    <img src="images/leaf.png" alt="Leaf" id="leaf"></div>
                    <div class="right-column" id="right-column2">
                    <div id="text-five">
                    <p id="eight">
                        Reach out to your Cigna Healthcare<sup>SM</sup> representative<br>
                        or broker to learn more.
                    </p>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        
           
            
                
            </div>
       

    </div>

    <div id="section-three">
        <div class="row" id="fourth">
            <div class="left-column" id="left-column3">
                <div id="text-six">
                    <h4>Offered by Cigna Health and Life Insurance Company</h4>
                    <p id="nine">
                        Cigna Healthcare 2022 Value of Integration study. This book-of-business study leveraged a proprietary match case-control methodology,<br>
                        comparing those customers who share certain characteristics (age, gender, health and benefits) but differ in terms of their medical pharmacy<br>
                        and behavioral coverage. Aon was independently engaged to design and perform the study. Individual results will vary and are not guaranteed.<br>
                        <br>
                        Product availability may vary by location and plan type and is subject to change. All group health insurance policies and health benefit plans<br>
                        contain excludions and limitations. For costs and details of coverage, contact a Cigna Healthcare representative.<br>
                        <br>
                        Cigna Healthcare products and services are provided exclusively by or throught operating subsidiaries of The Cigna Group, including Cigna<br>
                        Health and Life Insurance Company (Bloomfield, CT), or its affiliates. In Utah, all products and services are provided by Cigna Health and Life<br>
                        <br>
                        Insurance Company (Bloomfield, CT). Policy forms: OK &#8210; HP-APP-I et all., OR &#8210; HP-POL38 02-13, TN &#8210; HP-POL43/HC-CERIVI, et al. (CHLIC); GSA-<br>
                        COVER et al. (CHC-TN).<br>
                        <br>
                        979213 00/24 &copy; <?php echo date("Y"); ?> Cigna Healthcare. Some content provided under license.
                    </p>
                </div>
            </div>
            <div class="right-column" id="right-column3">
                <div id="text-seven">
                    <p id="ten">Your New Growth Plan</p>
            </div>
        </div>
    </div>

</body>
</html>
   