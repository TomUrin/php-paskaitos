import logo from './logo.svg';
import './App.css';
import Hello from './Components/009/Hello';
import Mustang from './Components/009/Mustang';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <Hello spalva="crimson" size="14" skaicius={5}></Hello>
        <Mustang></Mustang>
        <Hello spalva="skyblue" size="22" skaicius={10}></Hello>
        <Hello spalva="yellow" size="33" skaicius = {15}></Hello>
      </header>
    </div>
  );
}

export default App;
