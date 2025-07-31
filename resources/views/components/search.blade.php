<style>
  .search-input {
    width: 100%;
  }
  .search-form {
    max-width: 550px;
  }
  .btn-search {
    min-width: 130px;
    font-weight: 700;
    background-color: #198754; 
    color: white;
    border: none;
    padding: 0.5rem ;
    font-size: 1.1rem;
    transition: background-color 0.3s ease;
  }
  .btn-search:hover, 
  .btn-search:focus {
    background-color: #145c32;
    color: white;
  }
</style>

<form class="d-flex mt-2 mx-auto search-form" role="search">
  <input class="form-control me-2 search-input" type="search" placeholder="Recherchez le livre de votre choix" aria-label="Search" />
  <button class="btn btn-search" type="submit">Recherchez</button>
</form>
