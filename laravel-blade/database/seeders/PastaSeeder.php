<?php

namespace Database\Seeders;

use App\Models\Pasta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PastaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paste = [
            [
                "src" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.jpg",
                "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/09/4-spaghetto-quadrato-bucato.png",
                "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/09/spaghetto-quadrato-bucato.jpg",
                "titolo" => "N.4 Spaghetto Quadrato Bucato",
                "tipo" => "lunga",
                "cottura" => "6 min",
                "peso" => "500g",
                "descrizione" => "È la vera rivelazione della gamma! Lo Spaghetto Quadrato Bucato n.4 fa pensare subito ad una pasta molto succulenta che ha lo stesso potenziale dello Spaghetto Quadrato (N.1 Spaghetto Quadrato). La sua consistenza soda si sprigiona in bocca con un’esplosione di emozioni, grazie agli spessori corposi, al colore elegantemente ambrato, alla texture delicatamente ruvida, cangiante e piacevolissima al tatto che trattiene il condimento sulla superficie. <br> Da provare per rivoluzionare le sorti del primo piatto sia a casa che al ristorante.Dedicato a chi in cucina ama sperimentare nuove forme del gusto, ma vuole stupire affidandosi ad una pasta che garantisce ottime performance in cottura, lo Spaghetto Quadrato Bucato n .4 è il formato perfetto che racchiude tutte caratteristiche uniche di Pasta La Molisana. <br> Da provare per quelli che… il Bucatino già mi piace, lo Spaghetto Quadrato Bucato n .4 sarà il paradiso della pasta!"
            ],
            [
                "src" => "https://www.lamolisana.it/wp-content/uploads/2021/04/5-fettuccine.jpg",
                "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/03/5-fettuccine-1.png",
                "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/03/fettuccine-classiche.jpg",
                "titolo" => "N.5 Fettuccine",
                "tipo" => "lunga",
                "cottura" => "13 min",
                "peso" => "500g",
                "descrizione" => "Forse di origine romana le fettuccine hanno sicuramente natali centro-meridionali, ma la versione più famosa in tutto il mondo è quella delle Fettuccine alla Alfredo. Un primo piatto veloce e facile da realizzare con burro e parmigiano che delizia il palato grazie alla succulenta emulsione di formaggio che avvolge la pasta con una crema liscia e vellutata. <br> Molto amate anche le fettuccine ai funghi o alla boscaiola, oppure nella versione più semplice al limone o al tartufo. Le nostre fettuccine sono disponibili sia nella versione di semola che all’uovo e sono entrambe perfette per salse dense che assorbono il sugo. <br> Noi le prepariamo con vongole, branzino e un misto di verdure aromatizzate allo zenzero, oppure sempre a base di pesce con cozze, calamari e gamberetti."
            ],
            [
                "src" => "https://www.lamolisana.it/wp-content/uploads/2021/04/6-linguine.jpg",
                "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/03/6-linguine-1.png",
                "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/03/linguine-classiche.jpg",
                "titolo" => "N.6 Linguine",
                "tipo" => "lunga",
                "cottura" => "12 min",
                "peso" => "500g",
                "descrizione" => "Nel nostro Molino, situato a 500 m di distanza dal Pastificio di Campobasso, inizia il processo di trasformazione del grano duro, selezionato con cura maniacale ed una competenza tramandata da 4 generazioni. Il chicco, prima di essere macinato, viene decorticato a pietra e purificato con cura, raggiungendo standard di sicurezza e salubrità altissimi. <br> Il risultato delle numerose fasi di macinazione è una semola purissima, dal colore giallo ambrato, dalla consistenza piacevolmente granulosa, perfetta per essere impastata con le acque dalle caratteristiche oligominerali originate nel cuore del Massiccio del Matese. Il Molise, infatti, è per le sue caratteristiche fisiche una terra ideale per la produzione di pasta, come testimonia il proliferare di opifici e molini già agli inizi del secolo scorso.Un’ importante tradizione di maccaronai che La Molisana ha raccolto e perpetuato nel segno della Qualità. <br> Questa è la materia prima che caratterizza la nostra pasta, un prodotto ricco di alte proteine, che tiene perfettamente la cottura, dalla superficie dolcemente rugosa che attira e trattiene sapientemente i condimenti ed è adatta ad ogni tipo di preparazione.Come le nostre Linguine 6. <br> Note anche con il nome di bavette o trenette, le linguine appartengono alla stessa famiglia degli spaghetti, da cui si differenziano per la sezione che, anziché essere cilindrica, è piatta.In pratica è uno spaghetto schiacciato a sezione rettangolare con uno spessore medio.Rispetto alle linguine, le trenette hanno una sezione quadrata, uno spessore maggiore ed una minore larghezza.Il formato sembra avere origini liguri, in particolare genovesi ed è notoriamente abbinato al pesto o ai sughi di pesce. <br> Nell'immaginario collettivo sono associate ad un abbinamento di pesce: linguine all'astice oppure allo scoglio o ancora ai frutti di mare, agli scampi e vongole o anche semplicemente al limone.Da provare la ricetta delle linguine al nero di seppia. <br> Le nostre Linguine 6 al bronzo sono piacevolmente corpose, leggermente più spesse di quella classiche e perfette se abbinate a prosciutto croccante e perle di melone."
            ],
            [
                "src" => "https://www.lamolisana.it/wp-content/uploads/2021/04/7-mezze-linguine.jpg",
                "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/03/7-mezze-linguine-2.png",
                "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/03/mezze-linguine-classiche.jpg",
                "titolo" => "N.7 Mezze Linguine",
                "tipo" => "lunga",
                "cottura" => "11 min",
                "peso" => "500g",
                "descrizione" => "Non ci stancheremo mai di dire che se c’è qualcosa che ci rende diversi dagli altri è la possibilità di offrire un prodotto di cui controlliamo l’intero processo di produzione. Questa cura, che parte dal chicco di grano ed arriva fino alla tavola, rappresenta per il consumatore una certezza: tracciabilità e trasparenza. Questo asset che appartiene solo al 10% delle aziende del settore agroalimentare, è una garanzia di Qualità costante e controllata sia di prodotto che di processo. <br> Appartengono al nostro assortimento di paste classiche, le Mezze linguine 7 della stessa famiglia delle linguine, da cui differiscono per la larghezza leggermente inferiore.Una caratteristica che offre il vantaggio della maggiore facilità di“ arrotolamento” intorno forchetta tipico della pasta a sezione piatta. <br> Sono versatili e particolarmente amate con le preparazioni a base di pesce come ad esempio con gamberi e radicchio o tonno e pomodori. <br> Le nostre Mezze linguine 7 sono trafilate al bronzo e hanno una texture ruvida che cattura il condimento.A noi piacciono abbinate alla colatura di alici e ad un buon bicchiere di vino bianco!"
            ],
            [
                "src" => "https://www.lamolisana.it/wp-content/uploads/2021/04/11-spaghettino-quadrato.jpg",
                "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/03/11-spaghettino-quadrato.png",
                "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/03/spaghettino-quadrato-classiche.jpg",
                "titolo" => "n.11 Spaghettino Quadrato",
                "tipo" => "lunga",
                "cottura" => "9 min",
                "peso" => "500g",
                "descrizione" => "Figlio di cotanto padre, lo Spaghettino Quadrato 11, è venuto al mondo per accontentare quei pochi che non si erano innamorati dello Spaghetto Quadrato per via dello spessore esagerato. Con i suoi 1.75 centimetri di spessore lo spaghettino va benissimo per quelli che… less is more!<br> È superversatile e si presta perfettamente a tutte le possibili ricette: leggere e vegetariane, condimenti cremosi e ricchi di ingredienti.Se spezzato, lo Spaghettino Quadrato 11, può accompagnare brodetti di pesce e arrotolato può accogliere come un nido i condimenti più svariati…<br> Insomma, lo Spaghettino Quadrato 11 de La Molisana è destinato a grandi cose. Il nostro chef lo propone in una ricetta delicatissima, ma succulenta, con tocchetti di filetto di cernia profumato al basilico e straccetti di burrata pugliese.Il tutto completato da preziose gocce di caviale di peperoncino."
            ],
            [
                "src" => "https://www.lamolisana.it/wp-content/uploads/2021/04/12-bucatini.jpg",
                "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/03/12-bucatini.png",
                "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/03/bucatini-classiche.jpg",
                "titolo" => "n.12 Bucatini",
                "tipo" => "lunga",
                "cottura" => "6 min",
                "peso" => "500g",
                "descrizione" => "Secondo la tradizione nascono in terra siciliana, ma nei secoli i bucatini diventano protagonisti della scena nazionale. Sono famose le preparazioni alla gricia, con cacio e pepe, o alla carbonara, ma l’apoteosi è senz’altro con il sugo all’amatriciana. La ricetta, tipicamente rietina, si esprime al massimo solo quando incontra sua maestà il Bucatino. I nostri Bucatini 12 sono corposi e, grazie alla trafilatura al bronzo, riescono a catturare il succulento sugo che caratterizza la ricetta dei Bucatini alla norma: gustosi tocchetti di melanzane e una spolverata abbondante di ricotta salata, che il nostro chef ci suggerisce."
            ],
            [
                "src" => "https://www.lamolisana.it/wp-content/uploads/2021/05/38-mezze-maniche.jpg",
                "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/05/38-mezze-maniche.png",
                "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/05/mezze-maniche.jpg",
                "titolo" => "N.38 Mezze maniche",
                "tipo" => "corta",
                "cottura" => "12 min",
                "peso" => "500g",
                "descrizione" => "In tutte le espressioni artistiche, come nel mondo della pasta, sono i dettagli a fare la differenza, per questo non potevano mancare in assortimento le Mezze Maniche 38, a completare l'offerta delle corte bucate e rigate, accanto ai rigatoni e ai mezzi rigatoni.<br> A rendere questo formato unico è la rigatura leggermente più larga che sembra dilatare la superficie e fare spazio al condimento, il quale lega ancora di più con la texture ruvida.Appena più corte e dal diametro un po' più largo, le Mezze Maniche 38 diventano una declinazione raffinata per palati attenti.<br> Roma ha dedicato a questa pasta ricette iconiche che hanno fatto la storia della gastronomia italiana: dalla gricia, ovvero l'amatriciana in bianco, alla carbonara, dalla pasta alla norma fino alla norcina, le mezze maniche sembrano abbinarsi perfettamente alle preparazioni della tradizione."
            ],
            [
                "src" => "https://www.lamolisana.it/wp-content/uploads/2021/05/44-sedani.jpg",
                "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/05/44-sedani.png",
                "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/05/sedani.jpg",
                "titolo" => "N.44 Sedani",
                "tipo" => "corta",
                "cottura" => "8 min",
                "peso" => "500g",
                "descrizione" => "La semola che viene utilizzata per produrre pasta La Molisana presenta le migliori caratteristiche qualitative che si identificano in un colore giallo paglierino, che riflette il colore dei campi, nella purezza e nell’alto valore nutritivo.<br>La semola, alla stregua del grano, si compone di Carboidrati e Proteine.I primi sono rappresentati dall’ amido, le seconde prevalentemente dal Glutine e per la parte restante da proteine minori, ma ugualmente importanti.Le proteine della pasta La Molisana si caratterizzano per: <ol><li>elevato contenuto, mai inferiore al 14 % a fronte del minimo di legge del 10, 5 %</li><li>elevata tenacità</li></ol> Due aspetti essenziali che definiscono la pasta di qualità e rendono La Molisana una pasta speciale, come i nostri Sedani Rigati 44. In passato erano noti come zanne di elefante, per via della leggera curvatura, poi hanno preso il nome di sedani rigati per via della rigatura che ricorda appunto quell’ ortaggio!<br>Molto simili ai maccheroni, però più delicati nella forma, i Sedani Rigati 44 sono presenti sia nella gamma retail che in quella della ristorazione.<br>Agli chef e ai professionisti della cucina particolarmente esigenti che lavorano con tempi molto stretti e richiedono alla pasta affidabilità nei processi di trasformazione, i nostri Sedani Rigati 44<br>garantiscono ottime prestazioni sia in cottura espressa che in doppia cottura, inoltre una texture sempre  al dente, grazie ad un indice proteico del 14, 5%, ed una superficie deliziosamente ruvida che cattura il condimento grazie alla trafilatura al bronzo."
            ],
            [
                "src" => "https://www.lamolisana.it/wp-content/uploads/2021/05/49-sedani.jpg",
                "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/05/49-sedanini.png",
                "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/05/sedanini.jpg",
                "titolo" => "N.49 Sedanini",
                "tipo" => "corta",
                "cottura" => "8 min",
                "peso" => "500g",
                "descrizione" => "La semola che viene utilizzata per produrre pasta La Molisana presenta le migliori caratteristiche qualitative che si identificano in un colore giallo paglierino, che riflette il colore dei campi, nella purezza e nell’alto valore nutritivo.<br>La semola, alla stregua del grano, si compone di Carboidrati e Proteine.I primi sono rappresentati dall’ amido, le seconde prevalentemente dal Glutine e per la parte restante da proteine minori, ma ugualmente importanti.Le proteine della pasta La Molisana si caratterizzano per: <ol><li>elevato contenuto, mai inferiore al 14 % a fronte del minimo di legge del 10, 5 %</li><li>elevata tenacità</li></ol> Due aspetti essenziali che definiscono la pasta di qualità e rendono La Molisana una pasta speciale, come i nostri Sedani Rigati 44. In passato erano noti come zanne di elefante, per via della leggera curvatura, poi hanno preso il nome di sedani rigati per via della rigatura che ricorda appunto quell’ ortaggio!<br>Molto simili ai maccheroni, però più delicati nella forma, i Sedani Rigati 44 sono presenti sia nella gamma retail che in quella della ristorazione.<br>Agli chef e ai professionisti della cucina particolarmente esigenti che lavorano con tempi molto stretti e richiedono alla pasta affidabilità nei processi di trasformazione, i nostri Sedani Rigati 44<br>garantiscono ottime prestazioni sia in cottura espressa che in doppia cottura, inoltre una texture sempre  al dente, grazie ad un indice proteico del 14, 5%, ed una superficie deliziosamente ruvida che cattura il condimento grazie alla trafilatura al bronzo."
            ],
            [
                "src" => "https://www.lamolisana.it/wp-content/uploads/2021/05/53-lumachine.jpg",
                "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/05/53-lumachine.png",
                "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/05/lumachine.jpg",
                "titolo" => "N.53 Lumachine",
                "tipo" => "corta",
                "cottura" => "12 min",
                "peso" => "500g",
                "descrizione" => "Molti formati di pasta hanno preso il nome della realtà che ci circonda. Dalla natura arrivano lumache, lumachine, lisce o rigate. Le nostre Lumachine 53 hanno davvero una forma molto graziosa, sembrano dei piccoli gioielli da indossare, forse per la fattura perfetta, per la compattezza e il dolce colore ambrato.<br>Ai più piccoli piacciono molto perché sembrano docili conchiglie dorate, che noi proponiamo con una saporita ricetta a base di pesce.<br>Mentre la pasta cuoce brevemente, si prepara un sughetto veloce e succulento, tagliando le melanzane a cubetti e cuocendole in olio extra vergine di oliva e saltando in padella con del pomodorino fresco e un rametto di timo, un trancio di pesce spada pulito e privato dell’ osso centrale.Quando la pasta è cotta al dente, si amalgama tutto e si serve… i bambini impazziranno!"
            ],
            [
                "src" => "https://www.lamolisana.it/wp-content/uploads/2021/05/55-chifferi-rigati.jpg",
                "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/05/55-chifferi-rigati.png",
                "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/05/chifferi-rigati-1.jpg",
                "titolo" => "N.55 Chifferi rigati",
                "tipo" => "corta",
                "cottura" => "12 min",
                "peso" => "500g",
                "descrizione" => "Di etimo probabilmente straniero, i chifferi hanno una forma decisamente particolare che ricorda una conchiglia di medie dimensioni pronta ad accogliere nelle sue cavità succulenti sughi e condimenti. Come tutto il resto della gamma, anche i Chifferi rigati 55 nascono dal grano più pregiato al mondo.<br>Lo stesso inconfondibile tesoro che da oltre un secolo è il protagonista di una storia straordinaria che si rinnova grazie alla generosità di uomini e donne che amano il loro lavoro, al profondo rispetto per il tempo e l’ esperienza centenaria di una famiglia di maestri mugnai.Tutto questo è La Molisana, tutto questo è quello che da oltre 100 anni portiamo sulla vostra tavola."
            ],
            [
                "src" => "https://www.lamolisana.it/wp-content/uploads/2021/05/58-misto-corto.jpg",
                "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/05/58-misto-corto.png",
                "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/05/misto-corto.jpg",
                "titolo" => "N.58 Misto corto",
                "tipo" => "corta",
                "cottura" => "9 min",
                "peso" => "500g",
                "descrizione" => "Incontrare tanti formati di pasta diversi…  in un solo pack è un'idea assolutamente originale! Ogni singolo formato è stato scelto e abbinato con cura, studiando il giusto equilibrio tra affinità e differenze, per ottenere un prodotto versatile, originale e gustosissimo.<br> Questa è la nostra mission… portare quotidianamente sulla tavola una pasta di Qualità, intesa prima di tutto come impegno di natura etica, fondamento su cui costruiamo il nostro business.<br> Da oltre 100 anni l'amore per la Qualità si è rinnovato ed è maturato, un sentimento che ci induce a compiere tutto con passione e nel modo migliore, attratti da una formula naturale, semplice quanto incredibile: acqua e semola!"
            ],
            [
                "src" => "https://www.lamolisana.it/wp-content/uploads/2021/06/61-semi-di-melone.jpg",
                "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/06/61-semi-di-melone.png",
                "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/06/semi-di-melone.jpg",
                "titolo" => "N.61 Semi di Melone",
                "tipo" => "cortissima",
                "cottura" => "6 min",
                "peso" => "500g",
                "descrizione" => "Alla vista ha un colore giallo ambrato, esposta in controluce mostra un campo limpido con qualche isolata punteggiatura che indica la presenza della gemma del grano, pronta a sposare, a seconda del formato, il condimento che meglio sa esaltarne le proprietà.<br>Al tatto è porosa, piacevolmente ruvida, sembra trattenere il tocco delle dita e al gusto svela una consistenza calibrata accompagnata da un delizioso aroma di grano. <br>Pasta La Molisana si distingue inoltre per l’elevato contenuto proteico, mai inferiore al 14%, per l’ottima tenuta in cottura e per l’assenza di residui nell’acqua di cottura."
            ],
            [
                "src" => "https://www.lamolisana.it/wp-content/uploads/2021/06/84-ditale-quadrato.jpg",
                "src-h" => "https://www.lamolisana.it/wp-content/uploads/2021/06/84-ditali-quadrati.png",
                "src-p" => "https://www.lamolisana.it/wp-content/uploads/2021/06/ditali-quadrati.jpg",
                "titolo" => "N.84 Ditale Quadrato",
                "tipo" => "cortissima",
                "cottura" => "12 min",
                "peso" => "500g",
                "descrizione" => "Altro elemento cult della famiglia de lo Spaghetto Quadrato (N.1 Spaghetto Quadrato. Una new entry che sarà molto apprezzata sia dai consumatori che dagli chef, perché il Ditale Quadrato è un formato deliziosamente piccolo ma sostanzioso.<br>A dispetto del nome che fa pensare ad una pastina è un formato di pasta assolutamente versatile, adatto a moltissime ricette di primi piatti.<br>La sua consistenza soda si sprigiona in bocca con un'esplosione di emozioni, grazie agli spessori corposi, al colore elegantemente ambrato, alla texture delicatamente ruvida, cangiante e piacevolissima al tatto che trattiene il condimento sulla superficie.<br>Il Ditale Quadrato sembra ideale per preparazioni strutturate come la ricetta con crema di broccoletto siciliano, calamari e pomodori semi secchi profumata al limone e carbone d'olive nere."
            ]
        ];


        foreach ($paste as $pasta) {
            $p = new Pasta();

            $p->src = $pasta['src'];
            $p->title = $pasta['titolo'];
            $p->type = $pasta['tipo'];
            $p->cooking_time = $pasta['cottura'];
            $p->weight = $pasta['peso'];
            $p->description = $pasta['descrizione'];

            $p->save();
        }
    }
}
