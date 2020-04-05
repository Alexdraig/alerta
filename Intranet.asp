<%@ Language=VBScript %>
<HTML>
<HEAD>
</HEAD>
<body>
<%
    '----------------------------------------------------------
    '  Function CompararIps(ip1,ip2)
    '----------------------------------------------------------
    '  Funcion que compara dos cadenas en forma de un diccionario
    '  devuelve 1 si ip1 es menor que ip2; 0 si son iguales y -1 si 
    '  ip1 es mayor que ip2.
'   and CompararIps("172.16.160.239",c_ip)<>0 _
'   and CompararIps("172.16.160.108",c_ip)<>0 _ 
'   and CompararIps("172.16.160.101",c_ip)<>0 _
    
    function CompararIps(ip1,ip2)
        dim matriz1,matriz2
        matriz1 = split(ip1,".")
        matriz2 = split(ip2,".")
        if (cint(matriz1(0))=cint(matriz2(0))and cint(matriz1(1))=cint(matriz2(1))and cint(matriz1(2))=cint(matriz2(2))and cint(matriz1(3))=cint(matriz2(3)))then
            CompararIps = 0
            exit function
        end if
        if (cint(matriz1(0))<cint(matriz2(0)))then
            CompararIps = 1
            exit function
        end if
        if (cint(matriz1(0))=cint(matriz2(0))and cint(matriz1(1))<cint(matriz2(1)))then
            CompararIps = 1
            exit function
        end if
        if (cint(matriz1(0))=cint(matriz2(0))and cint(matriz1(1))=cint(matriz2(1))and cint(matriz1(2))<cint(matriz2(2)))then
            CompararIps = 1
            exit function
        end if
        if (cint(matriz1(0))=cint(matriz2(0))and cint(matriz1(1))=cint(matriz2(1))and cint(matriz1(2))=cint(matriz2(2))and cint(matriz1(3))<cint(matriz2(3)))then
            CompararIps = 1
            exit function
        end if
        CompararIps= -1
    end function
    '----------------------------------------------------------
    dim c_ip  
    c_ip = cstr(Request.ServerVariables("REMOTE_HOST")) 
if ( (CompararIps("172.16.0.0",c_ip)=CompararIps(c_ip,"172.16.254.254") or _
      CompararIps("172.28.0.0",c_ip)=CompararIps(c_ip,"172.28.254.254") or _            
      CompararIps("200.62.146.210 ",c_ip)=CompararIps(c_ip,"200.62.146.210 ") or _  
      CompararIps("200.62.146.0",c_ip)=CompararIps(c_ip,"200.62.146.254") or _    
      CompararIps("172.30.0.0",c_ip)=CompararIps(c_ip,"172.30.254.254") _
      ) and CompararIps("172.16.160.137",c_ip)<>0 _
    and CompararIps("172.16.160.111",c_ip)<>0 _
    and CompararIps("172.16.156.38",c_ip)<>0 _
    and CompararIps("172.16.160.105",c_ip)<>0 _
    and CompararIps("172.16.160.115",c_ip)<>0 _ 
    and CompararIps("172.16.160.117",c_ip)<>0 _
    and CompararIps("200.62.146.19",c_ip)<>0 _
    and CompararIps("172.16.160.101",c_ip)<>0 _
    and CompararIps("172.16.160.103",c_ip)<>0 _
    and CompararIps("172.22.22.4",c_ip)<>0)then
     session("intranet")= true
  
     select case Request.QueryString ("DB")
     case "aReview"
        'Response.Redirect "http://www.annualreviews.org/library/start"
        Response.Redirect "autenticar.asp?db=" + Request.QueryString("db")
     case "cabAbsGlobalH"
        Response.Redirect "https://www.cabdirect.org/"
     case "cabEbooks"
        Response.Redirect "http://www.cabi.org/cabebooks"
     case "gvrl"
        Response.Redirect "https://www.galepages.com/unsmar"
     case "dynamed"
        Response.Redirect "http://search.ebscohost.com/login.aspx?authtype=ip,url,uid&custid=s1248620&profile=dynamed&groupid=main"
     case "eds"
        Response.Redirect "http://search.ebscohost.com/login.aspx?authtype=ip,url,uid&custid=s1248620&profile=eds&groupid=main"
     case "ebscoHost"
        Response.Redirect "https://search.ebscohost.com/login.aspx?authtype=ip,url,uid&custid=s1248620&groupid=main"
        'Response.Redirect "http://search.ebscohost.com/login.aspx?authtype=ip,url,uid&custid=s1248620&profile=ehost&groupid=main"
        'Response.Redirect "autenticar.asp?db=" + Request.QueryString("db")
     case "ebscoEbookMed"
        Response.Redirect "http://sisbib.unmsm.edu.pe/m_recursos/libros_electronicos.html#ebsco"      
    case "enfermeria_al_dia"
        Response.Redirect "http://search.ebscohost.com/login.aspx?authtype=ip,url,uid&custid=s1248620&profile=nrc-spa&groupid=main"       
     case "ovidebooks"
        Response.Redirect "https://ovidsp.ovid.com/autologin"
     case "pqcentral"
        Response.Redirect "https://search.proquest.com"
     case "pivot"
        Response.Redirect "https://pivot.cos.com"
     case "pfi"
        Response.Redirect "http://search.ebscohost.com/login.aspx?authtype=ip,url,uid&custid=s1248620&profile=pfi&groupid=main"
     
     case "springer"
        Response.Redirect "autenticar.asp?db=" + Request.QueryString("db")
        '"http://link.springer.com/search?facet-content-type=%22Journal%22&showAll=false"
     
     case "wos"
        'Response.Redirect "http://webofknowledge.com/WOS"
        Response.Redirect "autenticar.asp?db=" + Request.QueryString("db")
     
     case "wileyEbook"
        'Response.Redirect "http://onlinelibrary.wiley.com/"
        Response.Redirect "autenticar.asp?db=" + Request.QueryString("db")
        
    case "scopus"
        'Response.Redirect "https://www.scopus.com/standard/marketing.uri"
        Response.Redirect "autenticar.asp?db=" + Request.QueryString("db")     
     
     case "ebrary"
        'Response.Redirect "http://site.ebrary.com/lib/unmsmsp"   
        Response.Redirect "autenticar.asp?db=" + Request.QueryString("db")
     
     case "hinari"
        'Response.Redirect "http://extranet.who.int/hinari/en/journals.php"
        Response.Redirect "autenticar.asp?db=" + Request.QueryString("db")
     case "isiC"
       ' Archivo logonisi.htm tiene seguridad NT en el servidor
       ' Response.Redirect "logonisi.htm" 
     ' MODIFICACION DEL 06 DIC. 2006
     ' Se enviara peticion directamente a autenticar.asp y por el momento no se usara la  seguridad NT
     ' del servidor. Hay que idear otro metodo para recuperar nombres de usuarios que entran a Isi.       
     ' Response.Redirect "autenticar.asp?db=" + Request.QueryString("db")
     ' MODIFICACION DEL 05 ENERO 2008
     ' Se envia a direccion que comprueba IP, como Proquest. Ya no es necesario que vaya a autenticar.asp 
        Response.Redirect "http://newisiknowledge.com"
     case "dynamed"
        Response.Redirect "autenticar.asp?db=" + Request.QueryString("db")
     case "sgb"
        Response.Redirect "http://sisbib.unmsm.edu.pe/symphony/index.html"
     case "StA"
        Response.Redirect "https://es.statista.com/portal-estadistico/"
     case else
        Response.Redirect "autenticar.asp?db=" + Request.QueryString("db")
     end select
     
else
    session("intranet")= false
    session("egresado")= false
    session("autenticado")= false
    Response.Redirect "http://sisbib.unmsm.edu.pe/Acceso/validar.aspx?db=" + Request.QueryString ("DB")
end if
%>
</BODY>
</HTML>