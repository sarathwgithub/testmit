<!DOCTYPE html>
<html>
    <head>
        <script>
            function validateForm() {
//                let x = document.forms["myForm"]["fname"].value;
//                if (x == "") {
//                    document.getElementById('error_fname').innerHTML = "Name must be filled out";
//                    document.getElementById('error_fname').style.color = 'red';
//                    return false;
//                }
//                var age = document.getElementById('age').value;
//             
//                if (isNaN(age) || age < 1 || age > 10) {
//                    document.getElementById('error_age').innerHTML = "Age must be a number";
//                    document.getElementById('error_age').style.color = 'red';
//                    return false;
//                }
                var inpObj = document.getElementById('age');
                if (!inpObj.checkValidity()) {
                    document.getElementById('error_age').innerHTML = inpObj.message;
                    document.getElementById('error_age').style.color = 'red';
                    return false;
                } else {
                    document.getElementById('error_age').innerHTML = "Age is ok";
                    document.getElementById('error_age').style.color = 'green';
                }
            }
        </script>
    </head>
    <body>

        <h2>JavaScript Validation</h2>

        <form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
            Name: <input type="text" name="fname">
            <div id="error_fname"></div>
            Age: <input type="text" name="age" id="age" min="1" max="10">
            <div id="error_age"></div>
            <input type="submit" value="Submit">
        </form>
        <p id="intro">Test 1</p>
        <p id="intro1">Test 2</p>
        <p id="demo"></p>
        <script>
        var myElement=document.getElementById("intro");
        document.getElementById("demo").innerHTML="The text "+myElement.innerHTML;
        
        var x =document.getElementsByTagName("p");
        document.getElementById("demo").innerHTML=x[1].innerHTML;
        
        function myFunction(){
            var x =document.forms["frm1"];
            var text="";
            var i;
            for(i=0;i<x.length;i++){
                
            }
        }
        </script>
    </body>
</html>
