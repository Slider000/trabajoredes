<html>
<head>
<title>AND</title>
<style>
table
{
    border-collapse: collapse; /* Los bordes de la tabla se pegarán (mejor aspecto) */
    width:300px;
}
td
{
    border: 1px solid black;
}
#salida{
    margin-left:200px;
    position:absolute;
    margin-top:-1px;
}
h3{
    position:relative;
    margin-top:-21px;
    margin-left:60px
}
#resultado{
    margin-left:140px 
}
.ce{
    text-align:center;
}
div{
    margin-left:690px;
    margin-top:-601px;
}
.and img{
    width:500px;
    height:100px;
    margin-left:-100px;
    margin-top:901px;
   
}
.cde{
    margin-top:0px;
    
}
.andl{
    margin-top:-500px;
    
}
.and{
    margin-top:-700px;
    width:500px;
    height:200px;

}
.and img{
    
    width:500px;
    height:200px;

}
#d{
    margin-left:140px;
}
</style>
</head>
<body>

<table>
<h1>Tabla de verdad AND</h1>

   <tr>
   <h2 id="salida">salida</h2>
       <td>X1</td>
       <td>X2</td>
       <td>D</td>
       <td>Envio</td>
   </tr>
   <h2>Entrada</h2>
   <tr>
       <td>0</td>
       <td>0</td>
       <td>0</td>
       <td><input type="submit" value=">>" onclick="enviodatos1()"></input></td>
   </tr>
   <tr>
       <td>0</td>
       <td>1</td>
       <td>0</td>
       <td><input type="submit" value=">>"   onclick="enviodatos2()"></input></td>
   </tr>
   <tr>
       <td>1</td>
       <td>0</td>
       <td>0</td>
       
       <td><input type="submit" value=">>"  onclick="enviodatos3()"></input></td>
   </tr>
   <tr>
       <td>1</td>
       <td>1</td>
       <td>1</td>
       <td><input type="submit" value=">>"  onclick="enviodatos4()"></input></td>
   </tr>
</table>
<table>
<h1>Pesos Iniciales</h1>
   <tr>
       <td>W1</td>
       <td>W2</td>
       <td>wb</td>
   </tr>
   <tr>
       <td><p id="demo"></p></td>
       <td><p id="demo1"></td>
       <td><p id="demo2"></td>
   </tr>
</table>

<h2>Valor de Σ</h2>
<a>Σ=<h3 id="prueba"></h3></a>
<h2>Rsultados</h2>
<a>Salida=<h3 id="prueba2"></h3></a>
<a>Salida Esperada=<h3 id="d"></h3></a>
<a>Resultado esperado=<h3 id="resultado"></h3></a>

<div class="andl">
<img src="compuertas/AND.png" alt="AND">
</div>
<div class="and">
    <img src="compuertas/and1.png" alt="AND">
</div>
<script>
        var nw1 = 0.2;
        //var nw1 = w1.toFixed(1);
        document.getElementById("demo").innerHTML = nw1 ;
        


        var nw2 = 0.3;
        //var nw2 = w2.toFixed(1);
        document.getElementById("demo1").innerHTML = nw2 ;
        


        var ntheta = 0.1;
        //var ntheta = theta.toFixed(1);
        document.getElementById("demo2").innerHTML = ntheta ;

   
       function enviodatos1(){
        var valordeagregado = 1;
        var variabledesalida = 0;
        document.getElementById("d").innerHTML = variabledesalida ;
        var resultadoesperado = "cumple";
        var resultadoesperadon = "no cumple";
           var sumatoriapesos , x1= 0 , x2 = 0;
           var sumatoriapesos =  (parseInt(x1) * parseFloat(nw1)) + (parseInt(x2) * parseFloat(nw2)) + (parseInt(valordeagregado) * parseFloat(ntheta)) ;
           var nsumatoriatotal = sumatoriapesos.toFixed(1);
            document.getElementById("prueba").innerHTML = nsumatoriatotal ;

            if (sumatoriapesos > 0.5){
                document.getElementById("prueba2").innerHTML = "1" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                document.getElementById("resultado").innerHTML = "no cumple" ;
            }
            else {
                document.getElementById("prueba2").innerHTML = "0" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                document.getElementById("resultado").innerHTML = "cumple" ;
            }

           

       }
        function enviodatos2(){
            var valordeagregado = 1;
        var variabledesalida = 0;
        document.getElementById("d").innerHTML = variabledesalida ;

           var sumatoriapesos , x1= 0 , x2 = 1;
           var sumatoriapesos =  (parseInt(x1) * parseFloat(nw1)) + (parseInt(x2) * parseFloat(nw2)) + (parseInt(valordeagregado) * parseFloat(ntheta)) ;
           var nsumatoriatotal = sumatoriapesos.toFixed(1);
            document.getElementById("prueba").innerHTML = nsumatoriatotal ;

            if (sumatoriapesos > 0.5){
                document.getElementById("prueba2").innerHTML = "1" ;
                  //validamos el error
                //var error = variabledesalida - 1;
               // document.getElementById("error").innerHTML = error ;
               document.getElementById("resultado").innerHTML = "no cumple" ;
            }
            else {
                document.getElementById("prueba2").innerHTML = "0" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                document.getElementById("resultado").innerHTML = "cumple" ;
            }

       }
       function enviodatos3(){
        var valordeagregado = 1;
        var variabledesalida = 0;
        document.getElementById("d").innerHTML = variabledesalida ;

           var sumatoriapesos , x1= 1 , x2 = 0;
           var sumatoriapesos =  (parseInt(x1) * parseFloat(nw1)) + (parseInt(x2) * parseFloat(nw2)) + (parseInt(valordeagregado) * parseFloat(ntheta)) ;
           var nsumatoriatotal = sumatoriapesos.toFixed(1);
            document.getElementById("prueba").innerHTML = nsumatoriatotal ;

            if (sumatoriapesos > 0.5){
                document.getElementById("prueba2").innerHTML = "1" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                document.getElementById("resultado").innerHTML = "no cumple" ;
            }
            else {
                document.getElementById("prueba2").innerHTML = "0" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                document.getElementById("resultado").innerHTML = "cumple" ;
            }

       }
       function enviodatos4(){
        var valordeagregado = 1;
        var variabledesalida = 1;
        document.getElementById("d").innerHTML = variabledesalida ;

           var sumatoriapesos , x1= 1 , x2 = 1;
           var sumatoriapesos =  (parseInt(x1) * parseFloat(nw1)) + (parseInt(x2) * parseFloat(nw2)) + (parseInt(valordeagregado) * parseFloat(ntheta)) ;
           var nsumatoriatotal = sumatoriapesos.toFixed(1);
            document.getElementById("prueba").innerHTML = nsumatoriatotal ;

            if (sumatoriapesos > 0.5){
                document.getElementById("prueba2").innerHTML = "1" ;
                  //validamos el error
                //var error = variabledesalida - 1;
                //document.getElementById("error").innerHTML = error ;
                document.getElementById("resultado").innerHTML = "cumple" ;
            }
            else {
                document.getElementById("prueba2").innerHTML = "0" ;
                  //validamos el error
                //var error = variabledesalida - 1;
               // document.getElementById("error").innerHTML = error ;
               document.getElementById("resultado").innerHTML = "No cumple" ;
            }

       }

       
</script>
</body>
</html>