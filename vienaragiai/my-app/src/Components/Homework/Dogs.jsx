import './App.css';
import {useState} from "react";

function App() {

  const dogs = ['šuo', 'šunius', 'Bobikas', 'kudlius', 'Šarikas', 'avigalvis'];

    
  return (
    <div className="App">
      <header className="App-header">
        <div className='kvc'>
      {
        dogs.map((name, i) => <p className = "kv">{i}{name}</p>)
      }
      </div>
      </header>
    </div>
  );
}


export default App;