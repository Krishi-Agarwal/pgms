let a=['./pictures/logo.jpeg','./pictures/logo1.jpeg'];
let i=0;
function display()
{
    
    document.getElementById('nimg').src=a[i++%2];
    
    document.getElementById('aa').href=document.getElementById('nimg').src;
    
    document.getElementById('aa').target='blank';
    if(i<10)
    document.getElementById('aa').click();
    
    
    
}
setInterval(display,300);
