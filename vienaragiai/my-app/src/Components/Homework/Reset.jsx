import './App.css';
import {useState} from "react";

function App() {

    const [kv, setKv] = useState([]);
    const addKv = () => setKv(kvM => [...kvM, "skyblue"])
    const addKvr = () => setKv(kvM => [...kvM, "crimson"])
    const remKv = () => setKv(kvm => kvm.slice(0, 0));

    
  return (
    <div className="App">
      <header className="App-header">
      <div className='kvc'>
                {
                    kv.map((c) => <div className = "kv" style={{background: c}}></div>)
                }
                </div>
                <div className='btnC'>
        <button className='btnRed' onClick={addKvr}>Add Red</button>
      <button className='btn' onClick={addKv}>Add Blue</button>
      </div>
      <button className='btnReset' onClick={remKv}>RESET</button>
      </header>
    </div>
  );
}


export default App;