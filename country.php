<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Use Of Counritesnode</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h2>Country API-javascript</h2>

    <div class="country-section">
        <select name="country" id="country" class="country" onchange="javascript:handleSelect(this)">

        </select>
    </div>

    <script>
        var res = "success";

    </script>
    <?php
   echo "<script>document.writeln(res);</script>";
?>





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/custom.js"></script>

    <script type="text/javascript">
        let countryNames;

        fetch('https://countriesnode.herokuapp.com/v1/countries').then(function(info) {
            console.log(info);
            return info.json();
        }).then(function(data) {
            console.log(data);
            setData(data);
        }).catch(function(err) {
            console.log('Error : ' + err);
        });

        function setData(country) {
            countryNames = country;
            var options = "";
            var suboptions = "";
            for (i = 0; i < countryNames.length; i++) {
               // Name = countryNames[i].name;
               // language = countryNames[i].languages;
                //code = countryNames[i].code;

//               $.ajax({
//                    'url': 'action.php',
//                    'type': 'POST',
//                    'data': {
//                        'name': 'I love You',
//                        'language': 'tumi',
//                        'code': 'o se'
//                    },
//                    'success': function(data) {
//                        //alert(data);
//                    }
//                });
                
                options += '<option value=' + countryNames[i].code + '>' + countryNames[i].name + ' | Lang: ' + countryNames[i].languages  +'</option>';

                document.getElementById('country').innerHTML = options;

                console.log(countryNames[1].code);
            }
        }
        
         $.ajax({
                    'url': 'action.php',
                    'type': 'POST',
                    'data': {
                        'name': 'I love You',
                    },
                    'success': function(data) {
                        //alert(data);
                    }
                });

    </script>
   


    <script type="text/javascript">
        function handleSelect(elm) {
            window.location = 'country/' + elm.value + ".html";
        }

    </script>
</body>

</html>
