<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
        <script>
            window.onload = function () {
                document.getElementById("demo").inner = "My First JavaScript";
            }
        </script>
    </head>
    <body>

        <h2>JavaScript in Body</h2>

        <p id="demo"></p>
        <button type="button" onclick="document.getElementById('demo').innerHTML = Date()">Click</button>
        <button type="button" onclick="this.innerHTML = Date()">Click</button>
        <button type="button" onclick="window.print('Test')">Test</button>
        <script>
            var x = 16 + 1 + "ABC";
            var y = "ABC" + 16 + 1;
            var l = "Information";
            document.write(x);
            document.write("<br>");
            document.write(y);
            document.write("<br>");
            document.write(l.length);
            document.write("<br>");
            var arr = ["A", "B", "C"];
            document.write(arr[0]);

            var person = {
                firstname: "Saman",
                lastname: "Silva",
                age: 25,
                tel: "0718080409"
            }
            document.write("<br>");
            document.write(person.firstname);
            document.write("<br>");
            document.write(typeof "Kamal");
            document.write("<br>");
            document.write(typeof person);
            document.write("<br>");
            document.write(typeof arr);
            var z = undefined;
            document.write("<br>");
            document.write(typeof z);

            function myFunc(x, y) {
                document.write(x + y);
            }
            document.write("<br>");
            document.write(typeof myFunc);
            document.write("<br>");
            myFunc(4, 5);

            const myObject = {
                firstName: "John",
                lastName: "Doe",
                fullName: function () {
                    return this.firstName;
                }
            }

// This will return [object Object] (the owner object)
            document.write(myObject.fullName());
            document.write("<br>");
            function toCelsius(f) {
                return (5 / 9) * (f - 32);
            }
            document.write(toCelsius(45));

            document.write("<br>");

            var person = {
                firstName: "John",
                lastName: "Doe",
                fullName: function () {
                    return this.firstName + " " + this.lastName;
                }
            }
            document.write(person.fullName());
            document.write("<br>");
            var str = "Welcome MIT";
            document.write(str.indexOf('MIT'));
            document.write("<br>");
            var arr = ['A', 'B', 'C'];
            var html = "<ul>";
            for (i = 0; i < arr.length; i++) {
                html += "<li>" + arr[i] + "</li>";
            }
            html += "</ul>";
            document.write(html);
            document.write("<br>");
            arr.push("D");
            var html = "<ul>";
            for (i = 0; i < arr.length; i++) {
                html += "<li>" + arr[i] + "</li>";
            }
            html += "</ul>";
            document.write(html);
document.write("<br>");

  document.write(arr.join("*"));
  document.write("<br>");
  document.write(arr.pop());
  document.write("<br>");
  var points=[40,100,1,5,25,10];
  points.sort(function(a,b))
        </script>

    </body>
</html> 