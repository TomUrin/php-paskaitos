import './App.css';
import {useState} from "react";

function App() {

    const dogs = ['šuo', 'šunius', 'Bobikas', 'kudlius', 'Šarikas', 'avigalvis'];


    
  return (
    <div className="App">
      <header className="App-header">
      {
          <div className = "kv">{dogs[5]}</div>
      }
      </header>
    </div>
  );
}


export default App;