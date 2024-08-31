    var root = document.documentElement;
    var q=1;

    function numare(n){
        let i=1;
        while(n[i])
        {
            i++;
        }
    return i;
    }
 
 
    $(document).ready(function(){
        document.getElementById('cuvant').innerHTML="Imagine it."
        let x = document.getElementById('cuvant').innerHTML;
        root.style.setProperty('--steps', numare(x));
        setTimeout(setInterval(function(){
         if(q==0)
         {
            document.getElementById('cuvant').innerHTML="Imagine it.";
         }
         if(q==1)
         {
            document.getElementById('cuvant').innerHTML="Design it.";
         }
         if(q==2)
         {
            document.getElementById('cuvant').innerHTML="Code it.";
         }
         let x = document.getElementById('cuvant').innerHTML;
         root.style.setProperty('--steps', numare(x));
         console.log(numare(x));
         if(q==2)
            q=0;
         else
            q++;

    },6000),6000)
})
