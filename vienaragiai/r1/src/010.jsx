import { useState } from 'react';
import './App.css';

import randColor from './Functions/randColor';

// const cats = ['Pilkis', 'Rainis', 'Murkis'];

function App() {

    const [spalva, setSpalva] = useState('crimson');
    const [nr, setNr] = useState(1);
    const [kv, setKv] = useState([]);

    const stebuklas = (a) => {
        console.log('stebuklu stebuklas ' + a);
    }

    const stebuklas1 = () => {
        console.log('stebuklu stebuklas');
        // const newColor = spalva === 'crimson' ? 'skyblue' : 'crimson';
        setSpalva((oldColor) => oldColor === 'crimson' ? 'skyblue' : 'crimson');
        // spalva = 'skyblue';
        console.log(spalva);
    }

    const add = () => {
        setNr(n => n + 1);
    }

    const addKv = () => setKv(kvM => [...kvM, randColor()])

    const remKv = () => setKv(kvM => kvM.slice(1));

    return (
        <div className="App">
            <header className="App-header">
                <h1 style={{color:spalva}}>State {nr}</h1>
                <div className="kvc">
                    {
                        kv.map((c, i) => <div key={i} className="kv" style={{background: c}}>{i}</div>)
                    }
                </div>

                <button onClick={() => stebuklas('Abra-kadabra')}>Press WITH</button>
                <button onClick={stebuklas1}>Press W/O</button>
                <button onClick={add}>+1</button>
                <button onClick={addKv}>ADD []</button>
                <button onClick={remKv}>REMOVE []</button>
            </header>
        </div>
    );
}

export default App;
