$(document).ready(function(){
    function q(a,b,c){
        var d=4*(a+b*e.width);f[d]=c.R,f[d+1]=c.G,f[d+2]=c.B,f[d+3]=c.A
    }
    function r(a,b,c){
        for(var d=Math.abs(b.x-a.x),e=Math.abs(b.y-a.y),f=a.x<b.x?1:-1,g=a.y<b.y?1:-1,h=d-e;;)
        {
            if(q(~~a.x,~~a.y,c),a.x===b.x&&a.y===b.y)
                break;
            var i=2*h;i>-d&&(h-=e,a.x+=f),i<e&&(h+=d,a.y+=g)}}function s(a,b){return a*b/255}function t(){var a=Math.floor(3*Math.random())-1,b=Math.random(),c=(30+100*b)*a;b<.333?m.x+=c:b<.667?m.y+=c:m.z+=c,m.x>g.x-1&&(m.x=g.x-1),m.x<-g.x&&(m.x=-g.x),m.y>g.y&&(m.y=g.y),m.y<-g.y&&(m.y=-g.y),m.z>500&&(m.z=500),m.z<-500&&(m.z=-500);var j=i/(i+m.z+500);m.nx=Math.floor(m.x*j+g.x),m.ny=Math.floor(m.y*j+g.y);var k={x:m.nx,y:m.ny},l={x:m.ox,y:m.oy};m.ox=m.nx,m.oy=m.ny;var n=Math.floor(255*j);h&&(n=255);var o=p(n);if(r(k,l,{R:o.r,G:o.g,B:o.b,A:o.a}),h)for(var q=245,t=0,u=f.length;t<u;t+=4)f[t+3]=s(q,f[t+3]);d.putImageData(e,0,0)}function u(a){h=!0}function v(a){h=!1}var a=800,b=300,c=document.createElement("canvas");c.setAttribute("width",a),c.setAttribute("height",b),c.addEventListener("mousedown",u),c.addEventListener("mouseup",v),$(c).css("cursor","pointer"),document.getElementById("effect").appendChild(c);var d=c.getContext("2d"),e=d.getImageData(0,0,a,b),f=e.data,g={x:c.width/2,y:c.height/2},h=!1,i=200,j=i/(i+500),k=Math.floor(g.x*j+g.x),l=Math.floor(g.y*j+g.y),m={x:g.x,y:g.y,z:0,nx:k,ny:l,ox:k,oy:l},o={};o.r=Math.random()*(2*Math.PI),o.g=Math.random()*(2*Math.PI),o.b=Math.random()*(2*Math.PI);var p=function(a){var b=127*Math.sin(o.r+=.01)+128,c=127*Math.sin(o.g+=.007)+128,d=127*Math.sin(o.b+=.013)+128,e=a;return{r:b,g:c,b:d,a:e}};window.requestAnimFrame=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(a){window.setTimeout(a,1e3/60)}}(),function a(){requestAnimFrame(a),t()}()});
        
    