Un cliente ci chiede di implementare un applicativo web che consenta di gestire gli album di un'etichetta discografica indipendente. Nello specifico, tale applicativo deve consentire la gestione di album pubblicati e non (anche lo storico dei precedenti album) e gli artisti ad essi associati (uno solo per ogni album). Inoltre, il cliente richiede di poter gestire i generi musicali associati agli album (uno o più, a seconda dell'album)

Risorse:
- album
- artisti
- generi











<!-- CASO VOSTRO -->
1° giorno: creo il fulcro di tutto, cioè i progetti
2° giorno: scopro le relazioni. nello specifico, la one to many -> creo una nuova risorsa (types) e ne aggiungo a db la relazione con projects
-> creo la migration di types
-> creo la migration per aggiungere la colonna a projects (con la foreign key)
------> ho bisogno di procedere in quest'ordine perché non posso creare la foreign key senza la tabella types


<!-- CASO MIO -->
so che devo creare 3 risorse che sono collegate tra loro
-> creo le risorse a database nell'ordine in cui mi servono praticamente (cioè, anche se albums è la mia risorsa centrale, scelgo di creare prima artists perché so che albums avrà una dipendenza su tale tabella)
-> se creo prima artists, nella creazione di albums posso direttamente aggiungere il riferimento (foreign key) ad artists
