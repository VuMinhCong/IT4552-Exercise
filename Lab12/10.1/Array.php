<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
    <body>
        <script type="text/javascript">
            //create array and add 3 elements
            var myArray=new Array();
            myArray.push("Tim");
            myArray.push("Alice");
            myArray.push("Joe");
            
            //print out the contents and new line
            document.writeln(myArray.toString());
            document.writeln("<br>");
            
            //access array element by index
            document.writeln(myArray[1]);
            document.writeln("<br>");
            
            //print out the length of the array and newline
            document.writeln("Array size: " + myArray.length);
            document.writeln("<br>");
            
            //Pop the last element off the array and display it
            var who = myArray.pop();
            document.writeln("Popped element: " + who);
            document.writeln("<br>");
            
            //print out the length of the array and newline
            document.writeln("Array size: " + myArray.length);
            document.writeln("<br>");
            document.writeln("<br>");
            
            //*****//
            //Populating array on instantiation
            var otherArray = new Array("dog", 3, 8, 4);
            
            document.writeln(otherArray.toString());
            document.writeln("<br>");
            document.writeln("<br>");
            
            //setting and accessing associative arrays
            //Associative arrays, also called maps or dictionaries,
            // are an abstract data type that can hold data in (key, value) pairs
            otherArray["key"] = "value";
            document.writeln(otherArray);
            document.writeln("<br>");
            document.writeln(otherArray.toString());
            document.writeln("<br>");
            document.writeln(otherArray["key"]);
            //->element ("key":"value") is stored but can only be accessed when call
            //directly
        </script>
    </body>
</html>