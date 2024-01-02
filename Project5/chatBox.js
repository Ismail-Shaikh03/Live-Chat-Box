function sendMsg(){
    let userName=document.getElementById("userName").value;
    let userPassword=document.getElementById("userPassword").value;
    let login_response=document.getElementById("login_response");
    let userMsg=document.getElementById("userMsg").value;
   /* if(userName=="" || userPassword==""){
        login_response.innerHTML="Please enter all data.";
    }*/
    let xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
         login_response.innerHTML=this.responseText;
    }
    };
    xhr.open("GET","sendMsg.php?q="+userName+"&p="+userPassword+"&u="+userMsg,true);
    xhr.send();

}
let listenButton=document.getElementById("listenButton");
listenButton.addEventListener("click",receiveMsgs);
function receiveMsgs(){
    let otherName=document.getElementById("otherName").value;
    let receiveMsg=document.getElementById("receiveMsg");
    function continueReceiveMsgs(){
        let xhr1=new XMLHttpRequest();
        xhr1.onreadystatechange=function(){
            if(this.readyState==4 && this.status==200){
             receiveMsg.innerHTML=this.responseText;
        }
        };
        xhr1.open("GET","receiveMsg.php?q="+otherName,true);
        xhr1.send();
    }
    //continueReceiveMsgs();
    setInterval(continueReceiveMsgs,2000);
}