import { useState } from 'react';
import './App.css';

function App() {

    const dogs = ['šuo', 'šunius', 'Bobikas', 'kudlius', 'Šarikas', 'avigalvis'];
    
      return (
        <div className="App">
        <header className="App-header">
          <div className='kvc'>
        {
          dogs.map((name, i) => /[A-ZŠ]/.test(name.charAt(0)) ? <p key = {i} className = 'aps'></p> : <p key = {i} className = 'aps'>{name}</p>)
        }
        </div>
        </header>
      </div>
        );
    }
  
export default App;