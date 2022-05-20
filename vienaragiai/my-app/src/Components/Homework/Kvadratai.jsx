import './App.css';
import {useState} from "react";

function App() {

    const [kv, setKv] = useState([]);

    const addKv = () => setKv(kvM => [...kvM, 1])
    
  return (
    <div className="App">
      <header className="App-header">
      <div className='kvc'>
                {
                    kv.map((c, i) => <div key = {i} className = "kv"></div>)
                }
                </div>

      <button className='btn' onClick={addKv}>ADD</button>
      </header>
    </div>
  );
}


export default App;