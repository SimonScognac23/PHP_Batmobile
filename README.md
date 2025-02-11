In questo codice, ho creato una rappresentazione della Batmobile composta da due parti principali: la parte anteriore e la parte posteriore. Ognuna di queste parti ha un comportamento specifico e può essere rappresentata da un oggetto diverso. Per esempio, la parte anteriore può essere un Lanciafiamme o un LanciRazzi, mentre la parte posteriore può essere un Fumogeno o un Rampino.

Ho usato un concetto chiamato composizione (HAS-A), che significa che la Batmobile ha una parte anteriore e una parte posteriore. Queste due parti non sono collegate tramite ereditarietà, ma sono oggetti separati che compongono la Batmobile.

Ho utilizzato il costruttore della classe Batmobile per iniettare le dipendenze di parte anteriore e posteriore. Quindi, quando creo una nuova Batmobile, passo gli oggetti che rappresentano la parte anteriore e posteriore. Questi oggetti sono instanziati all'esterno della classe Batmobile e poi passati al suo costruttore per comporre la macchina. In questo modo, la Batmobile può variare nel suo comportamento a seconda degli oggetti che riceve (Lanciafiamme, Fumogeno, ecc.).

All'interno della classe Batmobile, ho creato due metodi: attaccare e difendere. Questi metodi chiamano i metodi delle rispettive parti (ad esempio, attacco sulla parte anteriore e difendi sulla parte posteriore), permettendo alla Batmobile di eseguire azioni senza dover gestire direttamente le parti interne.

Ho anche creato delle classi astratte (ParteAnteriore e PartePosteriore) per definire il comportamento che ogni parte deve avere, forzando le classi concrete come Lanciafiamme, Rampino, Fumogeno, e LanciRazzi a implementare i metodi attacco e difendi.

Infine, ho creato diverse istanze della Batmobile, con diverse configurazioni di parte anteriore e posteriore. Ho anche mostrato come posso interagire con la Batmobile, chiedendole di attaccare o difendersi senza dover entrare nei dettagli di ogni singola parte.

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

In this code, I created a representation of the Batmobile made up of two main parts: the front part and the rear part. Each of these parts has a specific behavior and can be represented by a different object. For example, the front part can be a Flamethrower or a Rocket Launcher, while the rear part can be a Smoke Screen or a Grappling Hook.

I used a concept called composition (HAS-A), meaning that the Batmobile has a front part and a rear part. These two parts are not related through inheritance, but are separate objects that compose the Batmobile.

I used the constructor of the Batmobile class to inject the dependencies of the front and rear parts. So, when I create a new Batmobile, I pass the objects representing the front and rear parts. These objects are instantiated outside the Batmobile class and then passed to its constructor to compose the vehicle. This way, the Batmobile can vary in its behavior depending on the objects it receives (Flamethrower, Smoke Screen, etc.).

Inside the Batmobile class, I created two methods: attaccare (attack) and difendere (defend). These methods call the methods of the respective parts (e.g., attacco on the front part and difendi on the rear part), allowing the Batmobile to perform actions without directly managing the internal parts.

I also created abstract classes (ParteAnteriore and PartePosteriore) to define the behavior that each part must have, forcing the concrete classes like Flamethrower, Grappling Hook, Smoke Screen, and Rocket Launcher to implement the attacco and difendi methods.

Finally, I created various instances of the Batmobile, with different configurations for the front and rear parts. I also showed how I can interact with the Batmobile, asking it to attack or defend without having to delve into the details of each individual part.
