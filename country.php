<?php include('include/header.php');?>


    <?php
        
        $country = ["Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
        "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", 
        "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
        "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
        "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", 
        "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", 
        "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", 
        "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"];
                       
    ?> 


<head>
    <title>Brener Garcia</title>
</head>
<body>
    <form name="form_countries" class="form" method="post">
        <br>
        <h3 class="text-center">Choose a country below to see its capital:</h3>
        <br>
            <div class="col-md-4 mb-3 ml-auto mr-auto">

                 <label for="country">Choose a country here:</label>
                        <select class="form-control" id="country" name="country">
                            <option value="">Choose one country</option>
                            <?php
                                
                                foreach($country as $countries => $capital) {

                                    echo '<option value="'.$countries.'">'.$countries.' </option>';
                                                                      
                                }
                            ?> 
                        </select>
                        <br>
                        <label for="capital">It's capital is:</label> 
                        <select class="form-control" id="capital" name="capital">
                        <option value=""></option>
                            <?php
                                
                                foreach($country as $capital) {

                                    
                                    if ($country == $capital){ print("$capital"); }
                                    echo '<option value="'.$capital.'">'.$capital.' </option>';
                                    print("$capital ($country)");                                    
                                }
                            ?> 
                        </select>
                        <br>
            </div>
    </form>
        <br>
    <?php include('include/footer.php');?>
</body>


