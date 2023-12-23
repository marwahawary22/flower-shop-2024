function share(){
    var ShareData={
        url:document.location.href
    }
    if(navigator.canShare(ShareData)){
       navigator.share(ShareData);
    }
}
let mybtn=document.getElementById("btn");

mybtn.onclick =function(){
    console.log("save");
}