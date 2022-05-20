import './App.css';
import {useState} from "react";

function App() {

    const [pav, setPav] = useState("aps");
    
    const change = () => {
        setPav(pav === "aps" ? "kvad" : "aps");
    }

        const [num, setNum] = useState(5);
      
        function randomNumberInRange(min, max) {
          return Math.floor(Math.random() * (max - min + 1)) + min;
        }
      
        const random = () => {
          setNum(randomNumberInRange(5, 25));
        }
    
  return (
    <div className="App">
      <header className="App-header">
        <div className = {pav}>{num}</div>
        <button onClick={change}>Change</button>
        <button onClick={random}>Random number</button>
      </header>
    </div>
  );
}


export default App;