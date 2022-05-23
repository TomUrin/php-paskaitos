import './App.css';
import {useState} from "react";

function App() {

  const dogs = ['šuo', 'šunius', 'Bobikas', 'kudlius', 'Šarikas', 'avigalvis'];
  
  dogs.sort(function(a,b){ 
    return b.length - a.length;
  });

  return (
    <div className="App">
      <header className="App-header">
        <div className='kvc'>
      {
        dogs.map((name, i) => <p key = {i} className = "aps">{i + 1}{name}</p>)
      }
      </div>
      </header>
    </div>
  );
}


export default App;