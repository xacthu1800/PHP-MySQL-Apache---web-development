<html> 
  <head> 
    <title>Greetings Earthling</title> 
  </head> 
  <body> 
    <form action="formprocess2.php" method="post"> 
      <table> 
        <tr> 
          <td>Name</td> 
          <td><input type="text" name="name" /></td> 
        </tr> 
        <tr> 
          <td>Greetings</td> 
          <td> 
            <select name="greeting"> 
              <option value="Hello">Hello</option> 
              <option value="Hola">Hola</option> 
              <option value="Bonjour">Bonjour</option> 
            </select> 
          </td> 
        </tr> 
        <tr> 
          <td></td> 
          <td> 
            <input type="checkbox" name="debug" checked="checked" /> 
            Display Debug info
          </td> 
        </tr> 
        <tr> 
          <td colspan="2" style="text-align: center"> 
            <input type="submit" name="submit" value="Submit" /> 
          </td> 
        </tr> 
      </table> 
    </form> 
  </body> 
</html>
