<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <style type="text/css">
            body {
                background-image: url("https://securecdn.pymnts.com/wp-content/uploads/2016/09/hacker-tracker-obama-cyber-arms-race-450x270.jpg");
                background-size: cover;
            }
     #botao {text-align: center }       
.botaoEntrar{
    width: 320px;
    text-align: center;
    padding: 3px 90px;
    border: 1px solid #eee;
    border-radius: 6px;
    background-color: #FCC302;
    font-size: 18px;
}
.input{
      height: 50px;
}
.table{
    height: 300px;
    
}
        </style>
        <meta charset="UTF-8">
        <title></title>
    </head>
 <body>
       <script type="text/javascript">   
           function login () {
               window.location.replace("Projeto1.php");
           }
           </script>
          <table border="1"align="center" bgcolor="#01DFA5" class ="table"  >
              <tr>
                  <td align="center" bgcolor="yellow">Login</td>
              </tr>
<tr> 
    <td>
        <input
type="TEXT"
name="identificacao"
size="40" maxlength="40" class ="input" placeholder="Nome" > </p>
        <input
type="TEXT"
name="identificacao"
size="40" maxlength="40" class ="input"  placeholder="Email" > </p>
        <input
            type="password"
name="senha"
size="40" maxlength="8" class ="input"  placeholder="senha maximo 8 digitos" > </p>
    
    
         <div id="botao">
        <input type="submit"  nome="botao" values="login" class ="botaoEntrar" onclick="login()" /> <p>
         </div>
    </td>
             </tr>
        <?php
        
        ?>
    </body>
</html>
