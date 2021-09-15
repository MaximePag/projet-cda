import logo from './racoon.png';
import './bootstrap/css/bootstrap.min.css';
import './App.css';

function App() {
  return (
    <div className="App">
      <header class="row">
        <div class="col-3">
          <a class="navbar-brand" href="/"><img className="App-logo" src={logo} />Raccoon world</a>
        </div>
        <div class="col-6 text-center">
          <p id="slogan">Love raccoons &lt;3</p>
        </div>
        <div class="col-3 justify-content-between">
          <i class="bi bi-heart-fill"></i>
          <i class="bi bi-person-circle"></i>
          <i class="bi bi-facebook"></i>
          <i class="bi bi-twitter"></i>
          <i class="bi bi-search"></i>
        </div>
      </header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="#">Acheter</a>
              <a class="nav-link" href="#">Vendre</a>
              <a class="nav-link" href="#">Louer</a>
              <a class="nav-link" href="#">Estimer</a>
              <a class="nav-link" href="#">Mettre en gestion</a>
            </div>
          </div>
        </div>
      </nav>
      <header className="App-header">
        <h1>Bienvenue chez Raccoon-World</h1>
        <img className="App-logo" src={logo} />
        <img className="App-logo" src={logo} />
        <img className="App-logo" src={logo} />
        <img className="App-logo" src={logo} />
        <img className="App-logo" src={logo} />
        <img className="App-logo" src={logo} />
        <a
          className="App-link"
          href="/"
          target="_blank"
          rel="noopener noreferrer"
        >
          Tourbi-Coon
        </a>
      </header>
    </div>
  );
}

export default App;
