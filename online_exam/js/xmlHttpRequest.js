var xmlHttp=false;
try{
   xmlHttp=new ActiveXObject("Msxm12.XMLHTTP");
}catch(e){
    try{
       xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }catch(e2){}
}
if(!xmlHttp && typeof XMLHttpRequest!="undefined"){
   try{
      xmlHttp=new XMLHttpRequest();
   }catch(e3){xmlHttp=false;}
}