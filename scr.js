function cul(){
    let month = document.forms["input"]["month"].value;
    let day = document.forms["input"]["month"].value;
    if( month == 1  ){
        if(day<=20)
            document.getElementById('ch').innerHTML="魔羯座";
        else{
            document.getElementById('ch').innerHTML="水瓶座";
        }
    }
    else if( month == 2  ){
        if(day<=18)
            document.getElementById('ch').innerHTML="水瓶座";
        else{
            document.getElementById('ch').innerHTML="雙魚座";
        }
    }
    else if( month == 3  ){
        if(day<=20)
            document.getElementById('ch').innerHTML="雙魚座 ";
        else{
            document.getElementById('ch').innerHTML="牡羊座";
        }
    }
    else if( month == 4  ){
        if(day<=19)
            document.getElementById('ch').innerHTML="牡羊座";
        else{
            document.getElementById('ch').innerHTML="金牛座";
        }
    }
    else if( month == 5  ){
        if(day<=20)
            document.getElementById('ch').innerHTML="金牛座";
        else{
            document.getElementById('ch').innerHTML="雙子座";
        }
    }
    else if( month == 6  ){
        if(day<=21)
            document.getElementById('ch').innerHTML="雙子座";
        else{
            document.getElementById('ch').innerHTML="巨蟹座";
        }
    }
    else if( month == 7  ){
        if(day<=22)
            document.getElementById('ch').innerHTML="巨蟹座";
        else{
            document.getElementById('ch').innerHTML="獅子座";
        }
    }

    else if( month == 8  ){
        if(day<=22)
            document.getElementById('ch').innerHTML="獅子座";
        else{
            document.getElementById('ch').innerHTML="處女座";
        }
    }

    else if( month == 9  ){
        if(day<=22)
            document.getElementById('ch').innerHTML="處女座";
        else{
            document.getElementById('ch').innerHTML="天秤座";
        }
    }

    else if( month == 10  ){
        if(day<=23)
            document.getElementById('ch').innerHTML="天秤座";
        else{
            document.getElementById('ch').innerHTML="天蠍座";
        }
    }

    else if( month == 11  ){
        if(day<=22)
            document.getElementById('ch').innerHTML="天蠍座 ";
        else{
            document.getElementById('ch').innerHTML="射手座";
        }
    }
    else if( month == 12  ){
        if(day<=21)
            document.getElementById('ch').innerHTML="射手座";
        else{
            document.getElementById('ch').innerHTML="魔羯座";
        }
    }

}