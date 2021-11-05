<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript">
            function validatePostalCode() {
                var postalCodeCheck = new RegExp("([A-Z][0-9]){3,3}");
                if (postalCodeCheck.test(document.myForm.postalCodeField.value)) {
                    alert("Valid Postal Code");
                    return true;
                } else {
                    alert("Invalid Postal Code");
                    return false;
                }
            }
            function validateMoney(){
                var moneyCheck = new RegExp("[0-9]*[\.][0-9][0-9]");
                if (moneyCheck.test(document.myForm.postalCodeField.value)){
                    alert("Valid Money");
                    return true;
                }else{
                    alert("Invalid Money: "+document.myForm.moneyField.value);
                    return false;
                }
            }
        </script>
    </head>
    <body>
        <form name="myForm">
            Postal Code: 
            <input type="text" name="postalCodeField">
            <input type="button" value="checkPostalCode" onclick="validatePostalCode()">
            <br>
            Money: $
            <input type="text" name="moneyField">
            <input type="button" value="CheckMoney" onclick="validateMoney()">
        </form>
    </body>
</html>

<!--the improtant part of this exercise is to accessing the elements by traversing the DOM tree-->