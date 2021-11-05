<!DOCTYPE HTML>
<html>
    <head>
        <script type="text/javascript">
            function setAlign(align) {
                var pTag = window.document.getElementById("paragraph");
                pTag.setAttribute("align", align);
            }
        </script>
    </head>
    <body>
        <form name="alignForm">
            <select id="alignSelect">
                <option value="left">left</option>
                <option value="right">right</option>
                <option value="center">center</option>
            </select>
            
            <input type="button" value="Go" onclick="setAlign(document.alignForm.alignSelect.value)">            
        </form>
        <p id="paragraph">
            This is some sample text.<br>
            It's used to test the alignment that is set as the "align" attribute of the &ltp&gt tag. 
        </p>
    </body>
    
    <!--The 1st important part is the <variable>=getElementById() function and then <variable>.setAttribute() function-->
    <!--The 2nd important part is the onclick="<javascript event handler function's name>" event listener-->
</html>