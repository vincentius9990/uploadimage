import React from "react";
import logo from "./youtubelogo.png";
import Card from "./Card";
import Title from "./data.json";
import {useState} from "react";
import ReactDOM from "react-dom/client";
//<Card title="wppp"/> 
function Header()
{
  const home=()=>
{ window.open("http://localhost:3000/","_parent");}
const [img,setimg]=useState("");
function handlechange(event){
const data=event.target.value;
setimg(data);
}
function i(){
for(let count=0;count<5;count++)
{return(Title.map((post)=>( 
  <div className="c">
 const root=ReactDOM.createRoot(document.getElementById("root"));
root.render(<Card title={post.title} s={post.location} />);
</div>)))}
}

    return (
      <>    
      <div className="divv">
      <img src={logo} alt="utube" width="100" height="50"/>
        <input type="text" placeholder="Search.." value={img} onChange={handlechange}/>
       
        <a href="http://localhost/React.php?"><button type="button">SIGNIN</button></a>
        <a href="http://localhost/React1.php?"><button type="button">LOGIN</button></a>
        <a href="http://localhost/title.php?"><button type="button">UPLOAD</button></a>
        <hr></hr>
      </div>
      <div className="di">
        <br></br>
        <button  onClick={home}>Home</button>
          <button>Subscriptions</button>
          <button>Library</button>
        <button>History</button>
      </div>
      <br></br>
      <br></br><br></br><br></br><br></br>
  {i}


       </>
    );   
}
export default Header;
/*Title.map((post)=>(<div className="c">
        <Card title={post.title} s={post.location} />
      </div>))*/
      /*<div className="c">
      <Card title={Title.title} s={Title.location}/>
      </div>*/