<?php include('include/header.php');?>

<head>
    <title>Brener Garcia</title>
</head>
<body>
    <div class="table-responsive{-sm|-md|-lg|-xl}">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-dark table-bordered table-hover">
                            
                        <tr><th>Country</th><th>Capital</th></tr>

                            <?php
                                $country = ["Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
                                "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", 
                                "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
                                "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
                                "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", 
                                "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", 
                                "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", 
                                "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw"];
                                
                                foreach($country as $countries => $countries_value) {
                                    echo "<tr><td>" . $countries . "</td><td>" . $countries_value . "</td></tr>";
                                }
                                
                            ?>  
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include('include/footer.php');?>
</body>

