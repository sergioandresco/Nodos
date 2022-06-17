<html lang = "es">  
    <header>
        <center>
        <FONT COLOR="red"><h1>RED DE NODOS</h1></FONT>
        <br><br>
        
    
        </center>
        
  
    </header>
    <body>
        <form action= "envioData.php" method="POST">  
            <center>
            <label><b>NÚMERO A GUARDAR</b></label>
            <input type= "text" name="numero" required>
            <br><br>
            

            <td>
            NODO DONDE SE QUIERE GUARDAR EL NÚMERO<br/>
            
            <input type="radio" name="gibraltar"/> 142.44.246.92</br>
            <input type="radio" name="mirage"/> 142.44.246.23</br>
            <input type="radio" name="wraith"/> 158.69.63.154</br>
            <input type="radio" name="bloodhound"/> 142.44.246.12</br>
            <br>

            </td>
            
 
            <button>GUARDAR</button><br/>
            <br> 
            
        </form>

        <form action= "suma.php" method ="POST">
        <button>SUMA</button><br/>
        <br>
        <img src="/NODO/images/verguenza.gif"><br/>


        </form>
        </center>
        
    </body>
 
</html>