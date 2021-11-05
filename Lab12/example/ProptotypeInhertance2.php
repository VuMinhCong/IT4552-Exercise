<!DOCTYPE HTML>
<html>
    <head>
        <script type="text/javascript">
            function Person(_age, _name){
                this.age = _age;
                this.name = _name;
            }
            var john_person = new Person(10, "John");
            for (var att in john_person){
                console.log(att);
            }
            
            document.write(john_person.__proto__ + "<br>");
            document.write(john_person._age);
        </script>
    </head>
</html>