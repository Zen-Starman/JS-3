function heeHaw2(){

    var x = document.getElementById('num').value;

    for(var i = 1; i <= x; i++)
    {
        var result = i/3;
        var result2 = i/5;

        if(Number.isInteger(result) && Number.isInteger(result2))
        {
            console.log("Hee Haw!");
        }
        else if(Number.isInteger(result) && !Number.isInteger(result2))
        {
            console.log("Hee!");
        }
        else if(Number.isInteger(result2)&& !Number.isInteger(result))
        {
            console.log("Haw!");
        }
        else{
            console.log(i);
        }
    }
}