$('.carousel').carousel()

function mandar()
{
    var meuform= document.getElementById("meuform");
    var email= document.getElementById("email");
    var senha= document.getElementById("senha");
    meuform.action="logar.php";
    meuform.method="post";
    var e=email.value;
    var s= senha.value;


    for(i=0;i<=6;i++)
    {
        e=window.btoa(e);
        s=window.btoa(s);
    }
   
    email.value=l;
    senha.value=s;
   
    meuform.appendChild(email);
    meuform.appendChild(senha);
   
    meuform.submit();
   
}


  