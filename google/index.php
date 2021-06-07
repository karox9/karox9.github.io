<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title> Google </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src = "vue.js" defer=""></script>
    <!-- <script src="cities.js"></script> -->
    <link rel="stylesheet" href="autocompleter.css">
    <script src="autocompleter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js" integrity="sha512-JZSo0h5TONFYmyLMqp8k4oPhuo6yNk9mHM+FY50aBjpypfofqtEWsAgRDQm94ImLCzSaHeqNvYuD9382CEn2zw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="home">
<div id="app" :class="{results : active()}"> 
    <div class="okno_glowne">
        <div class="klasa1">
            <div class="podklasa1">
                <div id="id1" class="podklasa1_1">
                    <div class="prostokat1">
                        <div>
                            <div class="prostokat1_1">
                                <div class="gmail">
                                    <a href="#">Gmail</a>
                                </div>
                                <div class="grafika">
                                    <a href="#">Grafika</a>
                                </div>
                            </div>
                        </div>
                        <div class="prostokat1_2">
                            <div class="element1">
                                <div class="kwadrat">
                                    <img src="Ikonki.png" width="48" height="48">
                                </div>
                            </div>
                            <div class="zaloguj">
                                <a href="#">Zaloguj się</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="klasa2">
            <div class="podklasa2">
                <img src="Google.png" width="272" height="92">
            </div>
        </div>
        <div class="klasa3">
            <div class="wyszukiwarka"> 
                <div class="prostokat3_1">
                    <div class="box3_1">
                        <div class="widok">
                            <img src="Lupka1.png" width="29" height="30.5" href="#">
                            <input ref="top" v-model="googleSearch" @focus="el_focus = true" @keyup.down="down()" @keyup.up="up()" @keyup.enter="enter()"/> 
                            <!-- <v-autocompleter :value="googleSearch" :options="cities"></v-autocompleter>  -->
                            <img src="Klawiatura1.png" width="40" height="28">
                        </div>
                    </div>
                    <div class="lista" :class="{widok: googleSearch.length > 0 && filteredCities.length > 0}">
                        <ul>
                            <li v-for="(city, index) in filteredCities">
                                <div class="element" :class="{kl_focus: index == mark}">
                                    <img src="Lupka2.png" width="12" height="12">
                                    <a v-html="bold_letter(city)" v-on:click="chosen(index)">
                                        <b>{{ city }}</b>
                                    </a>  
                                </div>
                            </li>
                        </ul>
                    </div> 
                </div>
                <div class="prostokat3_2">
                    <center>
                        <div class="szukaj">
                            <a href="#">Szukaj w Google</a> 
                        </div>
                        <div class="szczesliwy_traf"> 
                            <a href="#">Szczęśliwy traf</a>                               
                        </div>
                    </center>
                </div>
            </div>
        </div>     
        <div class="klasa4">
        </div>
        <div class="klasa5">
            <div class="polska">Polska</div>
            <div class="podklasa5">
                <div class="czesc_lewa">
                    <a class="napis" href="#">O nas</a>
                    <a class="napis" href="#">Reklamuj się</a>
                    <a class="napis" href="#">Dla firm</a>
                    <a class="napis" href="#">Jak działa wyszukiwarka</a>
                </div>
                <div class="czesc_srodkowa">
                    <a class="srodek">
                        <img src="Lisc.png" width="12.25" height="14">
                        <span class="span1" href="#">Neutralność węglowa od 2007 roku</span>
                    </a>
                </div>
                <div class="czesc_prawa">
                    <a class="napis" href="#">Prywatność</a>
                    <a class="napis" href="#">Warunki</a>
                    <a class="napis" href="#">Ustawienia</a>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="logo">
            <img src="Google.png" width="92" height="30">
        </div>
        <div class="search">
            <div class="searchbox"> 
                <div class="input_box">
                    <div class="box3_1_2">
                        <div class="widok">
                            <input v-model="googleSearch" @focus="el_focus = true" @keyup.enter="enter()" @keyup.down="down()" @keyup.up="up()">                            <div class="box_s">
                                <div class="symbol_x">
                                    <img src="x.png" width="44" height="44">
                                    <span class="line"></span>
                                </div>
                                <div class="keyboard">
                                    <img src="Klawiatura.png" width="44" height="44">
                                </div>
                                <div class="glass">
                                    <img src="lupa2.png" width="44" height="44">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lista" :class="{widok : googleSearch.length > 0 && filteredCities.length > 0}">
                        <ul>
                            <li v-for="(city, index) in filteredCities">
                                <div class="element" :class="{kl_focus: index == mark}">
                                    <img src="Lupka2.png" width="12" height="12">
                                    <a v-html="bold_letter(city)" v-on:click="chosen(index)">
                                        <b>{{ city }}</b>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="left_box">
            <div class="l_box">
                <div class="element_1">
                    <div class="square">
                        <img src="Ikonki.png" width="48" height="48">
                    </div>
                </div>
                <div class="element_2">
                    <a href="#">Zaloguj się</a>
                </div>  
            </div>
        </div>
    </div>
    <div class="top1">
        <div class="top_all">
            <div id="wszystko" class="buttons">
                <img src="lupka.png" width="30" height="30">
                <a>Wszystko</a>
            </div>
            <div id="wiadomosci" class="buttons">
                <img src="Wiadomości.png" width="28" height="37">
                <a>Wiadomości</a>
            </div>
            <div id="grafika" class="buttons">
                <img src="Grafika.png" width="24" height="32">
                <a>Grafika</a>
            </div>
            <div id="wideo" class="buttons">
                <img src="Wideo.png" width="30" height="35">
                <a>Wideo</a>
            </div>
            <div id="mapy" class="buttons">
                <img src="Mapy.png" width="28" height="41">
                <a>Mapy</a>
            </div>
            <div id="wiecej" class="buttons">
                <img src="Więcej.png" width="19" height="40">
                <a>Więcej</a>
            </div>
            <div id="ustawienia" class="buttons">
                <a>Ustawienia</a>
            </div>
            <div id="narzedzia" class="buttons">
                <a>Narzędzia</a>
            </div>
        </div>
    </div>
    <div class="main_results">
        <div id="center">
            <div class="result_number">
                <a>Około 11 600 000 wyników (0,35 s)</a>
            </div>
            <div id="res" class="all_results">
                    <div id="res_2">
                        <div class="main_class">
                            <div class="result">
                                <div class="rs">
                                    <div class="rs_up">
                                        <a id="rs_up_a" href="#">
                                            <h3 class="rs_up_h3">Sprawdzanie wyników wyszukiwania podróży przez Gmail ...</h3>
                                            <div class="rs_up_2">
                                                <cite class="web">
                                                    https://support.google.
                                                    <span class="web_2">› websearch › answer <a id="triangle" href="#">  ▼</a></span>
                                                </cite>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="rs_down">
                                        <span class="rs_down_span">
                                            <span>
                                                Zobacz
                                                <em>wyniki</em>
                                                z innego konta
                                                <em>Google</em>
                                                . Uwaga: aby wykonać te czynności, musisz zalogować się na konto
                                                <em>Google</em>
                                                . Na telefonie lub tablecie z Androidem otwórz ...
                                            </span>
                                        </span>
                                        <div class="opinion">
                                            <span>Brakujące: </span>
                                            <s> <span>jakiś</span> </s>
                                            | Musi zawierać słowo: 
                                            <a class="a_blue" href="#">
                                                <span>jakiś</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="result">
                                <div class="rs">
                                    <div class="rs_up">
                                        <a id="rs_up_a" href="#">
                                            <h3 class="rs_up_h3">Zawężanie wyników wyszukiwania - Wyszukiwarka Google ...</h3>
                                            <div class="rs_up_2">
                                                <cite class="web">
                                                    https://support.google.
                                                    <span class="web_2">› websearch › answer <a id="triangle" href="#">  ▼</a></span>
                                                </cite>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="rs_down">
                                        <span class="rs_down_span">
                                            <span>
                                                Możesz zwiększać precyzję 
                                                <em>wyników</em>
                                                wyszukwania, używając w zapytaniu słów i symboli. Wyszukiwarka 
                                                <em>Google </em>
                                                zwykle ignoruje znaki interpunkcyjne, które nie ...
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="result">
                                <div class="rs">
                                    <div class="rs_up">
                                        <a id="rs_up_a" href="#">
                                            <h3 class="rs_up_h3">Rodzaje wyników wyszukiwania Google - ponad 20 ...</h3>
                                            <div class="rs_up_2">
                                                <cite class="web">
                                                    https://pozycjonusz.pl
                                                    <span class="web_2">› rodzaje-wynikow-wyszuk... <a id="triangle" href="#">  ▼</a></span>
                                                </cite>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="rs_down">
                                        <span class="rs_down_span">
                                            <span>
                                                7) Wewnętrzna wyszukiwarka. Rodzaje 
                                                <em>wyników</em>
                                                wyszukiwania
                                                <em>Google</em>
                                                wzbogacono 
                                                <em>jakiś</em>
                                                czas temu o funkcję Wewnętrznej wyszukiwarki. To rozwiązanie, bez ...
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <span id="jakis_span"> </span>
                            <div class="result">
                                <div class="rs">
                                    <div class="rs_up">
                                        <a id="rs_up_a" href="#">
                                            <h3 class="rs_up_h3">14 sposobów wyszukiwania w Google, których 95% z Was nie ...</h3>
                                            <div class="rs_up_2">
                                                <cite class="web">
                                                    https://widoczni.com
                                                    <span class="web_2">› blog › jak-wyszukiwac-w-google <a id="triangle" href="#">  ▼</a></span>
                                                </cite>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="rs_down">
                                        <span class="rs_down_span">
                                            <span>
                                                Szukanie frazy – zastosowanie cudzysłowu. 
                                                <em>Wyniki</em>
                                                wyszukiwania w 
                                                <em>Google</em>
                                                konkretnych fraz mogą być bardziej trafne, gdy zastosujemy cudzysłów. Algorytmy ...
                                            </span>
                                        </span>
                                        <div class="opinion">
                                            <stars>
                                                <span class="opinion_stars">
                                                    <span class="stars_yellow"></span>
                                                </span>
                                            </stars>
                                            <span>Ocena: 4,2</span>
                                            ·
                                            <span>326 głosów</span>
                                        </div>
                                        <div class="rs_question">
                                            <hr class="rs_question_hr">
                                            <div class="rs_question_element">
                                                <span>Na czym polega zaawansowane wyszukiwanie w Google?</span>
                                                <img id="zdj1" src="Strzałka.png" width="30" height="35">
                                            </div>
                                            <div class="rs_question_element">
                                                <span>Jakich komend użyć do wyszukiwania w Google?</span>
                                                <img id="zdj2" src="Strzałka.png" width="30" height="35">
                                            </div>
                                            <div class="rs_question_element">
                                                <span>Gdzie znaleźć informacje na temat zawężania wyników wyszukiwania?</span>
                                                <img id="zdj3" src="Strzałka.png" width="30" height="35">
                                            </div>
                                            <div class="rs_question_element_img" href="#">
                                                <img src="Strzałka.png" width="30" height="35">Pokaż więcej</div>
                                            <div class="rs_question_element"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="result">
                                <div class="rs">
                                    <div class="rs_up">
                                        <a id="rs_up_a" href="#">
                                            <h3 class="rs_up_h3">Wyniki wyszukiwań Google - skąd takie rozbieżności?</h3>
                                            <div class="rs_up_2">
                                                <cite class="web">
                                                    https://www.empressia.pl
                                                    <span class="web_2">› blog › 115-rozne-wyniki-w... <a id="triangle" href="#">  ▼</a></span>
                                                </cite>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="rs_down">
                                        <span class="rs_down_span">
                                            <span class="data">
                                                21 lut 2019 —
                                            </span>
                                            <span>
                                                Otóż inaczej będą prezentować się 
                                                <em>wyniki</em>
                                                wyszukiwania po wpisaniu tej samej frazy przez ... 
                                                <em>Google</em>
                                                przechwytuje adres IP i za jego pomocą generuje 
                                                <em>wyniki</em>
                                                , np. po wpisaniu frazy ... 
                                                <em>Jaki</em>
                                                jest koszt pozycjonowania sklepu?
                                            </span>
                                        </span>
                                        <div class="opinion">
                                            <stars>
                                                <span class="opinion_stars">
                                                    <span class="stars_yellow"></span>
                                                </span>
                                            </stars>
                                            <span>Ocena: 3,7</span>
                                            ·
                                            <span>11 głosów</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="result">
                                <div class="rs">
                                    <div class="rs_up">
                                        <a id="rs_up_a" href="#">
                                            <h3 class="rs_up_h3">Wyszukiwarka Google powie więcej o wynikach wyszukiwania ...</h3>
                                            <div class="rs_up_2">
                                                <cite class="web">
                                                    https://www.telepolis.pl
                                                    <span class="web_2">› Artykuły › Akcje partnerskie  <a id="triangle" href="#">  ▼</a></span>
                                                </cite>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="rs_down">
                                        <span class="rs_down_span">
                                            <span class="data">
                                                2 lut 2021 —
                                            </span>
                                            <span>
                                                Szczegóły 
                                                <em>wyników</em>
                                                wyszukiwania w
                                                <em>Google</em>
                                                . W polu z informacjami o ... co masz do Wikipedii? Jeśli widzisz jakiś błąd, to możesz go poprawić.
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="result">
                                <div class="rs">
                                    <div class="rs_up">
                                        <a id="rs_up_a" href="#">
                                            <h3 class="rs_up_h3">Krytycy ganią Google'a za nowy wygląd wyników wyszukiwania</h3>
                                            <div class="rs_up_2">
                                                <cite class="web">
                                                    https://spidersweb.pl
                                                    <span class="web_2">› 2020/01 › google-wyniki-wyszu... <a id="triangle" href="#">  ▼</a></span>
                                                </cite>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="rs_down">
                                        <span class="rs_down_span">
                                            <span class="data">
                                                24 sty 2020 —
                                            </span>
                                            <span>
                                                <em>Google</em>
                                                co
                                                <em>jakiś</em>
                                                czas eksperymentuje z tym, jak wyglądają jego
                                                <em>wyniki</em>
                                                wyszukiwania i w 
                                                <em>jaki</em>
                                                sposób odróżniają się od nich reklamy. Trudno ...
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="result">
                                <div class="rs">
                                    <div class="rs_up">
                                        <a id="rs_up_a" href="#">
                                            <h3 class="rs_up_h3">Pozycja w Google - jak sprawdzić, na której pozycji jest moja ...</h3>
                                            <div class="rs_up_2">
                                                <cite class="web">
                                                    https://ks.pl
                                                    <span class="web_2">› jak-sprawdzic-pozycje-strony-w-google <a id="triangle" href="#">  ▼</a></span>
                                                </cite>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="rs_down">
                                        <span class="rs_down_span">
                                            <span>
                                                Tak naprawdę nie są znane wszystkie kryteria, jakimi kieruje się algorytm, nadając stronom pozycje w 
                                                <em>wynikach</em>
                                                wyszukiwania. W dodatku algorytm jest co 
                                                <em>jakiś</em>
                                                ...
                                            </span>
                                        </span>
                                        <div class="opinion">
                                            <stars>
                                                <span class="opinion_stars">
                                                    <span class="stars_yellow_2"></span>
                                                </span>
                                            </stars>
                                            <span>Ocena: 5</span>
                                            ·
                                            <span>16 głosów</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="result">
                                <div class="rs">
                                    <div class="rs_up">
                                        <a id="rs_up_a" href="#">
                                            <h3 class="rs_up_h3">Wyszukiwarka Google - Wikipedia, wolna encyklopedia ...</h3>
                                            <div class="rs_up_2">
                                                <cite class="web">
                                                    https://pl.wikipedia.org
                                                    <span class="web_2">› wiki › Wyszukiwarka_Google <a id="triangle" href="#">  ▼</a></span>
                                                </cite>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="rs_down">
                                        <span class="rs_down_span">
                                            <span>
                                                <em>Google</em>
                                                Search) – wyszukiwarka internetowa stworzona przez amerykańską spółkę ... Przez 
                                                <em>jakiś</em> 
                                                czas na pierwszych miejscach w 
                                                <em>wynikach</em>
                                                np. dla zapytania ... 
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="result">
                                <div class="rs">
                                    <div class="rs_up">
                                        <a id="rs_up_a" href="#">
                                            <h3 class="rs_up_h3">Pozycjonowanie, czyli jak być wysoko w Google - TAAT</h3>
                                            <div class="rs_up_2">
                                                <cite class="web">
                                                    https://taat.pl
                                                    <span class="web_2">› artykuly › pozycjonowanie <a id="triangle" href="#">  ▼</a></span>
                                                </cite>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="rs_down">
                                        <span class="rs_down_span">
                                            <span>
                                                Stąd moment pojawienia się strony w 
                                                <em>wynikach</em>
                                                wyszukiwania nazywa się ... Indeks jest aktualizowany co
                                                <em>jakiś</em>
                                                czas, co oznacza, że robot 
                                                <em>Google</em>
                                                odwiedza ...
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="bottom">
                <div class="research">
                    <h3 class="research_h3">
                        <span class="similar_research">Podobne wyszukiwania</span>
                    </h3>
                </div>
                <div class="elements">
                    <div class="elements_division">
                        <div class="columns">
                            <a class="columns_el" href="#">
                                <div class="columns_el_1"></div>
                                <div class="columns_el_2">
                                    <b>Google Trends</b>
                                </div>
                            </a>
                            <a class="columns_el" href="#">
                                <div class="columns_el_1"></div>
                                <div class="columns_el_2">
                                    <b>Zaawansowane wyszukiwanie w Google</b>
                                </div>
                            </a>
                            <a class="columns_el" href="#">
                                <div class="columns_el_1"></div>
                                <div class="columns_el_2">
                                    <b>Zawężanie wyników wyszukiwania</b>
                                </div>
                            </a>
                            <a class="columns_el" href="#">
                                <div class="columns_el_1"></div>
                                <div class="columns_el_2">
                                    <b>Wyniki wyszukiwania</b>
                                </div>
                            </a>
                        </div>
                        <div class="columns">
                            <a class="columns_el" href="#">
                                <div class="columns_el_1"></div>
                                <div class="columns_el_2">
                                    <b>Wyszukiwanie w Internecie</b>
                                </div>
                            </a>
                            <a class="columns_el" href="#">
                                <div class="columns_el_1"></div>
                                <div class="columns_el_2">
                                    <b>Wyszukiwanie zaawansowane definicja</b>
                                </div>
                            </a>
                            <a class="columns_el" href="#">
                                <div class="columns_el_1"></div>
                                <div class="columns_el_2">
                                    <b>Oto niektóre wyniki wyszukiwania</b>
                                </div>
                            </a>
                            <a class="columns_el" href="#">
                                <div class="columns_el_1"></div>
                                <div class="columns_el_2">
                                    <b>Zasady wyszukiwania w Google</b>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="google_next">
                <ul class="list">
                    <table>
                        <tbody>
                            <tr>
                                <td><span class="blue">G</span></td>
                                <td><span class="red">o</span></td>
                                <td><span class="yellow">o</span></td>
                                <td><span class="yellow">o</span></td>
                                <td><span class="yellow">o</span></td>
                                <td><span class="yellow">o</span></td>
                                <td><span class="yellow">o</span></td>
                                <td><span class="yellow">o</span></td>
                                <td><span class="yellow">o</span></td>
                                <td><span class="yellow">o</span></td>
                                <td><span class="yellow">o</span></td>
                                <td><span class="blue">g</span></td>
                                <td><span class="green">l</span></td>
                                <td><span class="red">e</span></td>
                                <td rowspan="2" width="10px;"></td>
                                <td><span id="next_symbol" class="blue"> ></span></td>
                            </tr>
                            <tr>
                                <td class="number"></td>
                                <td class="number">1</td>
                                <td class="number">2</td>
                                <td class="number">3</td>
                                <td class="number">4</td>
                                <td class="number">5</td>
                                <td class="number">6</td>
                                <td class="number">7</td>
                                <td class="number">8</td>
                                <td class="number">9</td>
                                <td class="number">10</td>
                                <td colspan="3"></td>
                                <td class="number">Następna</td>
                            </tr>
                        </tbody>
                    </table>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer_1">
            <div class="poland">
                Polska 
            </div>
            <div class="location">
                ⚫
                <span id="krk">Kraków</span>
                - Z Twojego adresu internetowego - 
                <a id="location_desc" href="#">Użyj dokładnej lokalizacji </a>
                - 
                <a id="location_desc" href="#">Dowiedz się więcej</a>
            </div>
        </div>
        <div class="footer_2">
            <div class="footer_2_down">
                <a class="word" href="#">Pomoc</a>
                <a class="word" href="#">Prześlij opinię</a>
                <a class="word" href="#">Prywatność</a>
                <a class="word" href="#">Warunki</a>
            </div>
        </div>
    </div>
</div>
<!-- <script>
    var app = new Vue({
        el: '#app',
        data: {
            googleSearch: '',
            results: []
        },
        methods : {
            findResultsDebounced : Cowboy.debounce(100, function findResultsDebounced() {
                console.log('Fetch: ', this.googleSearch)
                fetch(`http://localhost:8080/search?name=${this.googleSearch}`)
                    .then(response => response.json())
                    .then(data => {
                        console.log('Data: ', data);
                        this.results = data;
                    });
            })
        }
    })
</script> -->
</body>
</html>