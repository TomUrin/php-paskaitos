import './App.css';
import {useState} from "react";

function App() {

    const [num, setNr] = useState(0);
    const plus = () => {
        setNr(n => n + 1);
    }
    const minus = () => {
        setNr(n => n - 3);
    }

  return (
    <div className="App">
      <header className="App-header">
        <div className = "num">{num}</div>
        <div className='btnc'>
        <button className='btn' onClick={plus}>Plus</button>
        <button className='btn' onClick={minus}>Minus</button>
        </div>
      </header>
    </div>
  );
}


export default App;