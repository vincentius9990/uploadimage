import React from "react";
import { useState } from "react";
//import Title from "./data.json";
function Card(props)
{

let white="#F8F8FF";
   const [c,setBg]=useState(white);//now count=0
    function incre(){
        let bg = "#6495ED";
        setBg(bg); 
}

function bgback()
{
    setBg(white);
}
return(
<>

<div class="c1">
    <img src={props.s} alt="oh" height="250" width="250"/>
<br></br>
<div><h><div className="c2">{props.title}</div></h><br/><button style={{backgroundColor:c}} onClick={incre} onDoubleClick={bgback}><strong>LIKES</strong></button></div>
</div>
</>
 );
}
export default Card;
