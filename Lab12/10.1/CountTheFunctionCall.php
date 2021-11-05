<!DOCTYPE HTML _//W3C//DTD HTML 4.0 Transitional//EN>
<html>
    <head>
        <script type="text/javascript">
            num = 0;
            //Count the number of the time this function is has been called. Print the 
            //result to a text field called myField inside a form called myForm
            function myFunc(){
                num ++;
                document.myForm.myField.value = "Called " + num + " times";
                document.myDiv.myOtherField.value = "Called " + num + " times";
                document.myOtherOtherField.value = "Called " + num + " times";
            }
            window.setInterval("myFunc()", 1000);
        </script>
    </head>
    <body>
        <form name="myForm">
            <input type="text" name="myField" readonly>
        </form>
        <div name="myDiv">
            <input type="text" name="myOtherField" readonly> <!--error-->
        </div>
        <input type="text" name="myOtherOtherField" readonly> <!--error-->
        
        <!-- => Seems like only form objects can be accessed (?), or at least
        input object and div cant be accessed this way-->
    </body>
</html