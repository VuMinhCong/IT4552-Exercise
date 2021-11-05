<!DOCTYPE HTML _//W3C//DTD HTML 4.0 Transitional//EN>
<html>
    <head>
        <script type="text/javascript">
            function superClass() {
                this.bye = superBye;
                this.hello = superHello;
            }
            function subClass() { this.bye = subBye; }
            subClass.prototype = new superClass;
            function superHello() {return "Hello superClass"; }
            function superBye() { return "Bye superClass"; }
            function subBye() { return "Bye from subClass"; }
            var newClass = new subClass();
            alert(newClass.bye());
            alert(newClass.hello());
        </script>
    </head>
    <body>
      
    </body>
</html
