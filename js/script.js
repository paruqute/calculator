function addbtnclick()
{

    var getFirstNumber= parseInt(document.getElementById("num1").value);
    var getSecNumber= parseInt(document.getElementById("num2").value);

    var result=(getFirstNumber+getSecNumber);
    document.getElementById("output").innerHTML=result;
}

function subbtnclick()
{

    var getFirstNumber= parseInt(document.getElementById("num1").value);
    var getSecNumber= parseInt(document.getElementById("num2").value);

    var result=(getFirstNumber-getSecNumber);
    document.getElementById("output").innerHTML=result;
}
function multbtnclick()
{

    var getFirstNumber= parseInt(document.getElementById("num1").value);
    var getSecNumber= parseInt(document.getElementById("num2").value);

    var result=(getFirstNumber*getSecNumber);
    document.getElementById("output").innerHTML=result;
}

function divbtnclick()
{

    var getFirstNumber= parseInt(document.getElementById("num1").value);
    var getSecNumber= parseInt(document.getElementById("num2").value);

    var result=(getFirstNumber/getSecNumber);
    document.getElementById("output").innerHTML=result;
}