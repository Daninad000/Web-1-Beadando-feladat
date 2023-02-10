<?php
    session_start();

    //$_SESSION["isCheck"] = true;
    //$_SESSION["utvonal"] = strpos($_SERVER["REQUEST_URI"], "fooldal.php");
    //header("Location: ./index.php");
?>

<!DOCTYPE html>
<html lang="hu">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./css/style.css">
        <title>Horgászat</title>
    </head>

    <body class="container bg-dark">
        
        <header>
            <img class="row" id="headerimage_carussel" src="./galeria/Tahoe.jpg" alt="">

            <div class="jumbotron jumbotron-fluid bg-dark">
                <div class="text-center text-light bg-dark p-5 display-2">Horgászat</div>
            </div>
        </header>

        
        <?php
            include_once("navbar.php");
        ?>
        

        <div class="clearfix">
            <p>
                A horgászat egy ősi formája a táplálékszerzésnek, mely (horgász-)bot, zsinór és horog segítségével történik, és célja egy hal kifogása, zsákmányolása egy adott halgazdálkodási vízterületből. <br>
                A horgászat célja a 21. században már nem főleg a élelem-szerzés (ún. "húshorgászat"), hanem sokkal inkább a rekreáció a természetben. <br>
                Ezentúl a horgászat egy elismert sportág, és a horgászok számos országos és nemzetközi bajnokság keretében mérettetik meg magukat.
            </p>

            <p>
                A horgászatot a 133/2013. (XII. 29.) VM rendelet: "a halgazdálkodás és a halvédelem egyes szabályainak megállapításáról" határozza meg. Legáltalánosabb esetben egy felnőtt horgász engedélye alapján: "Állami horgászjeggyel rendelkező személy legfeljebb kettő - egyenként legfeljebb három, darabonként legfeljebb háromágú, horoggal felszerelt - horgászkészséget, valamint egyidejűleg egy darab, 1 m2-nél nem nagyobb csalihalfogó emelőhálót használhat." <br>
                Különösen a bot használata különbözteti meg a horgászatot a halászok ősidők óta alkalmazott horgos halfogási módszerektől. 
            </p>

            <p>
                A horgászat történetére a talált régészeti leletekből, horgokból lehet következtetni. <br>
                A legegyszerűbb horog egy két végén kihegyezett bot volt, csontból, szaruból, elefántcsontból, kőből, amit középen zsinórra kötöttek. A zsinór a botot keresztbe állította a hal szájában. <br>
                A legrégibb lelet Kelet-Timorból való, kb. 16000-23000 éves, a Jerimalai barlangból. Előkerültek ugyanott halmaradványok, melyek 42000 évesek, és arra utalnak, hogy már akkor halásztak. <br>
                A legöregebb görbe horog 12300 éves, Brandenburgból való, mammut-agyar anyagú. <br>
                Az akkori horgok 8-15 cm nagyok voltak, és csuka valamint harcsa fogására szolgáltak. <br>
                A legrégibb zsinórok rénszarvas inakból, lószőrből készültek. <br>
                A horgászat előnye volt, hogy kisebb halakat is meg lehetett fogni, valamint télen a jég alól is lehetett horgászni. 
            </p>

            <div class="img-fluid float-end rounded mainImg">
                <!--
                <video class="img-fluid float-end rounded mainImg" width="560" controls>
                    <source src="">
                </video>
                -->

                <iframe width="560" height="315" src="https://www.youtube.com/embed/y8wvvStWCPU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <p>
                A horgászat arra irányul, hogy a halat a horog bekapására ingerelje. <br>
                Ehhez általában a szakállas horgon csalit helyeznek el, és a halat a horog segítségével kihúzzák a vízből. <br>
                Nagyobb tömegű halat lehet etetéssel egy helyre vonzani, amivel nő a fogás lehetősége. <br>
                Némelyik halfajta megfigyeli a csalit, és a nem természetes csalira, vagy egyszer már kapott, és elszabadult hal megtanulja a csali kikerülését. <br>
                Így sokféle módszer alakult ki a horgászatra. 
            </p>

            <p>
                Alapvetően kétféle módszer ismert, a műcsalis, vagy természetes csalis módszer. <br>
                A műcsalival az ún. pergető horgászatot folytathatjuk, eszköze leginkább a wobbler, vagy villantó, ami a kishal mozgását és rezgéseit utánzó szerkezet. <br>
                Részben fenekező módszer a drop-shot, ami a zsinórra közvetlenül felerősített speciális horogra tűzött gumihalat használ. <br>
                A zsinórvégén lévő súlyt bedobják, majd fenékre érés után apró rezgetésekkel fokozatosan mozgatják. <br>
                Élettelen csalihalat, halszeletet is pergetésre használják, mint a wobblert, vagy villantót, de az esély a természetes csali miatt nagyobb lehet. 
            </p>

            <p>
                Békés halak fogásának ismert módja a fenekezés (feeder horgászat), amit legtöbbször etetéssel együtt alkalmaznak, pl. etetőkosaras súly alkalmazásával. <br>
                A súly leviszi a horgot a fenékre. <br>
                Az etetőanyag vagy közvetlenül, vagy illatával vonzza a halakat. <br>
                A horgot és az ólmot vagy csúszó, vagy fix elrendezésben rögzítjük, vagyis csúszóólom használat esetén az ólom marad a fenéken, és kapáskor csak a horog ill. zsinór mozdul a hal után, és jelzi a kapást. <br>
                Fix súly és horog esetén a zsinór vége kétfelé ágazik, egyik előkén a horog, másikon a súly található. Fenekezéskor a bothegy mozgása jelzi a kapást. 
            </p>

            <p>
                Az úszózás egy könnyebb, nagy súly használata nélküli horgászmódszer. <br>
                A zsinórra a horog és a bot közé egy úszó kerül, aminek mozgása jelzi a kapást. <br>
                A legegyszerűbb, könnyű felszerelésektől a komolyabb rablóhalas úszózó felszerelésekig változatos szerelékek léteznek. <br> 
                Egyik ismert módja a spiccbotos horgászat, amikor egy igen hosszú, de könnyű bot végére fixen kötjük a zsinórt, és ezzel oda ereszthetjük a szereléket, ahol halat vélünk. <br>
                Általában keszegezésre, kisebb pontyok fogására használják. <br>
                Úszózó felszereléssel folyóvízben a sodrással úsztatni is lehet, akár békés halra, akár rablóhalra (balingolyós horgászat). 
            </p>

            <div class="img-fluid float-start rounded mainImg">

                <iframe width="560" height="315" src="https://www.youtube.com/embed/UFpseoXElmg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <p>
                Kisebb patakok, folyók vizében alkalmazható horgász módszer, amivel egy mesterséges csalit, u.n. műlegyet dobunk a halak vélt tartózkodási helyére. <br>
                A műlégy lehet vízen úszó (száraz), vagy süllyedő (nedves) műlégyfajta. <br>
                Általában értékes halakat, pl. pisztrángot, vagy domolykót lehet hazai vizeinken ezzel fogni. <br>
                A halfajta, a hely megválasztásával, vagy különleges megoldásokkal kialakultak olyan horgászmódszerek, melyek a fenti alapeseteket alkalmazzák, de speciális feltételekkel. <br>
                Ilyen a keszegezés, tengeri horgászat, éjszakai horgászat, versenyhorgászat, melyekre külön irodalmak találhatók. 
            </p>
            <br />
            <p>
                Mivel a horgászat során a köztulajdonból a hal magántulajdonba kerül, a horgászatot a halászatról és horgászatról szóló törvény[1] szabályozza. <br>
                A horgászengedély megszerzéséhez vizsgát kell tenni, melynek anyaga a horgász egyesületeknél elérhető, vagy megtudható. <br> 
                Ez tartalmazza a halak ismeretét (nemes, másodrendű, és védett halak), horgászmódszereket, felszerelést, valamint a horgászat jogi alapfogalmait. <br>
                Általában a halak védelme fokozatosan szigorodik, külföldön népszerű a "fogd meg és engedd el", C&R módszer: lefényképezik a kifogott halat, és visszaengedik. <br>
                Méreten alulit nem szabad még fényképezésre sem levegőn tartani. <br>
                Lényegében kíméljük a halakat, inkább a sport és az élmény a fontos. <br>
                Van olyan felfogás (pl. Svájc), ahol a horgászatot élelemszerző tevékenységnek tartják. <br>
                A magyar törvény rekreációs tevékenységnek nevezi. <br>
                Állatvédelmi szervezetek a visszaengedéssel sincsenek megelégedve. <br>
                Mindenesetre a törvények betartásával egy olyan régi tevékenységet tudunk folytatni, amely mind a horgásznak, mind a természet szempontjainak megfelel. <br>
                Különleges helyzetben vannak a védett halak, mert ezek biológiai jellenzőinek ismerete nem a horgászathoz tartozik, de felismerésük a horgászatban is fontos. <br>
                Meghatározásukhoz segédlet található a NÉBIH honlapon. <br>
                Hasonló bizonytalanság merül fel egyes fajok meghatározásánál, ha a horgászvíz fajtája, a hal kora (fiatal példány), esetleg hibrid példány miatt az átlagtól eltérő jelleget kell megkülönböztetnünk. <br>
                Bármilyen bizonytalanság esetén ajánjuk az elengedést, ami akár a törvényes eljárás, akár a sportszerűség szempontjából is előnyös. 
            </p>

            <p>
                <span class="text-secondary">Forrás: Részletek a <a href="https://hu.wikipedia.org/wiki/Horg%C3%A1szat" target="_blank" id="wikipedia" style="color: grey;">Wikipédia</a> oldaláról</span>
            </p>
        </div>


        <footer class="page-footer text-center wow fadeIn">
            <div class="py-5 bg-dark">
                <span class="footer-copyright text-secondary center" id="copyright">© <?= date("Y"); ?>
 Copyright:</span>
                <span class="text-secondary center">Horgászat</span>
                <span class="text-secondary center"><a href="https://www.xfish.hu/" target="_blank" id="xfish" style="margin-left: 15px; color: grey;">X fish</a></span>
            </div>
        </footer>

        <script crossorigin src="https://unpkg.com/react@17/umd/react.development.js"></script>
        <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>
    </body>
</html>