import { useEffect, useState } from 'react';
import './App.css';
import axios from 'axios';

function App() {

    const [count, setCount] = useState(1);
    const [cats, setCats] = useState([]);

    useEffect(() => {
        console.log('GO');
    }, []);

    useEffect(() => {
        axios.get('http://localhost/vienaragiai/011/')
        .then(res => {
          console.log(res);
          setCats(res.data);
        });
    }, []);

    return (
        <div className="App">
          <header className="App-header">
              <h1>{count}</h1>
            <button onClick={() => setCount(c => c + 1)}>+1</button>
            {
                cats.map((c, i) => <div key={i}>{c}</div>)
            }
          </header>
        </div>
      );

}

export default App;