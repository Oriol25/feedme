<div id="header">
    <ul>
        <li><a>HOME</a></li>
        <li><a>PRODUCTS</a></li>
    </ul>
</div>
<div id="secondHeader">
    <img class="no-selected" src="{{ asset('./assets/off-logo-horizontal-light.svg') }}" alt="">
    <div>
        <form method="POST" action="{{ route('home.searchFromApi') }}">
            @csrf
            <input type="search" name="home_search" placeholder="Busca un producto" id="searcher" maxlength="13">
            <button id="search" type="submit"><i class="fas fa-search"></i></button>
        </form>        
    </div>
    <button id="scanner">SCANNER</button>

</div>
