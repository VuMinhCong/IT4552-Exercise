<!DOCTYPE html>
<html>
    <head>
        <title>Example Message Box Page</title>
        <script type="text/javascript">
            var inputs = 1;
            function addField()
            {
                inputs++;
                var form = document.getElementById('sweet-form');
                var line_break = document.createElement('br');
                var textbox = document.createElement('input');
                
                textbox.setAttribute('type', 'text');
                textbox.setAttribute('name', 'text_'+inputs);
                textbox.setAttribute('value', 'I am box #'+inputs);
                
                form.appendChild(line_break);
                form.appendChild(textbox);
                return false;
            }
            
            function doLoad()
            {
                document.getElementById('sweet-link').addEventListener('click', addField, false);
            }
        </script>
    </head>
    <body>
        <form id="sweet-form">
            <input type="text" name="text_1" value="I am box #1"/>
        </form>
        <a id="sweet-link" href="#" onclick="doLoad()">Add Text Field</a>
    </body>
</html>

<!--The 1st important part of this exercise is the createElement() function-->
<!--The 2nd important part of this exercise is that the setAttribute() function can overwrite the existed attribute's value of an element-->