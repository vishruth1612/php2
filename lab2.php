<html>
<head><title>Squares And Cubes</title></head>
<script>
document.write('<p><b>SQUARES AND CUBES FROM 0 TO 10</b></p>');
document.write('<table border="2" cellspacing="2">');
document.write('<th> Number </th> <th> Square </th> <th> Cube </th>');
for(var i=1;i<=10;i++)
 document.write("<tr><td>" + i + "</td> "+"<td>" + i * i + "</td>" + "<td>" + i*i*i +
"</td></tr>");
document.write("</table>");
</script>
</html> 